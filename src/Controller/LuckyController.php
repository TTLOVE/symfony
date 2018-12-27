<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LuckyController extends Controller
{
    /**
     * @Route("/search/{id}")
     */
    public function numberAction($id)
    {

        if ($id !== 'asdasd') {
            $html = $this->renderView(
                'error.html.twig'
            );
        } else {
            $html = $this->renderView(
                'search.html.twig'
            );
        }
        

        return new Response($html);
    }
}