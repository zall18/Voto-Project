<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->word,
            'description' => $this->faker->sentence,
            'price' => $this->faker->randomFloat(2, 100, 1000),
            'stock' => $this->faker->numberBetween(10, 100),
            'brand' => $this->faker->company,
            'model' => $this->faker->word,
            'image' => $this->faker->imageUrl(640, 480, 'cameras'),
            'category_id' => Category::factory(),
            'user_id' => User::factory(),
        ];
    }
}
