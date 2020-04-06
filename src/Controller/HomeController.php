<?php

// src/Controller/HomeController.php

namespace App\Controller;

use App\Models\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class HomeController extends AbstractController
{
    /**
     * @Route("/{vueRouting}", name="index")
     * @return Response
     */
    public function index(): Response
    {
        $test = 2;

        return $this->render('Home/index.html.twig');
    }
}
