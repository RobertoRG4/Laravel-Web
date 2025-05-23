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
            'password' => Hash::make('admin123'),
            'role_id' => $roles['Admin'] ?? null,
        ]);

        User::create([
            'name' => 'Purchasing',
            'email' => 'purchasing@halcon.com',
            'password' => Hash::make('purchasing123'),
            'role_id' => $roles['Purchasing'] ?? null,
        ]);

        User::create([
            'name' => 'Warehouse',
            'email' => 'warehouse@halcon.com',
            'password' => Hash::make('warehouse123'),
            'role_id' => $roles['Warehouse'] ?? null,
        ]);

        User::create([
            'name' => 'Sales',
            'email' => 'sales@halcon.com',
            'password' => Hash::make('sales123'),
            'role_id' => $roles['Sales'] ?? null,
        ]);
    }
}