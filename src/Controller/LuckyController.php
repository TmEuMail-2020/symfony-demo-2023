<?php

namespace App\Controller;


use Exception;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LuckyController extends AbstractController
{

    /**
     * @throws Exception
     */
    #[Route('/aloha/number')]
    public function number(): Response
    {
        $number = random_int(0, 100);
//        return new Response("<html><body>Lucky number: $number</body></html>");
        return $this->render('lucky/number.html.twig', [
            'number' => $number,
        ]);
    }

}
