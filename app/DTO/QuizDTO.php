<?php

namespace App\DTO;

readonly class QuizDTO
{
    public function __construct(
        public int    $course_id,
        public string $description,
        public string $title,
        public string $slug
    )
    {
    }

    public function toArray(): array
    {
        return [
            'title' => $this->title,
            'description' => $this->description,
            'course_id' => $this->course_id,
            'slug' => $this->slug,
        ];
    }
}
