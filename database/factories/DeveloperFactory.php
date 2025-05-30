<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Stack;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\developer>
 */
class DeveloperFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "name" => fake()->name(),
            "skill" => fake()->numberBetween(0, 100),
            "bio" => fake()->realText(500),
            "stack_id" => Stack::inRandomOrder()->first()->id
        ];
    }
}
