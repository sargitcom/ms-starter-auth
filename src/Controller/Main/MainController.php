<?php

namespace App\Controller\Main;

use App\Controller\RegisterUser\RegisterUserRequest;
use App\Controller\RegisterUser\RegisterUserResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\Attribute\Route;

#[Route("/", name: "main_page", methods: ["GET"])]
class MainController extends AbstractController
{
    public function __invoke(): RedirectResponse
    {
        return $this->redirect($this->getParameter('main_site'));
    }
}
