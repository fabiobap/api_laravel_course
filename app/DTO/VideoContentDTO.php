<?php

namespace App\DTO;

readonly class VideoContentDTO
{
    public function __construct(
        public string $youtube_id,
        public ?array $metadata = null
    )
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
