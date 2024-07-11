<?php

namespace Database\Factories\UserAction;

use App\Models\UserAction\Comment;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'comment'=>$this->faker->sentence,
            'is_published' => $this->faker->boolean,
        ];
    }
}
