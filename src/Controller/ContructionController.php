<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ContructionController extends AbstractController
{
    #[Route('/construction', name: 'app_contruction')]
    public function index(): Response
    {
        return $this->render('contruction/index.html.twig', [
            'controller_name' => 'ContructionController',
        ]);
    }
}
