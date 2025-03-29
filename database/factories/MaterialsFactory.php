<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Materials>
 */
class MaterialsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'quantity' => $this->faker->randomNumber(2),
            'stock' => $this->faker->randomNumber(2),
            'evidence' => $this->faker->imageUrl(640, 480, 'materials', true),
        ];
    }
}