<?php

namespace App\DTO;

readonly class TextContentDTO
{
    public function __construct(public string $content)
    {
    }

    public function toArray(): array
    {
        return [
            'content' => $this->content,
        ];
    }
}
