<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class CreerFicheController extends AbstractController
{
    
    public function index(): Response
    {
        return $this->render('creer_fiche/index.html.twig', [
            'controller_name' => 'CreerFicheController',
        ]);
    }
}
