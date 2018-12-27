<?php

namespace App\AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class NumberController
{
    public function numberAction()
    {
        $number = rand(100, 1000);

        return new Response(
            '<html><body>Lucky number: ' . $number . '</body></html>'
        );
    }
}