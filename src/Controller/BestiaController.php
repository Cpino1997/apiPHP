<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BestiaController extends AbstractController
{
    #[Route('/bestia', name: 'app_bestia')]
    public function index(): Response
    {
        return $this->render('bestia/index.html.twig', [
            'controller_name' => 'BestiaController',
        ]);
    }
}
