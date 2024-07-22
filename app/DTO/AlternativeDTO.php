<?php

namespace App\DTO;

class AlternativeDTO
{
    public function __construct(string $title, int $question_id, bool $is_correct, ?int $order = null)
    {
    }

    public function toArray(): array
    {
        return [
            'title' => $this->title,
            'question_id' => $this->question_id,
            'is_correct' => $this->is_correct,
            'order' => $this->order,
        ];
    }
}
