import { Injectable, NotFoundException } from '@nestjs/common';
import { TaskStatus } from './task-status.enum';
import { CreateTaskDto } from './dto/create-task.dto';
import { GetTaskFilterDto } from './dto/get-task-filter.dto';
import { InjectRepository } from '@nestjs/typeorm';
import { TaskRepository } from './task.repository';
import { Task } from './task.entity';
import { User } from 'src/auth/user.entity';

@Injectable()
export class TasksService {
    constructor(
        @InjectRepository(TaskRepository)
        private taskRepository: TaskRepository
    ){}

    async getAllTasks(
    filterDto : GetTaskFilterDto,
    user: User
    ): Promise<Task[]>{
        return await this.taskRepository.getTask(filterDto,user);
    }

    async getTaskById(
        id: number,
        user: User
    ): Promise<Task>{
        const found = await this.taskRepository.findOne({ where: { id, userId: user.id }});
        if(!found) throw new NotFoundException(`Task with ${id} Not Found!!!`);
        return found;
    }

    async createTask(
        createTaskDto:CreateTaskDto,
        user: User,
    ): Promise<Task>{
        return this.taskRepository.createTask(createTaskDto,user);
    }

    async deleteTask(id: number, user: User): Promise<void>{
        const result = await this.taskRepository.delete({ id, userId: user.id });
        if(result.affected === 0) throw new NotFoundException(`Task with ${id} Not Found!!!`);
    }

    async updateTask(id: number, status: TaskStatus, user: User){
        //Without repeat not found validation code --> this approach is the win win situation NestJS
        const task = await this.getTaskById(id, user);
        task.status = status;
        await task.save();
        return task;
    }
}
