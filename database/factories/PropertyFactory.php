<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Landlord;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Property>
 */
class PropertyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'landlord_id'=> Landlord::inRandomOrder()->first()->id,
            'unit_name' => fake()->firstNameFemale() ,
            'image' => fake()->url,
            'description' => fake()->paragraph(2),
            'location' => fake()->address(),
            'size' => fake()->randomElement([50, 100, 150, 200, 300]),
            'type' => fake()->randomElement(['Studio', 'Appartment', 'Single Detached', 'Town House']),
        ];
    }
}
