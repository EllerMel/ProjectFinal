<?php

use Illuminate\Database\Seeder;

class LessonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Lesson::create([
            'lessonDate' => '2019-05-04',
            'lessonTime' => '12:30:00',
            'studentID' => '3',
            'horseID' => '1',
            'locationID' => '8',
            'instructorID' => '1',
        ]);

        \App\Lesson::create([
            'lessonDate' => '2019-05-04',
            'lessonTime' => '13:30:00',
            'studentID' => '5',
            'horseID' => '2',
            'locationID' => '7',
            'instructorID' => '1',
        ]);

        \App\Lesson::create([
            'lessonDate' => '2019-05-04',
            'lessonTime' => '14:30:00',
            'studentID' => '4',
            'horseID' => '3',
            'locationID' => '8',
            'instructorID' => '1',
        ]);

        \App\Lesson::create([
            'lessonDate' => '2019-05-04',
            'lessonTime' => '15:30:00',
            'studentID' => '7',
            'horseID' => '6',
            'locationID' => '7',
            'instructorID' => '1',
            'isCanceled' => '1',
        ]);

        \App\Lesson::create([
            'lessonDate' => '2019-05-05',
            'lessonTime' => '12:30:00',
            'studentID' => '7',
            'horseID' => '5',
            'locationID' => '8',
            'instructorID' => '2',
        ]);

        \App\Lesson::create([
            'lessonDate' => '2019-05-05',
            'lessonTime' => '13:30:00',
            'studentID' => '8',
            'horseID' => '6',
            'locationID' => '8',
            'instructorID' => '2',
        ]);

        \App\Lesson::create([
            'lessonDate' => '2019-05-05',
            'lessonTime' => '14:30:00',
            'studentID' => '9',
            'horseID' => '7',
            'locationID' => '8',
            'instructorID' => '2',
        ]);

        \App\Lesson::create([
            'lessonDate' => '2019-05-05',
            'lessonTime' => '15:30:00',
            'studentID' => '10',
            'horseID' => '8',
            'locationID' => '9',
            'instructorID' => '2',
        ]);

        \App\Lesson::create([
            'lessonDate' => '2019-05-17',
            'lessonTime' => '12:30:00',
            'studentID' => '3',
            'horseID' => '2',
            'locationID' => '9',
            'instructorID' => '2',
            'isPending' => '1',
        ]);

        \App\Lesson::create([
            'lessonDate' => '2019-05-18',
            'lessonTime' => '12:30:00',
            'studentID' => '3',
            'horseID' => '1',
            'locationID' => '7',
            'instructorID' => '1',
            'isCanceled' => '1',
        ]);

        \App\Lesson::create([
            'lessonDate' => '2019-05-18',
            'lessonTime' => '13:30:00',
            'studentID' => '4',
            'horseID' => '2',
            'locationID' => '7',
            'instructorID' => '1',
        ]);

        \App\Lesson::create([
            'lessonDate' => '2019-05-18',
            'lessonTime' => '14:30:00',
            'studentID' => '5',
            'horseID' => '3',
            'locationID' => '7',
            'instructorID' => '1',
        ]);

        \App\Lesson::create([
            'lessonDate' => '2019-05-18',
            'lessonTime' => '15:30:00',
            'studentID' => '6',
            'horseID' => '4',
            'locationID' => '7',
            'instructorID' => '1',
        ]);

        \App\Lesson::create([
            'lessonDate' => '2019-05-19',
            'lessonTime' => '12:30:00',
            'studentID' => '7',
            'horseID' => '5',
            'locationID' => '8',
            'instructorID' => '2',
        ]);

        \App\Lesson::create([
            'lessonDate' => '2019-05-19',
            'lessonTime' => '13:30:00',
            'studentID' => '8',
            'horseID' => '6',
            'locationID' => '8',
            'instructorID' => '2',
        ]);

        \App\Lesson::create([
            'lessonDate' => '2019-05-19',
            'lessonTime' => '14:30:00',
            'studentID' => '9',
            'horseID' => '7',
            'locationID' => '8',
            'instructorID' => '2',
        ]);

        \App\Lesson::create([
            'lessonDate' => '2019-05-19',
            'lessonTime' => '15:30:00',
            'studentID' => '10',
            'horseID' => '8',
            'locationID' => '8',
            'instructorID' => '2',
        ]);

        \App\Lesson::create([
            'lessonDate' => '2019-05-25',
            'lessonTime' => '12:30:00',
            'studentID' => '3',
            'horseID' => '7',
            'locationID' => '7',
            'instructorID' => '1',
        ]);

        \App\Lesson::create([
            'lessonDate' => '2019-05-25',
            'lessonTime' => '13:30:00',
            'studentID' => '4',
            'horseID' => '2',
            'locationID' => '7',
            'instructorID' => '1',
        ]);

        \App\Lesson::create([
            'lessonDate' => '2019-05-25',
            'lessonTime' => '14:30:00',
            'studentID' => '5',
            'horseID' => '3',
            'locationID' => '7',
            'instructorID' => '1',
        ]);

        \App\Lesson::create([
            'lessonDate' => '2019-05-25',
            'lessonTime' => '15:30:00',
            'studentID' => '6',
            'horseID' => '4',
            'locationID' => '7',
            'instructorID' => '1',
        ]);

        \App\Lesson::create([
            'lessonDate' => '2019-05-26',
            'lessonTime' => '12:30:00',
            'studentID' => '7',
            'horseID' => '5',
            'locationID' => '8',
            'instructorID' => '2',
        ]);

        \App\Lesson::create([
            'lessonDate' => '2019-05-26',
            'lessonTime' => '13:30:00',
            'studentID' => '8',
            'horseID' => '6',
            'locationID' => '8',
            'instructorID' => '2',
        ]);

        \App\Lesson::create([
            'lessonDate' => '2019-05-26',
            'lessonTime' => '14:30:00',
            'studentID' => '9',
            'horseID' => '7',
            'locationID' => '8',
            'instructorID' => '2',
        ]);

        \App\Lesson::create([
            'lessonDate' => '2019-05-26',
            'lessonTime' => '15:30:00',
            'studentID' => '10',
            'horseID' => '8',
            'locationID' => '8',
            'instructorID' => '2',
        ]);

        \App\Lesson::create([
            'lessonDate' => '2019-06-01',
            'lessonTime' => '12:30:00',
            'studentID' => '3',
            'horseID' => '9',
            'locationID' => '7',
            'instructorID' => '1',
        ]);

        \App\Lesson::create([
            'lessonDate' => '2019-06-01',
            'lessonTime' => '13:30:00',
            'studentID' => '4',
            'horseID' => '2',
            'locationID' => '7',
            'instructorID' => '1',
        ]);

        \App\Lesson::create([
            'lessonDate' => '2019-06-01',
            'lessonTime' => '14:30:00',
            'studentID' => '5',
            'horseID' => '3',
            'locationID' => '7',
            'instructorID' => '1',
        ]);

        \App\Lesson::create([
            'lessonDate' => '2019-06-01',
            'lessonTime' => '15:30:00',
            'studentID' => '6',
            'horseID' => '4',
            'locationID' => '9',
            'instructorID' => '1',
        ]);

        \App\Lesson::create([
            'lessonDate' => '2019-06-02',
            'lessonTime' => '12:30:00',
            'studentID' => '7',
            'horseID' => '5',
            'locationID' => '8',
            'instructorID' => '2',
        ]);

        \App\Lesson::create([
            'lessonDate' => '2019-06-02',
            'lessonTime' => '13:30:00',
            'studentID' => '8',
            'horseID' => '6',
            'locationID' => '8',
            'instructorID' => '2',
        ]);

        \App\Lesson::create([
            'lessonDate' => '2019-06-02',
            'lessonTime' => '14:30:00',
            'studentID' => '9',
            'horseID' => '7',
            'locationID' => '8',
            'instructorID' => '2',
        ]);

        \App\Lesson::create([
            'lessonDate' => '2019-06-02',
            'lessonTime' => '15:30:00',
            'studentID' => '10',
            'horseID' => '8',
            'locationID' => '9',
            'instructorID' => '2',
        ]);

        \App\Lesson::create([
            'lessonDate' => '2019-06-08',
            'lessonTime' => '12:30:00',
            'studentID' => '15',
            'horseID' => '8',
            'locationID' => '7',
            'instructorID' => '1',
        ]);

        \App\Lesson::create([
            'lessonDate' => '2019-06-08',
            'lessonTime' => '13:30:00',
            'studentID' => '14',
            'horseID' => '7',
            'locationID' => '7',
            'instructorID' => '1',
        ]);

        \App\Lesson::create([
            'lessonDate' => '2019-06-08',
            'lessonTime' => '14:30:00',
            'studentID' => '13',
            'horseID' => '6',
            'locationID' => '7',
            'instructorID' => '1',
        ]);

        \App\Lesson::create([
            'lessonDate' => '2019-06-08',
            'lessonTime' => '15:30:00',
            'studentID' => '12',
            'horseID' => '5',
            'locationID' => '9',
            'instructorID' => '1',
        ]);
    }
}