<?php

namespace App\DTO;

class QuestionDTO
{
    public function __construct(string $description, string $title, int $quiz_id, ?int $order = null)
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
