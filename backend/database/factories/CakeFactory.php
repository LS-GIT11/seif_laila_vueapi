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
                'Chocolate Delight',
                'Vanilla Dream',
                'Strawberry Surprise',
                'Lemon Zest',
                'Red Velvet Romance',
                'Carrot Cake Classic',
                'Coffee Infusion',
                'Pistachio Perfection',
                'Coconut Bliss',
                'Banana Bonanza',
            ]),
            'description' => fake()->randomElement([
                'A rich and moist chocolate cake topped with creamy chocolate ganache.',
                'A light and fluffy vanilla cake layered with smooth vanilla buttercream.',
                'A sweet and tangy strawberry cake filled with fresh strawberries and whipped cream.',
                'A zesty lemon cake with a refreshing lemon glaze.',
                'A decadent red velvet cake layered with cream cheese frosting.',
                'A classic carrot cake packed with spices and topped with cream cheese frosting.',
                'A bold coffee-flavored cake with a smooth coffee buttercream.',
                'A nutty pistachio cake layered with pistachio cream.',
                'A tropical coconut cake filled with coconut cream and topped with toasted coconut flakes.',
                'A moist banana cake loaded with ripe bananas and topped with a rich caramel glaze.',
            ]),
            'price' => fake()->randomFloat(2, 5, 50),
            'flavour_id' => \App\Models\Flavour::inRandomOrder()->first()->id,
        ];
    }
}
