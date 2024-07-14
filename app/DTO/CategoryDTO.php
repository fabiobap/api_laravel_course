<?php

namespace App\DTO;

class CategoryDTO
{
    public function __construct(string $name)
    {

    }

    public function toArray(): array
    {
        return [
            'name' => $this->name,
        ];
    }
}
