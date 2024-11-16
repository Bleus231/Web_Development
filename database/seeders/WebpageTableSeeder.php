<?php

namespace Database\Seeders;

use App\Models\Webpage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WebpageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        //Creates a webpage object called laravel and saves it
        $w = new Webpage;
        $w->name = 'https://Laravel.com';
        $w->save();
    }
}
