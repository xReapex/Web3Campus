<?php

namespace App\Controller\User;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{
    /**
     * @Route("/profile", name="app_profile")
     */
    public function showProfile()
    {
        return $this->render('user/profile.html.twig', [
            'username' => $this->getUser()->getUsername()
        ]);
    }
}