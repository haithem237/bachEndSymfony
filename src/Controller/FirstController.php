<?php

namespace App\Controller;

use phpDocumentor\Reflection\Types\True_;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FirstController extends AbstractController
{
   #[Route('/first', name: 'app_first')]


    public function index(): Response
    {


        return $this->render('first/index.html.twig', [
                 'name' => 'sellaouti',
                 'firstname' => 'Aymen'
        ]);
    }

    #[Route('/sayHello', name: 'say.hello')]
    public function sayHello(): Response
    {
    $rand = rand(0,10);
    if ($rand == 3) {
        return  $this ->redirectToRoute(route: first)
    }

        return $this->render('first/index.html.twig', [
            'name' => 'sellaouti',
            'firstname' => 'Aymen'
        ]);
    }

}
