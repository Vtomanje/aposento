<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        User::create([
            'name' => 'Tomas Elias Vegas',
            'email' => 'v.tomaselias@gmail.com',
            'password' => bcrypt('12345678')
        ]);
        User::create([
            'name' => 'Xiorelis Dalis',
            'email' => 'xioerlydalis2@gmail.com',
            'password' => bcrypt('12345678')
        ]);
        User::create([
            'name' => 'Sandra Rodriguez',
            'email' => 'ssandrarz87@gmail.com',
            'password' => bcrypt('12345678')
        ]);
    }
}
