import { Args, Mutation, Parent, Query, ResolveField, Resolver } from "@nestjs/graphql";
import { StudentService } from "src/student/student.service";
import { AssignStudentToLessonInput } from "./assign-student-to-lesson.input";
import { Lesson } from "./lesson.entity";
import { CreateLessonInput } from "./lesson.input";
import { LessonService } from "./lesson.service";
import { LessonType } from "./lesson.type";

@Resolver(of => LessonType)
export class LessonResolver {

    constructor(
        private lessonService: LessonService,
        private studentService: StudentService
    ){}

    @Query(returns => [LessonType])
    getAllLesson() {
        return this.lessonService.getAllLesson();
    }

    @Query(returns => LessonType)
    lesson(
        @Args('id') id: string
    ) {
        return this.lessonService.getLesson(id);
    }

    @Mutation(returns => LessonType)
    createLesson(
        @Args('createLesson') createLessonInput: CreateLessonInput
    ){
        return this.lessonService.createLesson(createLessonInput);
    }

    @Mutation(returns => LessonType)
    assignStudentToLesson(
        @Args('assignStudentToLessonInput') assignStudentToLessonInput: AssignStudentToLessonInput
    ){
        const { lessonID, studentIds } = assignStudentToLessonInput;
        return this.lessonService.assignStudentToLesson(lessonID,studentIds);
    }

    @ResolveField()
    async students(@Parent() lesson: Lesson){
        return this.studentService.getManyStudents(lesson.students);
    }
}