<?php

use Illuminate\Database\Seeder;

class HorseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Horse::create([
            'name' => "Stormy",
            'gender' => "Gelding",
            'color' => "Grey",
            'saddle' => "Lesson Saddle - Low rise",
            'bridle' => "Labeled Bridle",
            'girth' => "52",
            'miscTack' => "Riser Pad",
            'pastureID' => "1",
            'stall' => "n/a",
            'mainImg' => "images/HkLMMN8gt7YEQNqNfw0v21wwYX07qJS0hxr221yz.jpeg",
            'secondImg' => "images/Ztwv8axpkvIQlhjqtufQe27ZabyUEImzqP0Kqby4.jpeg",
            'thirdImg' => "images/vkBN1FDle0THMmEmNy0AkMjh6Gq2Z2GTwm3tSEw8.jpeg",
            'fourthImg' => "images/J8wmJtdgEGcsf1NzBUTEUBotd1rwSP1g75A3rPqY.jpeg"
        ]);
    }
}