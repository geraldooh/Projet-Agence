<?php

namespace App\Controller;

use App\Entity\Biens;
use App\Repository\BiensRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

class HomeController extends AbstractController
{
    /**
     * @Route("/{id}", name="bien_detail", methods={"GET"}, requirements={"id"="\d+"})
     * @ParamConverter("id", options={"id": "id"})
     */
    public function detail(Biens $bien): Response
    {
        return $this->render('home/detail.html.twig', [
            'bien' => $bien,
        ]);
    }

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
