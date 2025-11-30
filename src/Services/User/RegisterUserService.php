<?php

namespace App\Services\User;

use App\Controller\RegisterUser\RegisterUserRequest;
use App\Controller\RegisterUser\RegisterUserResponse;

class RegisterUserService
{
    public function registerUser(RegisterUserRequest $request): RegisterUserResponse
    {


        return RegisterUserResponse::createFromSuccess();
    }
}
