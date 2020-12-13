import { Injectable, NotFoundException } from '@nestjs/common';
import { TaskStatus } from './task-status.enum';
import { CreateTaskDto } from './dto/create-task.dto';
import { GetTaskFilterDto } from './dto/get-task-filter.dto';
import { InjectRepository } from '@nestjs/typeorm';
import { TaskRepository } from './task.repository';
import { Task } from './task.entity';

@Injectable()
export class TasksService {
    constructor(
        @InjectRepository(TaskRepository)
        private taskRepository: TaskRepository
    ){}

    // getAllTasks(): Task[]{
    //     return this.tasks;
    // }

    // getTasksWithFilters(filterDto : GetTaskFilterDto): Task[] {
    //     const { status, search } = filterDto;
    //     let tasks= this.getAllTasks();
    //     if(status)
    //         tasks = tasks.filter(task => task.status == status);
    //     if(search)
    //         tasks = tasks.filter(task => task.title.includes(search) || task.description.includes(search));
    //     return tasks;
    // }

    async getTaskById(id: number): Promise<Task>{
        const found = await this.taskRepository.findOne(id);
        if(!found) throw new NotFoundException(`Task with ${id} Not Found!!!`);
        return found;
    }

    async createTask(createTaskDto:CreateTaskDto): Promise<Task>{
        return this.taskRepository.createTask(createTaskDto);
    }

    // deleteTask(id:String): void{
    //     // Approach 1
    //     // let index = this.tasks.indexOf(this.tasks.find(task => task.id==id));
    //     // this.tasks.splice(index,1);

    //     // Approach 2
    //     // this.tasks = this.tasks.filter(task => task.id != id);

    //     // Approach 3
    //     const found = this.getTaskById(id);
    //     this.tasks = this.tasks.filter(task => task.id != found.id);
    // }

    // // Approach 1
    // updateTask(id: string, status: string): Task{
    //     let task = this.tasks.find(task => task.id==id);
    //     task.status = TaskStatus[status];
    //     return task;
    // }

    // // Approach 2
    // updateTask2(id: string, status: TaskStatus){
    //     //Without repeat not found validation code --> this approach is the win win situation NestJS
    //     const task = this.getTaskById(id);
    //     task.status = status;
    //     return task;
    // }
}
