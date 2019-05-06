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
            'phoneNumber' => '248-555-4444',
            'isInstructor' => "1"
        ]);

        \App\Individual::create([
            'displayName' => 'Mel',
            'user_id' => "2",
            'phoneNumber' => '248-444-5555',
            'isInstructor' => "1"
        ]);

        \App\Individual::create([
            'displayName' => 'Lyss',
            'user_id' => "3",
            'phoneNumber' => '248-777-9999',
            'emergencyContact' => 'Father',
            'emergencyPhone' => '313-444-4444'
        ]);

        \App\Individual::create([
            'displayName' => 'Steph',
            'user_id' => "4",
            'phoneNumber' => '248-333-4444',
            'emergencyContact' => 'Mother',
            'emergencyPhone' => '248-222-2222'
        ]);

        \App\Individual::create([
            'displayName' => 'Tori',
            'user_id' => "5",
            'phoneNumber' => '574-111-1111',
            'emergencyContact' => 'Larry',
            'emergencyPhone' => '502-222-2222'
        ]);

        \App\Individual::create([
            'displayName' => 'Mal',
            'user_id' => "6",
            'phoneNumber' => '248-444-3333',
            'emergencyContact' => 'Eddie',
            'emergencyPhone' => '444-444-4444'
        ]);

        \App\Individual::create([
            'displayName' => 'Tressa',
            'user_id' => "7",
            'phoneNumber' => '423-555-5555',
            'emergencyContact' => 'Mother',
            'emergencyPhone' => '777-777-7777'
        ]);

        \App\Individual::create([
            'displayName' => 'Ash',
            'user_id' => "8",
            'phoneNumber' => '248-888-8888',
            'emergencyContact' => 'Char',
            'emergencyPhone' => '999-999-9999'
        ]);

        \App\Individual::create([
            'displayName' => 'Char',
            'user_id' => "9",
            'phoneNumber' => '999-999-9999',
            'emergencyContact' => 'Ash',
            'emergencyPhone' => '248-888-8888'
        ]);

        \App\Individual::create([
            'displayName' => 'Jessica',
            'user_id' => "10",
            'phoneNumber' => '859-000-0000',
            'emergencyContact' => 'Mother',
            'emergencyPhone' => '110-110-1100'
        ]);

        \App\Individual::create([
            'displayName' => 'Chelsea',
            'user_id' => "11",
            'phoneNumber' => '859-222-333',
            'emergencyContact' => 'Mark',
            'emergencyPhone' => '333-222-1111'
        ]);

        \App\Individual::create([
            'displayName' => 'Jocelyn',
            'user_id' => "12",
            'phoneNumber' => '607-555-7777',
            'emergencyContact' => 'Brother',
            'emergencyPhone' => '777-555-4444'
        ]);

        \App\Individual::create([
            'displayName' => 'Olivia',
            'user_id' => "13",
            'phoneNumber' => '859-999-0000',
            'emergencyContact' => 'Scotty',
            'emergencyPhone' => '000-999-8888'
        ]);

        \App\Individual::create([
            'displayName' => 'Jen',
            'user_id' => "14",
            'phoneNumber' => '517-000-999',
            'emergencyContact' => 'Pam',
            'emergencyPhone' => '888-777-5555'
        ]);

        \App\Individual::create([
            'displayName' => 'Kathleen',
            'user_id' => "15",
            'phoneNumber' => '859-111-0000',
            'emergencyContact' => 'Mother',
            'emergencyPhone' => '111-000-1111'
        ]);
    }
}