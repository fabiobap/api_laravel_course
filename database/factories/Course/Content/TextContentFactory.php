<?php

namespace Database\Factories\Course\Content;

use App\Models\Course\Content\TextContent;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<TextContent>
 */
class TextContentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'content' => $this->faker->randomHtml(6)
        ];
    }
}
