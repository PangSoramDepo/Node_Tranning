import { Body, Controller, Delete, Get, Param, ParseIntPipe, Patch, Post, Query, UsePipes, ValidationPipe } from '@nestjs/common';
import { CreateTaskDto } from './dto/create-task.dto';
import { GetTaskFilterDto } from './dto/get-task-filter.dto';
import { TaskStatusValidationPipe } from './pipes/task-status-validation.pipe';
import { TaskStatus } from './task-status.enum';
import { Task } from './task.entity';
import { TasksService } from './tasks.service';

@Controller('tasks')
export class TasksController {
    constructor(private tasksService: TasksService){}

    @Get()
    getTasks(@Query(ValidationPipe) getTaskFilterDto: GetTaskFilterDto): Promise<Task[]>{
      return this.tasksService.getAllTasks(getTaskFilterDto);
    }

    @Get('/:id')
    getTaskById(@Param('id', ParseIntPipe) id: number): Promise<Task> {
      return this.tasksService.getTaskById(id);
    }

    @Post()
    @UsePipes(ValidationPipe)
    createTask3(@Body() createTaskDto: CreateTaskDto): Promise<Task>{
      return this.tasksService.createTask(createTaskDto);
    }

    @Delete('/:id')
    deleteTask(@Param('id', ParseIntPipe) id: number): Promise<void>{
      return this.tasksService.deleteTask(id);
    }

    @Patch('/:id/status')
    updateTask(
      @Param('id', ParseIntPipe) id: number,
      @Body('status',TaskStatusValidationPipe) status: TaskStatus
    ) : Promise<Task> {
      return this.tasksService.updateTask(id,status);
    }
}
