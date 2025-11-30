<?php

namespace App\Controller\RegisterUser;

use Symfony\Component\HttpFoundation\JsonResponse;

class RegisterUserResponse extends JsonResponse
{
    public static function createFromError(array $errors, int $statusCode): self
    {
        return new self(
            $errors,
            $statusCode,
        );
    }

    public static function createFromSuccess(): self
    {
        return new self(
            ['msg' => 'user_registered'],
            JsonResponse::HTTP_OK
        );
    }
}
