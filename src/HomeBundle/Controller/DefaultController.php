<?php

namespace HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('HomeBundle:home:home.html.twig');
    }


    public function vueAction()
    {
        return $this->render('HomeBundle:vue:vue.html.twig');
    }

}