<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LuckyController extends Controller
{
    /**
     * @Route("/rand")
     */
    public function numberAction()
    {
        $number = rand(0, 100);

        return new Response(
            '<html><body>Lucky number: ' . $number . '</body></html>'
        );
    }

    /**
     * @Route("/api/lucky/number")
     */
    public function apiNumberAction()
    {
        $data = array(
            'lucky_number' => rand(0, 100),
        );
 
        return new JsonResponse($data);
    }

    /**
     * @Route("/lucky/number/{count}")
     */
    public function lucky($count)
    {
        $numbers = [];

        for ($i=0; $i < $count; $i++) { 
            $numbers[] = rand(0, 10);
        }

        $data = array(
            'lucky_number' => implode(',', $numbers),
        );

        $html = $this->render(
            'lucky/number.html.twig',
            $data
        );
 
        return new JsonResponse($data);
    }
}