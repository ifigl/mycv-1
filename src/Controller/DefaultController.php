<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DefaultController extends AbstractController
{
    public function index()
    {
        $number = random_int(0, 100);

        return $this->render('index.html.twig', [
            'number' => $number,
            'name' => 'Florent',
            ]
        );
    }
}