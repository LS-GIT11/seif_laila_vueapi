<?php

namespace Database\Factories;

use App\Models\Cake;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Cake>
 */
class CakeFactory extends Factory
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
    ]) . ' ' . fake()->randomElement([
        'Dream',
        'Delight',
        'Classic',
        'Bliss',
        'Surprise',
        'Bonanza',
        'Perfection',
        'Romance',
        'Zest',
        'Infusion',
    ]) . ' ' . fake()->randomElement([
        'Cake',
        'Cheesecake',
        'Tart',
        'Mousse',
        'Cupcake',
        'Layer Cake',
        'Bundt Cake',
        'Pound Cake',
        'Sponge Cake',
        'Genoise',
    ]),
        'description' => fake()->sentence(),
        'price' => fake()->randomFloat(2, 5, 50),
        'flavour_id' => fake()->numberBetween(1, 10),
        
    ];
    }
}
