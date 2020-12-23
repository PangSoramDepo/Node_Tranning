import { Injectable } from '@nestjs/common';
import { InjectRepository } from '@nestjs/typeorm';
import { Repository } from 'typeorm';
import { Lesson } from './lesson.entity';
import { v4 as uuid } from 'uuid';
import { CreateLessonInput } from './lesson.input';

@Injectable()
export class LessonService {
    constructor(
        @InjectRepository(Lesson)
        private lessonRepository: Repository<Lesson>,
    ){}

    async getAllLesson(){
        return this.lessonRepository.find();
    }

    async getLesson(id){
        // This Mongo will search for mongo id (_id)
        // return this.lessonRepository.findOne(id);

        // This will search for id
        return this.lessonRepository.findOne({ id });
    }

    async createLesson(createLessonInput: CreateLessonInput) {
        const { name, startDate, endDate } = createLessonInput;
        const lesson = this.lessonRepository.create({
            id: uuid(),
            name,
            startDate,
            endDate,
            students: []
        });

        return this.lessonRepository.save(lesson);
    }

    async assignStudentToLesson(lessonId: string, studentIds: string[]){
        const lesson = await this.lessonRepository.findOne({ id: lessonId });
        lesson.students = [...lesson.students, ...studentIds];
        return this.lessonRepository.save(lesson);
    }
}
