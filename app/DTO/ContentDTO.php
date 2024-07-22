<?php

namespace App\DTO;

class ContentDTO
{
    public function __construct(string $title, int $topic_id, bool $is_published, ?string $description = null, ?int $order = null)
    {
    }

    public function toArray(): array
    {
        return [
            'title' => $this->title,
            'order' => $this->order,
            'topic_id' => $this->topic_id,
            'is_published' => $this->is_published,
            'description' => $this->description,
        ];
    }
}
