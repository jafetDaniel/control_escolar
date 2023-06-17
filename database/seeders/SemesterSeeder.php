<?php

namespace Database\Seeders;

use App\Models\Semester;
use Illuminate\Database\Seeder;

class SemesterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $semester1 = Semester::create(['name' => 'PRIMER SEMESTRE','key' => '1']);
        $semester2 = Semester::create(['name' => 'SEGUNDO SEMESTRE','key' => '2']);
        $semester3 = Semester::create(['name' => 'TERCER SEMESTRE','key' => '3']);
        $semester4 = Semester::create(['name' => 'CUARTO SEMESTRE','key' => '4']);
        $semester5 = Semester::create(['name' => 'QUINTO SEMESTRE','key' => '5']);
        $semester6 = Semester::create(['name' => 'SEXTO SEMESTRE','key' => '6']);
        $semester7 = Semester::create(['name' => 'SEPTIMO SEMESTRE','key' => '7']);
        $semester8 = Semester::create(['name' => 'OCTAVO SEMESTRE','key' => '8']);
        $semester9 = Semester::create(['name' => 'NOVENO SEMESTRE','key' => '9']);
        $semester10 = Semester::create(['name' => 'DECIMO SEMESTRE','key' => '10']);
        $semester11 = Semester::create(['name' => 'ONCEAVO SEMESTRE','key' => '11']);
        $semester12 = Semester::create(['name' => 'DOCEAVO SEMESTRE','key' => '12']);
    }
}
