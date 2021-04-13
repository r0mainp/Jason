<?php

namespace App\Controller;

use App\Entity\Argonaut;
use App\Repository\ArgonautRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;

class ArgonautsController extends AbstractController
{
    /**
     * @Route("/", name="app_index")
     */
    public function index(ArgonautRepository $argoRepo, Request $request): Response
    {
        $argonauts = $argoRepo->findAll();

        return $this->render('argonauts/index.html.twig', [
            'argonauts' => $argonauts,
        ]);
    }

    /**
     * @Route("/add", name="add_argonaut")
     */
    public function addArgonaut(EntityManagerInterface $em, Request $request)
    {

        $argonaut = new Argonaut();
        if (!empty($request->query->get('name'))) {
            $argonaut->setName($request->query->get('name'));
            $em->persist($argonaut);
            $em->flush();
        }
        return $this->redirectToRoute("app_index");
    }
}
