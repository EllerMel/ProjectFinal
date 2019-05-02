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

        \App\Horse::create([
            'name' => "Tank",
            'gender' => "Gelding",
            'color' => "Paint",
            'markings' => "Four White Socks",
            'saddle' => "Lesson Saddle - Synthetic Western",
            'bridle' => "Labeled Bridle",
            'girth' => "50",
            'pastureID' => "1",
            'stall' => "2",
            'mainImg' => "images/0x4WoBMguE0IAi07tx3Zzn5EHEcXdqFl4PWiIIUq.jpeg",
            'secondImg' => "images/NLR8OyHtns1IppJ7te4Mt5Nm8k3xLbkVarh25rk5.jpeg",
        ]);

        \App\Horse::create([
            'name' => "Amarillo",
            'gender' => "Gelding",
            'color' => "Paint",
            'markings' => "White Face",
            'saddle' => "Lesson Saddle - Synthetic Western",
            'bridle' => "Labeled Bridle",
            'girth' => "48",
            'pastureID' => "1",
            'stall' => "4",
            'mainImg' => "images/OnC3SWcSt86GCsvMeXSaUuSno6p2CXlwwBUvNXgT.jpeg",
            'secondImg' => "images/W9hCbHhUW7yhVqtTtwhOHnSCopOgyWVKr09YeUxp.jpeg",
        ]);

        \App\Horse::create([
            'name' => "Bo",
            'gender' => "Gelding",
            'color' => "Brown",
            'markings' => "Small Star",
            'saddle' => "Lesson Saddle - Synthetic Western",
            'bridle' => "Labeled Bridle",
            'girth' => "52",
            'pastureID' => "3",
            'stall' => "3",
            'mainImg' => "images/4uxEZJgdFMKNTniJu2zN6ctlUBNOXHVXzy90cGqS.jpeg",
            'secondImg' => "images/jq3ilmKA5rJI45QUNTrrYMlKhnAKrMiyVBxp0I1E.jpeg",
        ]);

        \App\Horse::create([
            'name' => "Rocky",
            'gender' => "Gelding",
            'color' => "Chocolate",
            'markings' => "Small Star",
            'saddle' => "Lesson Saddle - Synthetic Western",
            'bridle' => "Labeled Bridle",
            'girth' => "50",
            'pastureID' => "3",
            'stall' => "5",
            'mainImg' => "images/aQMiu7eEygHxCTuEuS5pxnhR9teSgj9HhIXRFcRD.jpeg",
            'secondImg' => "images/HuCKiX1u1F3Wigq9jDdMhAjeaiPO0VPh6eWTUQGK.jpeg",
        ]);

        \App\Horse::create([
            'name' => "Melisandre",
            'gender' => "Mare",
            'color' => "Chestnut",
            'markings' => "White Stripe. LH White Sock.",
            'saddle' => "Lesson Saddle - Mid Rise",
            'bridle' => "Labeled Bridle",
            'girth' => "52",
            'pastureID' => "2",
            'stall' => "1",
            'mainImg' => "images/mQMx6D2SLPJhGTvL8OGTnwNDdvUBOTNufAJVMxFI.jpeg",
            'secondImg' => "images/k52Yfo0Zzi6Oa3OX4Ozijcfgvnq8WGNc6KXVgyLx.jpeg",
        ]);

        \App\Horse::create([
            'name' => "Armani",
            'gender' => "Gelding",
            'color' => "Bay",
            'markings' => "Star. White on FL & FR. RH Sock.",
            'saddle' => "Lesson Saddle - Low Rise",
            'bridle' => "Labeled Bridle",
            'girth' => "48",
            'pastureID' => "1",
            'stall' => "6",
            'mainImg' => "images/N59KGZ6m1G5LEHDmr2vssH3MGQ7jRwxZlZhwZMR7.jpeg",
            'secondImg' => "images/h4gspcrif0F95njLLEkAJUBSqkPoEwe9ragTC3wv.jpeg",
            'isInactive' => '1'
        ]);

        \App\Horse::create([
            'name' => "Sullivan",
            'gender' => "Gelding",
            'color' => "Chestnut",
            'markings' => "Star. Snip. LH Sock.",
            'saddle' => "Lesson Saddle - Low Rise",
            'bridle' => "Labeled Bridle",
            'girth' => "52",
            'miscTack' => "Riser Pad",
            'pastureID' => "1",
            'stall' => "7",
            'mainImg' => "images/75KOkrzB7kxL07EXvHE78Qs4cC8ptH99oPVTmpZ2.jpeg",
            'secondImg' => "images/D5vlfrVfV7QwwJ8Drk2Co5EbSnHy9qEVhYVHesKX.jpeg",
        ]);

        \App\Horse::create([
            'name' => "Shiloh",
            'gender' => "Gelding",
            'color' => "Appaloosa",
            'saddle' => "Lesson Saddle - Synthetic Western",
            'bridle' => "Labeled Bridle",
            'girth' => "50",
            'pastureID' => "4",
            'mainImg' => "images/QWwgh2aVYMvXeCpBNIXXJ3ZKuazBP1WUmY0e1CVb.png",
            'secondImg' => "images/Mp3MRCEHITnd7aSpr1mjltv4EethzMUEJLCqN8VS.png",
        ]);
    }
}