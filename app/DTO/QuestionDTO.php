<?php

namespace App\DTO;

readonly class QuestionDTO
{
    public function __construct(
        public string $description,
        public string $title,
        public int $quiz_id,
        public ?int $order = null
    )
    {
    }

    public function toArray(): array
    {
        return [
            'title' => $this->title,
            'description' => $this->description,
            'quiz_id' => $this->quiz_id,
            'order' => $this->order,
        ];
    }
}
