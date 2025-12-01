<?php

namespace App\Message\User;

class RegisterUserMessage
{
    public function __construct(
        private string $userId,
        private string $email,
        private string $password,
    ) {}

    public function getUserId(): string
    {
        return $this->userId;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getPassword(): string
    {
        return $this->password;
    }
}
