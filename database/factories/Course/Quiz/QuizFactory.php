<?php

namespace Database\Factories\Course\Quiz;

use App\Models\Course\Course;
use App\Models\Course\Quiz\Quiz;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends Factory<Quiz>
 */
class QuizFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $title = $this->faker->sentence(),
            'slug' => Str::slug($title),
            'description' => $this->faker->paragraph(),
            'course_id' => Course::factory(),
        ];
    }
}
