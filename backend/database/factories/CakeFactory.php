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
        $cake = fake()->randomElement([
            [
                'name' => 'Chocolate Delight',
                'description' => 'A rich and moist chocolate cake layered with creamy chocolate frosting.',
                'flavour_id' => 1,
                'price' => 20.00,
            ],
            [
                'name' => 'Vanilla Dream',
                'description' => 'A classic vanilla cake with a light and fluffy texture, perfect for any occasion.',
                'flavour_id' => 2,
                'price' => 18.00,
            ],
            [
                'name' => 'Strawberry Surprise',
                'description' => 'A delightful strawberry cake with fresh strawberries and a creamy strawberry frosting.',
                'flavour_id' => 3,
                'price' => 22.00,
            ],
            [
                'name' => 'Lemon Zest',
                'description' => 'A zesty lemon cake with a refreshing lemon flavor and a tangy lemon glaze.',
                'flavour_id' => 4,
                'price' => 19.00,
            ],
            [
                'name' => 'Red Velvet Romance',
                'description' => 'A luxurious red velvet cake with a smooth cream cheese frosting.',
                'flavour_id' => 5,
                'price' => 24.00,
            ],
            [
                'name' => 'Carrot Cake Classic',
                'description' => 'A moist carrot cake with a hint of spice and a creamy cream cheese frosting.',
                'flavour_id' => 6,
                'price' => 21.00,
            ],
            [
                'name' => 'Coffee Infusion',
                'description' => 'A rich coffee-flavored cake with a smooth coffee buttercream.',
                'flavour_id' => 7,
                'price' => 23.00,
            ],
            [
                'name' => 'Pistachio Perfection',
                'description' => 'A delicate pistachio cake with a nutty flavor and a creamy pistachio frosting.',
                'flavour_id' => 8,
                'price' => 25.00,
            ],
            [
                'name' => 'Coconut Bliss',
                'description' => 'A tropical coconut cake with a light coconut frosting.',
                'flavour_id' => 9,
                'price' => 20.00,
            ],
            [
                'name' => 'Banana Bonanza',
                'description' => 'A moist banana cake with a rich banana flavor and a creamy frosting.',
                'flavour_id' => 10,
                'price' => 19.00,
            ],
        ]);

        return [
            'name' => $cake['name'],
            'flavour_id' => $cake['flavour_id'],
            'description' => $cake['description'],
            'price' => $cake['price'],
            
        ];
    }
}
