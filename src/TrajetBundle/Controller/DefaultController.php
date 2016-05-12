<?php

namespace TrajetBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('TrajetBundle:Default:index.html.twig');
    }
}
