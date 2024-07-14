<?php

namespace Database\Factories\Course\Quiz;

use App\Models\Course\Quiz\Alternative;
use App\Models\Course\Quiz\Answer;
use App\Models\Course\Quiz\Question;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Answer>
 */
class AnswerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'alternative_id' => Alternative::factory(),
            'question_id' => Question::factory(),
            'user_id' => User::factory(),
        ];
    }
}
