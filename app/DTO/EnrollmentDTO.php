<?php

namespace App\DTO;

class EnrollmentDTO
{
    public function __construct(int $course_id, int $user_id)
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
