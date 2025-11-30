<?php

namespace App\Controller\RegisterUser;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class RegisterUserController extends AbstractController
{
    public function __invoke(RegisterUserRequest $request): RegisterUserResponse
    {
        if ($request->isValid() === false) {
            return RegisterUserResponse::createFromError(
                $request->getErrors(),
                400
            );
        }



        return RegisterUserResponse::createFromSuccess();
    }
}
