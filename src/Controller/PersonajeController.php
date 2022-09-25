<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PersonajeController extends AbstractController
{
    #[Route('/personaje', name: 'app_personaje')]
    public function index(): Response
    {
        return $this->render('personaje/index.html.twig', [
            'controller_name' => 'PersonajeController',
        ]);
    }
}
