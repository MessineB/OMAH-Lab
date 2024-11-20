<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class CartographieController extends AbstractController
{
    #[Route('/cartographie', name: 'app_cartographie')]
    public function index(): Response
    {
        return $this->render('cartographie/index.html.twig', [
            'controller_name' => 'CartographieController',
        ]);
    }
}
