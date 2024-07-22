<?php

namespace App\DTO;

readonly class AnswerDTO
{
    public function __construct(public int $alternative_id, public int $question_id, public int $user_id)
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
