<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesSeeder extends Seeder
{
    public function run(): void
    {

        $clienteRoleId = DB::table('roles')->where('name', 'Cliente')->value('id');
        DB::table('users')->whereNotIn('role_id', function ($query) {
            $query->select('id')->from('roles')->whereIn('name', ['Administrador', 'Cliente']);
        })->update(['role_id' => $clienteRoleId]);

        DB::table('roles')->whereNotIn('name', ['Administrador', 'Cliente'])->delete();

        DB::table('roles')->updateOrInsert(['name' => 'Administrador']);
        DB::table('roles')->updateOrInsert(['name' => 'Cliente']);
    }
}