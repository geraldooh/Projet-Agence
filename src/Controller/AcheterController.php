<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AcheterController extends AbstractController
{
    /**
     * @Route("/acheter", name="acheter")
     */
    public function index()
    {
        return $this->render('acheter/index.html.twig', [
            'controller_name' => 'AcheterController',
        ]);
    }
}
