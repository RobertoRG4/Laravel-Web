<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
       
        $roles = DB::table('roles')->pluck('id', 'name');

     
        User::create([
            'name' => 'Admin',
            'email' => 'admin@halcon.com',
            'password' => Hash::make('password123'),
            'role_id' => $roles['Sales'] ?? null,
        ]);

        User::create([
            'name' => 'Purchasing',
            'email' => 'purchasing@halcon.com',
            'password' => Hash::make('password123'),
            'role_id' => $roles['Purchasing'] ?? null,
        ]);

        User::create([
            'name' => 'Warehouse ',
            'email' => 'warehouse@halcon.com',
            'password' => Hash::make('password123'),
            'role_id' => $roles['Warehouse'] ?? null,
        ]);

        User::create([
            'name' => 'Route',
            'email' => 'route@halcon.com',
            'password' => Hash::make('password123'),
            'role_id' => $roles['Route'] ?? null,
        ]);
    }
}