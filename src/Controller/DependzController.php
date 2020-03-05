<?php

namespace App\Controller;

use App\Services\Master;
use App\Services\FileLogger;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DependzController extends AbstractController
{
    /**
     * @Route("/", name="dependz")
     * @param Master $transform
     * @return Response
     */
    public function index(Master $transform)
    {
        $output = $transform->change;

        $log = new FileLogger();
        $log->logFile("\n".$output);

        return $this->render('dependz/index.html.twig', [
            'controller_name' => 'DependzController',
            'output' => $output,
        ]);
    }
}
