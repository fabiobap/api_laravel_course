<?php

namespace Database\Factories\Course;

use App\Models\Course\Course;
use App\Models\Course\Topic;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Topic>
 */
class TopicFactory extends Factory
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
            'course_id' => Course::factory(),
        ];
    }
}
