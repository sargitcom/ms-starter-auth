<?php

namespace App\Controller\RegisterUser;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class RegisterUserResponse extends JsonResponse
{
    public static function createFromError(array $errors, int $statusCode): self
    {
        return new self(
            $errors,
            $statusCode,
        );
    }

    public static function createFromPasswordNotComplexEnough(): self
    {
        return new self(
            ['password' => 'not_complex_enough'],
            Response::HTTP_BAD_REQUEST,
        );
    }

    public static function createFromSuccess(): self
    {
        return new self(
            ['msg' => 'user_registered'],
            Response::HTTP_OK
        );
    }
}
