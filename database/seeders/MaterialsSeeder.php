<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Materials;

class MaterialsSeeder extends Seeder
{
    public function run(): void
    {
        Materials::create([
            'name' => 'Cement',
            'quantity' => 10,
            'stock' => 100,
            'evidence' => 'evidence1.jpg',
        ]);
        Materials::create([
            'name' => 'Bricks',
            'quantity' => 23,
            'stock' => 100,
            'evidence' => 'evidence2.jpg',
        ]);
        Materials::create([
            'name' => 'Steel',
            'quantity' => 89,
            'stock' => 100,
            'evidence' => 'evidence3.jpg',
        ]); 
        Materials::create([
            'name' => 'Wood',
            'quantity' => 43,
            'stock' => 100,
            'evidence' => 'evidence4.jpg',
        ]);
        Materials::create([
            'name' => 'Glass',
            'quantity' => 12,
            'stock' => 100,
            'evidence' => 'evidence5.jpg',
        ]);
    }
}