<?php

use Illuminate\Database\Seeder;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Location::create([
            'type' => "Pasture",
            'description' => "Geldings Field",
        ]);

        \App\Location::create([
            'type' => "Pasture",
            'description' => "Mares Field",
        ]);

        \App\Location::create([
            'type' => "Pasture",
            'description' => "Retired Field",
        ]);

        \App\Location::create([
            'type' => "Pasture",
            'description' => "Single Field 1",
        ]);

        \App\Location::create([
            'type' => "Pasture",
            'description' => "Single Field 2",
        ]);

        \App\Location::create([
            'type' => "Pasture",
            'description' => "Single Field 3",
        ]);

        \App\Location::create([
            'type' => "Arena",
            'description' => "Covered Arena",
        ]);

        \App\Location::create([
            'type' => "Arena",
            'description' => "Outdoor Jump Ring",
        ]);

        \App\Location::create([
            'type' => "Arena",
            'description' => "Cross Country Field",
        ]);

        \App\Location::create([
            'type' => "Arena",
            'description' => "Offsite - Masterson",
        ]);

        \App\Location::create([
            'type' => "Arena",
            'description' => "Offsite - KHP",
        ]);
    }
}