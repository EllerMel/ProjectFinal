<?php

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::create([
            'name' => 'Admin',
            'email' => 'msmaedev@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('verysafepassword5'),
            'admin' => 1,
            'approved_at' => now(),
        ]);
    }
}