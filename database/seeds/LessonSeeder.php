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
            'lessonDate' => '2019-05-18',
            'lessonTime' => '15:30:00',
            'studentID' => '3',
            'horseID' => '1',
            'location' => 'Covered Arena',
            'instructorID' => '1',
        ]);

        \App\Lesson::create([
            'lessonDate' => '2019-05-19',
            'lessonTime' => '15:00:00',
            'studentID' => '4',
            'horseID' => '1',
            'location' => 'Jump Arena',
            'instructorID' => '2',
        ]);
    }
}