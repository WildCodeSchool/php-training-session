<?php

namespace App\Controller;

use App\Model\UserManager;

class UserController extends AbstractController
{
    private UserManager $manager;

    public function __construct()
    {
        parent::__construct();
        $this->manager = new UserManager();
    }

    public function signIn()
    {
        // TODO: if user exists, store their info in session and redirect to profile

        return $this->twig->render('User/login.html.twig');
    }

    public function signOut()
    {
        // TODO: clear the session

        header('Location: /');
    }

    public function profile()
    {
        // TODO: if the user isn't logged in, redirect to /login

        // TODO: load the user session

        return $this->twig->render('User/profile.html.twig');
    }
}
