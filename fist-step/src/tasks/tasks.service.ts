import { Injectable, NotFoundException } from '@nestjs/common';
import { Task, TaskStatus } from './task.model';
import { v4 as uuidv4 } from 'uuid';
import { CreateTaskDto } from './dto/create-task.dto';
import { GetTaskFilterDto } from './dto/get-task-filter.dto';

@Injectable()
export class TasksService {

    private tasks : Task[] = [];

    getAllTasks(): Task[]{
        return this.tasks;
    }

    getTasksWithFilters(filterDto : GetTaskFilterDto): Task[] {
        const { status, search } = filterDto;
        let tasks= this.getAllTasks();
        if(status)
            tasks = tasks.filter(task => task.status == status);
        if(search)
            tasks = tasks.filter(task => task.title.includes(search) || task.description.includes(search));
        return tasks;
    }

    getTaskById(id:String): Task {
        const found = this.tasks.find(task => task.id==id);
        if(!found) throw new NotFoundException(`Task with ${id} Not Found!!!`);
        return found;
    }

    createTask(createTaskDto:CreateTaskDto){
        const { title, description } = createTaskDto;
        const task : Task = {
            id: uuidv4(),
            title,
            description,
            status: TaskStatus.OPEN
        };

        this.tasks.push(task);
        return task;
    }

    deleteTask(id:String): void{
        // Approach 1
        // let index = this.tasks.indexOf(this.tasks.find(task => task.id==id));
        // this.tasks.splice(index,1);

        // Approach 2
        // this.tasks = this.tasks.filter(task => task.id != id);

        // Approach 3
        const found = this.getTaskById(id);
        this.tasks = this.tasks.filter(task => task.id != found.id);
    }

    // Approach 1
    updateTask(id: string, status: string): Task{
        let task = this.tasks.find(task => task.id==id);
        task.status = TaskStatus[status];
        return task;
    }

    // Approach 2
    updateTask2(id: string, status: TaskStatus){
        //Without repeat not found validation code --> this approach is the win win situation NestJS
        const task = this.getTaskById(id);
        task.status = status;
        return task;
    }
}
