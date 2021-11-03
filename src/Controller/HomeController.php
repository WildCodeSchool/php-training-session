<?php

namespace App\Controller;

class HomeController extends AbstractController
{
    public function index()
    {
        // TODO: store the theme in cookies

        return $this->twig->render('Home/index.html.twig');
    }
}
