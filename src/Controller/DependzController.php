<?php

namespace App\Controller;

use App\Entity\Capitalize;
use App\Entity\Dasher;
use App\Entity\DoNothingString;
use App\Entity\Master;
use App\Entity\FileLogger;
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
        $log->logFile($output);

        return $this->render('dependz/index.html.twig', [
            'controller_name' => 'DependzController',
            'output' => $output,
        ]);
    }
}
