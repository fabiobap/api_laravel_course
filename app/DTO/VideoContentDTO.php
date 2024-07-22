<?php

namespace App\DTO;

class VideoContentDTO
{
    public function __construct(string $youtube_id, ?array $metadata = null)
    {
    }

    public function toArray(): array
    {
        return [
            'youtube_id' => $this->youtube_id,
            'metadata' => $this->metadata,
        ];
    }
}
