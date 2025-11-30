<?php

namespace App\Controller\RegisterUser;

use Symfony\Component\HttpFoundation\Request;

class RegisterUserRequest
{
    private Request $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function isValid(): bool
    {
        if ($this->getEmail() !== "" && $this->getPassword() !== "") {
            return true;
        }

        return false;
    }

    public function getErrors(): array
    {
        $errors = [];

        if ($this->getEmail() === "") {
            $errors['email'] = "invalid_email_address";
        }

        if ($this->getPassword() === "") {
            $errors['password'] = "invalid_password";
        }

        return $errors;
    }

    public function getEmail(): string
    {
        $req = json_decode($this->request->getContent(), true);
        return $req['email'] ?? '';
    }

    public function getPassword(): string
    {
        $req = json_decode($this->request->getContent(), true);
        return $req['password'] ?? '';
    }
}
