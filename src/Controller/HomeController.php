<?php

namespace App\Controller;

use App\Repository\BiensRepository;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(BiensRepository $biensRepository)
    {
        return $this->render('home/index.html.twig', [
            'biens' => $biensRepository->findAll(),
        ]);
    }
}
