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
        \App\Schedule::create([
            'lessonDate' => '2019-05-18',
            'lessonTime' => '15:30:00',
            'studentID' => '3',
            'horseID' => '1',
            'location' => 'Ring 1',
            'instructorID' => '1',
        ]);
    }
}