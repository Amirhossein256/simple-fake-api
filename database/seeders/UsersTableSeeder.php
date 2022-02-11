<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'user1@email.com',
            'password' => bcrypt('admin'),
        ]);
        DB::table('users')->insert([
            'name' => 'user2',
            'email' => 'user2@email.com',
            'password' => bcrypt('password'),
        ]);
    }
}
