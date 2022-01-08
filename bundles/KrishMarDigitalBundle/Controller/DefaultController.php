<?php

namespace KrishMarDigitalBundle\Controller;

use Pimcore\Controller\FrontendController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends FrontendController
{
    
    public function indexAction(Request $request)
    {
        return new Response('Hello world from krish_mar_digital');
    }
}
