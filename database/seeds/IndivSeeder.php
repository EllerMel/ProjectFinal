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
            'displayName' => 'Lyss',
            'user_id' => "2",
            'phoneNumber' => '555-555-5555',
            'emergencyContact' => 'Father',
            'emergencyPhone' => '444-444-4444'
        ]);
    }
}