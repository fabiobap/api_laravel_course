<?php

namespace Database\Factories\Course\Content;

use App\Models\Course\Content\VideoContent;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<VideoContent>
 */
class VideoContentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'youtube_id' => $this->faker->randomElement(['p_xlxGKEQGQ', 'Qcb5gJgLjIQ', 'IeyNd0KLpsw', '6rrb9zAVTgM']),
            'metadata' => []
        ];
    }
}
