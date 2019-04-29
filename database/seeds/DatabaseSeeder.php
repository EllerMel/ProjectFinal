<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AdminSeeder::class);
        $this->call(IndivSeeder::class);
        $this->call(FarmSeeder::class);
        $this->call(HorseSeeder::class);
        $this->call(LessonSeeder::class);
        // $this->call(UsersTableSeeder::class);
    }
}
