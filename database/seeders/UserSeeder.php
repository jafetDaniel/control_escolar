<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user1 = User::create(['name' => 'jafet daniel fonseca garcía',
                               'email' => 'daniel@gmail.com',
                               'password' => bcrypt('daniel')
                            ])->assignRole('student');

        $user2 = User::create(['name' => 'admin',
                               'email' => 'admin@gmail.com',
                               'password' => bcrypt('admin')
                              ])->assignRole('admin');
    }
}
