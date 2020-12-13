import { Body, Controller, Delete, Get, Param, Patch, Post, Query, UsePipes, ValidationPipe } from '@nestjs/common';
import { CreateTaskDto } from './dto/create-task.dto';
import { GetTaskFilterDto } from './dto/get-task-filter.dto';
import { Task, TaskStatus } from './task.model';
import { TasksService } from './tasks.service';

@Controller('tasks')
export class TasksController {
    constructor(private tasksService: TasksService){}

    @Get()
    getTasks(@Query() getTaskFilterDto: GetTaskFilterDto): Task[]{
      if(Object.keys(getTaskFilterDto).length)
        return this.tasksService.getTasksWithFilters(getTaskFilterDto);
      return this.tasksService.getAllTasks();
    }

    @Get('/:id')
    getTaskById(@Param('id') id:String): Task{
      return this.tasksService.getTaskById(id);
    }

    // Approach 3 apply DTO
    @Post()
    @UsePipes(ValidationPipe)
    createTask3(@Body() createTaskDto: CreateTaskDto): Task{
      return this.tasksService.createTask(createTaskDto);
    }

    @Delete('/:id')
    deleteTask(@Param('id') id: string){
      return this.tasksService.deleteTask(id);
    }

    //Approach 1
    // @Patch('/:id/:status')
    // updateTask(
    //   @Param('id') id: string,
    //   @Param('status') status: string
    // ) : Task {
    //   return this.tasksService.updateTask(id,status);
    // }

    //Approach 2
    @Patch('/:id/status')
    updateTask2(
      @Param('id') id: string,
      @Body('status') status: TaskStatus
    ) : Task {
      return this.tasksService.updateTask2(id,status);
    }
}
