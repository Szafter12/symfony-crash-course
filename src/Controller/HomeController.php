<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;


class HomeController extends AbstractController {

    #[Route('/', name: 'home.index')]
    public function index(): Response {
        $content = $this->renderView('home/index.html.twig');
        return new Response($content);
    }

}