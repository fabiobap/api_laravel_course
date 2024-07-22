<?php

namespace App\DTO;

class AnswerDTO
{
    public function __construct(int $alternative_id, int $question_id, int $user_id)
    {
    }

    public function toArray(): array
    {
        return [
            'question_id' => $this->question_id,
            'alternative_id' => $this->alternative_id,
            'user_id' => $this->user_id
        ];
    }
}
