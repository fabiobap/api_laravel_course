<?php

namespace App\DTO;

readonly class EnrollmentDTO
{
    public function __construct(public int $course_id, public int $user_id)
    {
    }

    public function toArray(): array
    {
        return [
            'course_id' => $this->course_id,
            'user_id' => $this->user_id,
        ];
    }
}
