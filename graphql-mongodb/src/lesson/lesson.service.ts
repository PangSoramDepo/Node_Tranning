import { Injectable } from '@nestjs/common';
import { InjectRepository } from '@nestjs/typeorm';
import { Repository } from 'typeorm';
import { Lesson } from './lesson.entity';
import { v4 as uuid } from 'uuid';

@Injectable()
export class LessonService {
    constructor(
        @InjectRepository(Lesson)
        private lessonRepository: Repository<Lesson>,
    ){}

    async getLesson(id){
        // This Mongo will search for mongo id (_id)
        // return this.lessonRepository.findOne(id);

        // This will search for id
        return this.lessonRepository.findOne({ id });
    }

    async createLesson(name, startDate, endDate) {
        const lesson = this.lessonRepository.create({
            id: uuid(),
            name,
            startDate,
            endDate
        });

        return this.lessonRepository.save(lesson);
    }
}
