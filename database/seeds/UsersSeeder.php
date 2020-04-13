<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    public function run()
    {
        //
        \App\User::create([
            'name' => 'super admin',
            'email' => 'super-admin@gmail.com',
            'mobile' => '09101230001',
            'avatar_path' => '/img/avatars/avatar1.jpg',
            'gender' => 'MALE',
            'password' => bcrypt('password'),
            'email_verified_at' => \Carbon\Carbon::now(),
            'status' => 1,
//            'username' => 'admin',
        ]);


        \App\User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'mobile' => '09101230002',
            'avatar_path' => '/img/avatars/avatar1.jpg',
            'gender' => 'MALE',
            'password' => bcrypt('password'),
            'email_verified_at' => \Carbon\Carbon::now(),
            'status' => 1,
//            'username' => 'admin',
        ]);



        \App\User::create([
            'name' => 'user',
            'email' => 'user@gmail.com',
            'mobile' => '09101230003',
            'avatar_path' => '/img/avatars/avatar4.jpg',
            'gender' => 'MALE',
            'password' => bcrypt('password'),
            'email_verified_at' => \Carbon\Carbon::now(),
            'status' => 1,
//            'username' => 'premium',
        ]);
    }
}
