<?php

namespace App\DTO;

readonly class TopicDTO
{
    public function __construct(
        public string $title,
        public int $course_id,
        public ?int $order = null
    )
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
