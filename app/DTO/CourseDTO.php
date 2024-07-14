<?php

namespace App\DTO;

class CourseDTO
{
    public function __construct(int $user_id, string $description, string $title, string $slug, ?int $category_id = null)
    {
    }

    public function toArray(): array
    {
        return [
            'title' => $this->title,
            'description' => $this->description,
            'category_id' => $this->category_id,
            'slug' => $this->slug,
            'user_id' => $this->user_id,
        ];
    }
}
