<?php

namespace App\DTO;

readonly class ViewContentDTO
{
    public function __construct(
        public int $content_id,
        public int $user_id
    )
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
