<?php

namespace App\Controller\User;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{
    public function showProfile()
    {
        return $this->render('user/profile.html.twig', [
            'username' => $this->getUser()->getUsername()
        ]);
    }
}