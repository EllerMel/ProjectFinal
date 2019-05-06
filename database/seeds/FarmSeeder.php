<?php

use Illuminate\Database\Seeder;

class FarmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Farm::create([
            'name' => 'M&M Equestrian Center',
            'address1' => '123 Anywhere Street',
            'city' => 'Lexington',
            'state' => 'KY',
            'zip' => '40511',
            'phone' => '555-555-5555',
            'email' => 'msmaedev@gmail.com',
            'website' => 'ellermel.github.io',
            'featureImg' => 'images/VBgesGlbq65lty6h9ccFDQcpAejBZeNMBNCCuR4w.jpeg',
            'stallImg' => 'images/uYKo2G4Q3d0958HUZNozS8qO7yRtHnFleIlzKfk0.png',
            'pastureImg' => 'images/gsoocST0fJWeVO5rdwIPk1BlWjVqxTaQsxTpj9Va.png',
        ]);
    }
}