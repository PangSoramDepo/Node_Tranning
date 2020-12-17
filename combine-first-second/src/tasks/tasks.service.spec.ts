import { NotFoundException } from "@nestjs/common";
import { Test } from "@nestjs/testing";
import { GetTaskFilterDto } from "./dto/get-task-filter.dto";
import { TaskStatus } from "./task-status.enum";
import { TaskRepository } from "./task.repository";
import { TasksService } from "./tasks.service";

const mockUser = { id: 9, username: "Depo" };

const mockTaskRepository = () => ({
    getTasks: jest.fn(),
    findOne: jest.fn(),
    createTask: jest.fn(),
    delete: jest.fn(),
});

describe('TasksService', () => {
    let tasksService;
    let taskRepository;

    beforeEach(async () => {
        const module = await Test.createTestingModule({
            providers: [
                TasksService,
                { provide: TaskRepository, useFactory: mockTaskRepository }
            ],
        }).compile();

        tasksService = await module.get(TasksService);
        taskRepository = await module.get(TaskRepository);
    });

    describe('getTasks', () => {
        it('gets all tasks from the repository', async () => {
            taskRepository.getTasks.mockResolvedValue('someValue');
            expect(taskRepository.getTasks).not.toHaveBeenCalled();

            const filters: GetTaskFilterDto = { status: TaskStatus.IN_PROGRESS, search: 'Some search query' };
            const result = await tasksService.getTasks(filters,mockUser);
            expect(taskRepository.getTasks).toHaveBeenCalled();
            expect(result).toEqual('someValue');
        });
    });

    describe('getTaskById', () => {
        it('calls taskRepository.findOne() and successfully retrieve and return the task', async () => {
            const mockTask = { title: 'Test Task', description: 'Test Desc '};
            taskRepository.findOne.mockResolvedValue(mockTask);

            const result = await tasksService.getTaskById(1, mockUser);
            expect(result).toEqual(mockTask);

            expect(taskRepository.findOne).toHaveBeenCalledWith({
                where: {
                    id: 1,
                    userId: mockUser.id
                }
            });
        });

        it('Throw an error as task is not found', () => {
            taskRepository.findOne.mockResolvedValue(null);
            expect(tasksService.getTaskById(1,mockUser)).rejects.toThrow(NotFoundException);
        });
    });

    describe('createTask', () => {
        it('call taskRepository.create() and return result', async () => {
            const createTaskDto = { title: 'Test Task', description: 'Test Desc'};
            taskRepository.createTask.mockResolvedValue('someValue');

            expect(taskRepository.createTask).not.toHaveBeenCalled();
            const result = await tasksService.createTask( createTaskDto, mockUser);
            expect(taskRepository.createTask).toHaveBeenCalledWith(createTaskDto, mockUser);
            expect(result).toEqual('someValue');
        });
    });

    describe('deleteTask', () => {
        it('call taskRepository.delete() to delete task', async () => {
            expect(taskRepository.delete).not.toHaveBeenCalled();
            taskRepository.delete.mockResolvedValue({ affected: 1 });
            const result = await tasksService.deleteTask(1,mockUser);
            expect(taskRepository.delete).toHaveBeenCalledWith({ id: 1, userId: mockUser.id });
        });

        it('Throw an errro as task could not be found', () => {
            taskRepository.delete.mockResolvedValue({ affected: 0 });
            expect(tasksService.deleteTask(1, mockUser)).rejects.toThrow(NotFoundException);
        });
    });

    describe('updateTask', () => {
        it('call taskRepository.save() to update task', async () => {
            const save = jest.fn().mockReturnValue(true);
            tasksService.getTaskById = jest.fn().mockReturnValue({
                status: TaskStatus.OPEN,
                save,
            });

            expect(tasksService.getTaskById).not.toHaveBeenCalled();
            expect(save).not.toHaveBeenCalled();
            const result = await tasksService.updateTask(1,TaskStatus.DONE,mockUser);
            expect(tasksService.getTaskById).toHaveBeenCalled();
            expect(save).toHaveBeenCalled();
            expect(result.status).toEqual(TaskStatus.DONE);
        });
    });
});