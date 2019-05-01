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
            'phoneNumber' => '555-555-5555',
            'isInstructor' => "1"
        ]);

        \App\Individual::create([
            'displayName' => 'Mel',
            'user_id' => "2",
            'phoneNumber' => '333-333-3333',
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

        \App\Individual::create([
            'displayName' => 'Tori',
            'user_id' => "5",
            'phoneNumber' => '111-111-1111',
            'emergencyContact' => 'Sister',
            'emergencyPhone' => '222-222-2222'
        ]);

        \App\Individual::create([
            'displayName' => 'Mal',
            'user_id' => "6",
            'phoneNumber' => '333-333-3333',
            'emergencyContact' => 'Eddie',
            'emergencyPhone' => '444-444-4444'
        ]);

        \App\Individual::create([
            'displayName' => 'Tressa',
            'user_id' => "7",
            'phoneNumber' => '555-555-5555',
            'emergencyContact' => 'Mother',
            'emergencyPhone' => '777-777-7777'
        ]);

        \App\Individual::create([
            'displayName' => 'Ash',
            'user_id' => "8",
            'phoneNumber' => '888-888-8888',
            'emergencyContact' => 'Char',
            'emergencyPhone' => '999-999-9999'
        ]);

        \App\Individual::create([
            'displayName' => 'Char',
            'user_id' => "9",
            'phoneNumber' => '999-999-9999',
            'emergencyContact' => 'Char',
            'emergencyPhone' => '888-888-8888'
        ]);

        \App\Individual::create([
            'displayName' => 'Jessica',
            'user_id' => "10",
            'phoneNumber' => '000-000-0000',
            'emergencyContact' => 'Mother',
            'emergencyPhone' => '110-110-1100'
        ]);
    }
}