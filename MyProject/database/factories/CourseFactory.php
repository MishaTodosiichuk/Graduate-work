<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\=Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->sentence(3),
            'tag' => $this->faker->sentence(1),
            'image' => $this->faker->imageUrl(),
            'title_description' => $this->faker->sentence(5),
            'description' => $this->faker->text,
            'intro_text' => $this->faker->text,
            'video_lesson' => $this->faker->imageUrl(),
        ];
    }
}
