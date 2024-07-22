<?php

namespace App\DTO;

readonly class AlternativeDTO
{
    public function __construct(
        public string $title,
        public int    $question_id,
        public ?bool  $is_correct = false,
        public ?int   $order = null
    )
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
