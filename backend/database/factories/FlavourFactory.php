<?php

namespace Database\Factories;

use App\Models\Flavour;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Flavour>
 */
class FlavourFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->randomElement([
                'Chocolate',
                'Vanilla',
                'Strawberry',
                'Lemon',
                'Red Velvet',
                'Carrot',
                'Coffee',
                'Pistachio',
                'Coconut',
                'Banana',
            ]),
        ];
    }
}
