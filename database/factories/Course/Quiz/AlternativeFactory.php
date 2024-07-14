<?php

namespace Database\Factories\Course\Quiz;

use App\Models\Course\Quiz\Alternative;
use App\Models\Course\Quiz\Question;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Alternative>
 */
class AlternativeFactory extends Factory
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
            'order' => $this->faker->randomNumber(2),
            'question_id' => Question::factory(),
        ];
    }
}
