<?php

namespace Database\Seeders;

use App\Models\Career;
use Illuminate\Database\Seeder;

class CareerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $career1 = Career::create(['name' => 'INGENIERÍA EN SISTEMAS COMPUTACIONALES',
                                   'key' => 'ISC',
                                   'description' => 'carrera del área de tecnología']);

        $career2 = Career::create(['name' => 'INGENIERÍA QUÍMICA',
                                   'key' => 'IQU',
                                   'description' => 'carrera del área de química']);

        $career3 = Career::create(['name' => 'INGENIERÍA MECATRÓNICA',
                                   'key' => 'IMEC',
                                   'description' => 'carrera del área de mecatrónica']);

    }
}
