<?php

namespace App\DTO;

class TextContentDTO
{
    public function __construct(string $content)
    {
    }

    public function toArray(): array
    {
        return [
            'content' => $this->content,
        ];
    }
}
