<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run()
    {
        $this->call(CareerSeeder::class);
        $this->call(SemesterSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(PeriodSeeder::class);
        
        $this->call(UserSeeder::class);
       
    }
}
