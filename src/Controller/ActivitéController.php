<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ActivitéController extends AbstractController
{
    #[Route('/activit/', name: 'app_activit_')]
    public function index(): Response
    {
        return $this->render('activité/index.html.twig', [
            'controller_name' => 'ActivitéController',
        ]);
    }
}
