<?php

namespace App\Controller\RegisterUser;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Attribute\Route;

#[Route("/user", name: "register_user", methods: ["POST"])]
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
