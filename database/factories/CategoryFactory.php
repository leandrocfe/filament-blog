<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $date = fake()->dateTimeThisYear();

        return [
            'name' => fake()->sentence(2),
            'content' => fake()->realText(1000),
            'active' => true,
            'created_at' => $date,
            'updated_at' => $date,
        ];
    }
}
