<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        //Creates 3 admins that each have 3 seperate users they are assigned to administrating
        $a = Admin::factory()->count(3)
           ->has(User::factory()->count(3))
            ->create();

        

        
    }
}
