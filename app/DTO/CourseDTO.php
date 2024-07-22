<?php

namespace App\DTO;

readonly class CourseDTO
{
    public function __construct(
        public int    $user_id,
        public string $description,
        public string $title,
        public string $slug,
        public ?int   $category_id = null
    )
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
