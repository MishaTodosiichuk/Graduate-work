<?php

namespace Database\Factories;

use App\Models\Test;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\=Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'intro_text' => $this->faker->sentence(20),
            'task' => $this->faker->sentence(5),
            'Answer1' => $this->faker->sentence(3),
            'Answer2' => $this->faker->sentence(3),
            'Answer3' => $this->faker->sentence(3),
            'RightAnswer' => random_int(1,3),
            'test_id' => Test::get()->random()->id,
        ];
    }
}
