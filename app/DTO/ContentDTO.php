<?php

namespace App\DTO;

class ContentDTO
{
    public function __construct(
        public string  $title,
        public int     $topic_id,
        public ?bool   $is_published = false,
        public ?string $description = null,
        public ?int    $order = null
    )
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
