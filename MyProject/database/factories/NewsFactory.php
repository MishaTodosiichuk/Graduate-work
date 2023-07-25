<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\News>
 */
class NewsFactory extends Factory
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
            'demo_content' => $this->faker->sentence(10),
            'content' => $this->faker->text,
            'image' => $this->faker->imageUrl(),
            'count_views' => random_int(10,100),
        ];
    }
}
