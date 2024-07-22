<?php

namespace App\DTO;

class ViewContentDTO
{
    public function __construct(int $content_id, int $user_id)
    {
    }

    public function toArray(): array
    {
        return [
            'content_id' => $this->content_id,
            'user_id' => $this->user_id,
        ];
    }
}
