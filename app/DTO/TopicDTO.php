<?php

namespace App\DTO;

class TopicDTO
{
    public function __construct(string $title, int $course_id, ?int $order = null)
    {
    }

    public function toArray(): array
    {
        return [
            'title' => $this->title,
            'order' => $this->order,
            'course_id' => $this->course_id,
        ];
    }
}
