<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\ExpressionLanguage\ExpressionLanguage;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AlohaController extends AbstractController
{
    #[Route(path: '/aloha', name: "yoyo", methods: ['GET'], condition: "request.headers.get('User-Agent') matches '/firefox/i'")]
    public function nihao(): Response
    {
        return $this->render('aloha.html.twig');

    }

    #[Route(path: '/hihi/{id}', name: "hihi", requirements: ['id' => '\d+'], methods: ['GET'])]
    public function yo(string $id): Response
    {
        $url = $this->generateUrl('hihi', ['id' => 5]);
        return $this->render('aloha.html.twig', [
            'url' => $url,
        ]);
    }
}

