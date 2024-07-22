<?php

namespace App\DTO;

readonly class CommentDTO
{
    public function __construct(
        public int    $content_id,
        public int    $user_id,
        public string $comment,
        public ?bool   $is_published = false
    )
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
