<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\=Intensive>
 */
class IntensiveFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(3),
            'start_intensive' => $this->faker->sentence(1),
            'lvl' => $this->faker->sentence(2),
            'image' => $this->faker->imageUrl(),
            'lvl_image' => $this->faker->imageUrl(),
            'duration' => $this->faker->text,
            'count_seats' => random_int(1,10),
            'time' => random_int(1,10),
            'description' => $this->faker->text,
            'language' => $this->faker->sentence(1),
            'video_lesson' => $this->faker->imageUrl(),
        ];
    }
}
