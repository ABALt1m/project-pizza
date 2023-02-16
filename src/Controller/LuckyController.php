<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LuckyController extends AbstractController
{
    #[Route("/lucky/number/{max}")]
    public function number($max): Response
    {
        $number = random_int(0, $max);
        $dagen = ["maandag","dinsdag","woensdag","donderdag","verijdag",];

        return $this->render('lucky/number.html.twig', [
            'number' => $number,
            'days' => $dagen
        ]);
    }

    #[Route("/demon", name: "dodge")]
    public function mustang(): Response{
        return new Response("<h1> kkr y0 moder </h1>");
    }
}