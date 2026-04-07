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
        'Almond',
        'Raspberry',
        'Blueberry',
        'Peanut Butter',
        'Marble',
        'Funfetti',
        'Salted Caramel',
        'Matcha',
        'Black Forest',
        'Cherry',
        'Orange',
        'Mint',
        'Hazelnut',
        'Cinnamon',
        'Pumpkin',
        'Gingerbread',
        'Lime',
        'Mango',
        'Passion Fruit',
        'Pineapple',
        'Honey',
        'Maple',
        'Rose',
        'Lavender',
        'Earl Grey',
        'Chai',
        'Cranberry',
        'Peach',
        'Pear',
        'Plum',
        'Apricot',
        'Kiwi',
        'Lychee',
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
        'Chiffon Cake',
        'Angel Cake',
        'Flourless Cake',
        'Ice Cream Cake',
        'Fruit Cake',
        'Yogurt Cake',
        'Pavlova',
        'Tres Leches Cake',
        'Opera Cake',
        'Dobos Torte',
    ]),
        'description' => fake()->sentence(35),
        'price' => fake()->randomFloat(2, 5, 30),
        'flavour_id' => fake()->numberBetween(1, 10),
        
    ];
    }
}
