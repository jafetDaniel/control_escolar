<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Period;

class PeriodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $period1 = Period::create(['name' => 'ENE-JUN']);
        $period2 = Period::create(['name' => 'AGO-DIC']);
    }
}
