<?php

namespace App\Controller;

use Pimcore\Controller\FrontendController;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends FrontendController
{
    /**
     * @Template
     * @param Request $request
     * @return array
     */
    public function defaultAction(Request $request)
    {   
        return [];
    }

    /**
     * @Route("/blog/{blog_title}", name="blog")
     * 
     * @param Request $request
     * @return array
     * 
     * 
     */
    public function blogAction(Request $request)
    {   
        $blogTitle = $request->get('blog_title');
        $blog = \Pimcore\Model\DataObject\Blog::getByBlogTitle($blogTitle,1);

        $paramBag = [];
        $paramBag['blogContent'] = $blog;
        //dd($blog);
        return $this->render('default/blog.html.twig', $paramBag);
    }

    /**
     * @Template
     * @param Request $request
     * @return array
     */
    public function myObjectAction(Request $request)
    {   
        $object =\Pimcore\Model\DataObject\Blog::getById((int) $request->get('id'));
        if($object){
            return [
                'object' => $object
            ];
        }
        return [];
    }
}
