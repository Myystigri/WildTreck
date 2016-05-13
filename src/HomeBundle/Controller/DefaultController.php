<?php

namespace HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('HomeBundle:home:home.html.twig');
    }


    public function vueAction()
    {
        return $this->render('HomeBundle:vue:vue10.html.twig');
    }
   	public function vue20Action()
    {
        return $this->render('HomeBundle:vue:vue20.html.twig');
    }
    public function vue30Action()
    {
        return $this->render('HomeBundle:vue:vue30.html.twig');
    }
    public function vue40Action()
    {
        return $this->render('HomeBundle:vue:vue40.html.twig');
    }
    public function vue50Action()
    {
        return $this->render('HomeBundle:vue:vue50.html.twig');
    }
    public function vue60Action()
    {
        return $this->render('HomeBundle:vue:vue60.html.twig');
    }

}