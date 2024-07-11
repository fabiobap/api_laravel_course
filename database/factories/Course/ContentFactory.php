<?php

namespace Database\Factories\Course;

use App\Models\Course\Content;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Content>
 */
class ContentFactory extends Factory
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
            'description' => $this->faker->randomHtml(6),
            'order' => $this->faker->randomNumber(2),
            'is_published' => $this->faker->boolean,
        ];
    }
}
