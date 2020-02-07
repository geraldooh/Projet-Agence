<?php

namespace App\Controller;

use App\Entity\Biens;
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
            'biens' => $biensRepository->findLatest(),
        ]);
    }

    /**
     * @Route("/{id}", name="bien_detail", methods={"GET"})
     */
    public function detail(Biens $bien)
    {
        return $this->render('home/detail.html.twig', [
            'bien' => $bien
        ]);
    }
}
