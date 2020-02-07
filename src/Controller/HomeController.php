<?php

namespace App\Controller;

use App\Entity\Biens;
use App\Repository\BiensRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\HttpFoundation\Request;

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
    public function index(BiensRepository $biensRepository, PaginatorInterface $paginator, Request $request)
    {
        return $this->render('home/index.html.twig', [
            'biens' => $paginator->paginate($biensRepository->findAllVisibleQuery(), $request->query->getInt('page',1), 12)
        ]);
    }
}
