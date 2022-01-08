<?php

namespace KrishMarDigitalBundle\Controller\Admin;

use Pimcore\Controller\FrontendController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use Pimcore\Bundle\AdminBundle\Controller\AdminController as ParentController;


class AdminController  extends FrontendController
{
    /**
     * @Route("/listing", name="krish_admin_index", methods={"GET"})
     * 
     */
    public function indexAction(Request $request){
        
        return $this->render('@KrishMarDigitalBundle/Admin/Index/index.html.twig');
    }
}
