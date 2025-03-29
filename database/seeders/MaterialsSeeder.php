<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Materials;

class MaterialsSeeder extends Seeder
{
    public function run(): void
    {
        Materials::factory(10)->create();
    
    }
}