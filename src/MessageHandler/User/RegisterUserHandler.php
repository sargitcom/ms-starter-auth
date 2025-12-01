<?php

namespace App\MessageHandler\User;

use App\Message\User\RegisterUserMessage;
use Symfony\Component\Messenger\Attribute\AsMessageHandler;

#[AsMessageHandler]
class RegisterUserHandler
{
    public function __invoke(
        RegisterUserMessage $message,
    ) {
        var_dump($message);
    }
}
