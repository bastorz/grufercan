<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ApiController extends AbstractController
{
    /**
    * @Route("/api/test", name="testapi")
    */
    public function test()
    {
        return $this->json([
                'message' => 'test!',
        ]);
    }
}
