<?php

namespace App\Controller;

use App\Entity\Biens;
use App\Repository\BiensRepository;
use Symfony\Component\HttpFoundation\Response;
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
            'biens' => $biensRepository->findLatest(),
        ]);
    }
}
