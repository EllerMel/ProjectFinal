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

        \App\User::create([
            'name' => 'Mel',
            'email' => 'mel@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('melmelmel'),
            'admin' => 1,
            'approved_at' => now(),
        ]);

        \App\User::create([
            'name' => 'Lyss',
            'email' => 'Lyssandra5@yahoo.com',
            'email_verified_at' => now(),
            'password' => bcrypt('newnewnew'),
            'admin' => 0,
            'approved_at' => now(),
        ]);

        \App\User::create([
            'name' => 'Steph',
            'email' => 'steph@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('stephstephsteph'),
            'admin' => 0,
            'approved_at' => now(),
        ]);

        \App\User::create([
            'name' => 'Tori',
            'email' => 'tori@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('toritoritori'),
            'admin' => 0,
            'approved_at' => now(),
        ]);

        \App\User::create([
            'name' => 'Mal',
            'email' => 'mal@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('malmalmal'),
            'admin' => 0,
            'approved_at' => now(),
        ]);

        \App\User::create([
            'name' => 'Tressa',
            'email' => 'tressa@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('tressatressa'),
            'admin' => 0,
            'approved_at' => now(),
        ]);

        \App\User::create([
            'name' => 'Ash',
            'email' => 'ash@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('ashashash'),
            'admin' => 0,
            'approved_at' => now(),
        ]);

        \App\User::create([
            'name' => 'Char',
            'email' => 'char@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('charcharchar'),
            'admin' => 0,
            'approved_at' => now(),
        ]);

        \App\User::create([
            'name' => 'Jessica',
            'email' => 'jessica@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('jessicajessica'),
            'admin' => 0,
            'approved_at' => now(),
        ]);

        \App\User::create([
            'name' => 'Chelsea',
            'email' => 'chelsea@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('chelseachelsea'),
            'admin' => 0,
            'approved_at' => now(),
        ]);

        \App\User::create([
            'name' => 'Jocelyn',
            'email' => 'jocelyn@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('jocelynjocelyn'),
            'admin' => 0,
            'approved_at' => now(),
        ]);

        \App\User::create([
            'name' => 'Olivia',
            'email' => 'olivia@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('oliviaolivia'),
            'admin' => 0,
            'approved_at' => now(),
        ]);

        \App\User::create([
            'name' => 'Jen',
            'email' => 'jen@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('jenjenjen'),
            'admin' => 0,
            'approved_at' => now(),
        ]);

        \App\User::create([
            'name' => 'Kathleen',
            'email' => 'kathleen@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('kathleenkathleen'),
            'admin' => 0,
            'approved_at' => now(),
        ]);
    }
}