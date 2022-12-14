<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>'admin',
            'role'=>'admin',
            'email'=>'admin@gmail.com',
            'password'=>bcrypt('123456'),
            'phone'=>'01727576212',
            'band'=>'GreenHeartz'

        ]);
    }
}
