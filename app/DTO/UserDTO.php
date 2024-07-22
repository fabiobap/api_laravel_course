<?php

namespace App\DTO;

readonly class UserDTO
{
    public function __construct(
        public string $name,
        public string $email,
        public ?string $password = null
    )
    {

    }

    public function toArray(): array
    {
        return [
            'name' => $this->name,
            'email' => $this->email,
            'password' => $this->password,
        ];
    }
}
