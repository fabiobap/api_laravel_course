<?php

namespace Database\Factories\Course;

use App\Models\Course\Category;
use App\Models\Course\Course;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends Factory<Course>
 */
class CourseFactory extends Factory
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
            'description' => $this->faker->text(500),
            'category_id' => Category::factory(),
            'user_id' => User::factory(),
        ];
    }
}
