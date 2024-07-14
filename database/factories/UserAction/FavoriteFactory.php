<?php

namespace Database\Factories\UserAction;

use App\Models\Course\Content;
use App\Models\User;
use App\Models\UserAction\Favorite;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Favorite>
 */
class FavoriteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'content_id' => Content::factory(),
        ];
    }
}
