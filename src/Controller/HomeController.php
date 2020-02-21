<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="home")
     */
    public function index()
    {
        
        $response = new Response();
        $content = [
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/HomeController.php',
        ];
        $response->setContent( json_encode(['username' => 'jane.doe']));
        $response->headers->set('Content-Type', 'application/json');
        $response->headers->set('Access-Control-Allow-Origin', '*');
        return $response;
    }
}
