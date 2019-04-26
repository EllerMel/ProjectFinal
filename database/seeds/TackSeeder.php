<?php

use Illuminate\Database\Seeder;

class TackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Tack::create([
            'type' => 'Saddle',
            'description' => "School Saddle"
        ]);

        \App\Tack::create([
            'type' => 'Saddle',
            'description' => "Personal Saddle"
        ]);

        \App\Tack::create([
            'type' => 'Bridle',
            'description' => "Horse's Bridle"
        ]);

        \App\Tack::create([
            'type' => 'Bridle',
            'description' => "Personal Bridle"
        ]);

        \App\Tack::create([
            'type' => 'Girth',
            'description' => "50"
        ]);

        \App\Tack::create([
            'type' => 'Girth',
            'description' => "52"
        ]);
    }
}