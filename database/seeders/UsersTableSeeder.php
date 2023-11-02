<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // admin
        DB::table('users')->insert([

        [
            'name'=> 'admin',
            'email' => 'admin@gmail.com',
            'password'=> Hash::make('111'),
            'role'=> 'admin',
            'status'=> 'active'
        ],
        // user
        [
            'name'=> 'user',
            'email' => 'user@gmail.com',
            'password'=> Hash::make('111'),
            'role'=> 'user',
            'status'=> 'active'
        ]
     ]);
    }
}