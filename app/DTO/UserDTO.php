<?php

namespace App\DTO;

class UserDTO
{
    public function __construct(string $name, string $email, ?string $password = null)
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
