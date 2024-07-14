<?php

namespace App\DTO;

class CommentDTO
{
    public function __construct(int $content_id, int $user_id, string $comment, bool $is_published)
    {
    }

    public function toArray(): array
    {
        return [
            'user_id' => $this->user_id,
            'content_id' => $this->content_id,
            'comment' => $this->comment,
            'is_published' => $this->is_published,
        ];
    }
}
