<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class NewsController extends AbstractController
{
    public function allNews()
    {
        return $this->render('News/Index.html.twig');
    }
}