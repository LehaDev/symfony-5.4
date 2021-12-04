<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HealthController extends AbstractController
{
    #[Route('/health/ping', methods: ['GET'], name: "ping")]
    public function ping(): Response
    {
        return new Response('pong', Response::HTTP_OK);
    }
}
