<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Customer;
use App\Models\Order;
use App\Models\Materials;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            RolesSeeder::class,
            UserSeeder::class,
            MaterialsSeeder::class,
        ]);

        Customer::factory(10)->create();
        Order::factory(10)->create();
    }
}