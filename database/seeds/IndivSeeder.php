<?php

use Illuminate\Database\Seeder;

class IndivSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Individual::create([
            'displayName' => 'Mo',
            'user_id' => "1",
            'isInstructor' => "1"
        ]);

        \App\Individual::create([
            'displayName' => 'Mel',
            'user_id' => "2",
            'isInstructor' => "1"
        ]);

        \App\Individual::create([
            'displayName' => 'Lyss',
            'user_id' => "3",
            'phoneNumber' => '555-555-5555',
            'emergencyContact' => 'Father',
            'emergencyPhone' => '444-444-4444'
        ]);

        \App\Individual::create([
            'displayName' => 'Steph',
            'user_id' => "4",
            'phoneNumber' => '333-333-3333',
            'emergencyContact' => 'Mother',
            'emergencyPhone' => '222-222-2222'
        ]);
    }
}