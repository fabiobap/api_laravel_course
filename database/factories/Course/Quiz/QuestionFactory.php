<?php

namespace Database\Factories\Course\Quiz;

use App\Models\Course\Quiz\Question;
use App\Models\Course\Quiz\Quiz;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Question>
 */
class QuestionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(),
            'description' => $this->faker->paragraph(),
            'order' => $this->faker->randomNumber(2),
            'quiz_id' => Quiz::factory(),
        ];
    }
}
