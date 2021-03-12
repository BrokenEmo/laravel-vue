<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
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
            'role' => 'admin',
            'password' => Hash::make('admin123'),
            'division_id' => '1'
        ]);

        DB::table('users')->insert([
            'name' => 'user1',
            'role' => 'user',
            'password' => Hash::make('user1'),
            'division_id' => '2'
        ]);

        DB::table('users')->insert([
            'name' => 'user2',
            'role' => 'user',
            'password' => Hash::make('user2'),
            'division_id' => '2'
        ]);

        DB::table('users')->insert([
            'name' => 'user3',
            'role' => 'user',
            'password' => Hash::make('user3'),
            'division_id' => '3'
        ]);
    }
}
