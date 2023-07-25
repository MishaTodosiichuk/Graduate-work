<?php

namespace Database\Factories;

use App\Models\Course;
use App\Models\Intensive;
use App\Models\News;
use App\Models\Test;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\=Review>
 */
class ReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'content' => $this->faker->text,
            'course_id' => random_int(1,10),
            'news_id' => random_int(1,10),
            'test_id' => random_int(1,10),
            'user_name' => $this->faker->text,
        ];
    }
}
