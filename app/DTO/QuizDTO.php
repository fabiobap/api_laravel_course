<?php

namespace App\DTO;

class QuizDTO
{
    public function __construct(int $course_id, string $description, string $title, string $slug)
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
