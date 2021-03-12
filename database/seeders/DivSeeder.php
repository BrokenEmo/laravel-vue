<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DivSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('divisions')->insert([
            'name' => 'Admins'
        ]);

        DB::table('divisions')->insert([
            'name' => 'IT'
        ]);

        DB::table('divisions')->insert([
            'name' => 'Accounting'
        ]);

        DB::table('divisions')->insert([
            'name' => 'Marketing'
        ]);

        DB::table('divisions')->insert([
            'name' => 'Development'
        ]);
    }
}
