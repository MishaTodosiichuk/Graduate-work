<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\=Test>
 */
class TestFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(2),
            'image' => $this->faker->imageUrl(),
            'start_lvl' => $this->faker->boolean(80),
            'middle_lvl' => $this->faker->boolean(80),
            'hard_lvl' => $this->faker->boolean(80),
        ];
    }
}
