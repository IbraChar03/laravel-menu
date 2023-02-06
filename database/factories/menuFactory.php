<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Menu>
 */
class menuFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $faker = \Faker\Factory::create();
        $faker->addProvider(new \FakerRestaurant\Provider\en_US\Restaurant($faker));
        return [
            "foodName" => $faker->foodName(),
            "beverageName" => $faker->beverageName(),
            "fruitName" => $faker->fruitName(),
            "sauceName" => $faker->sauceName(),
            "price" => fake()->randomFloat(2, 5, 15)
        ];
    }
}