<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesSeeder extends Seeder
{
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        DB::table('roles')->truncate();

        DB::table('roles')->insert([
            ['name' => 'Admin'],
            ['name' => 'Purchasing'],
            ['name' => 'Warehouse'],
            ['name' => 'Sales'],
        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}