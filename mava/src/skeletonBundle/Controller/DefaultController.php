<?php

namespace skeletonBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/my/{name}", name="mypage", defaults={"name":null})
     */
    public function indexAction($name)
    {
        return $this->render('skeletonBundle:Default:index.html.twig',
            array('name' => $name));
    }
}
