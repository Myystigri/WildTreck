<?php

namespace HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use AppBundle\Entity\User;
use TrajetBundle\Entity\Trajets;

class RandoController extends Controller
{
	public function rando10k1Action()
    {
        return $this->render('HomeBundle:rando:rando10k1.html.twig');
    }
    public function modifybtnAction(Request $request)
    {
		$em = $this->getDoctrine()->getManager();
		$user = $this->container->get('security.context')->getToken()->getUser();

		$isok = $em->getRepository('TrajetBundle:Trajets')->findOneByIdUser($user->getId());
		//$isok = new Trajets();
		$isok->setTrajet10k1(true);
		$userid = $user -> getId();
		$isok->setIdUser($userid);
		// $repository = $this->getDoctrine()->getRepository('TrajetBundle:Trajets');
		// $trajets = $repository->findOneById_user($userid);

		$em->persist($isok);
		$em->flush();

		$url = $this -> generateUrl('rando10k1vue');
		$response = new RedirectResponse($url);
		return $response;


		// $url = $this -> generateUrl('user_messagerie');
		// $response = new RedirectResponse($url);
		// return $response;




    }
    public function rando10k2Action()
    {
        return $this->render('HomeBundle:rando:rando10k2.html.twig');
    }
    public function modifybtn10k2Action(Request $request)
    {
		$em = $this->getDoctrine()->getManager();
		$user = $this->container->get('security.context')->getToken()->getUser();

		$isok = $em->getRepository('TrajetBundle:Trajets')->findOneByIdUser($user->getId());
		//$isok = new Trajets();
		$isok->setTrajet10k2(true);
		$userid = $user -> getId();
		$isok->setIdUser($userid);
		// $repository = $this->getDoctrine()->getRepository('TrajetBundle:Trajets');
		// $trajets = $repository->findOneById_user($userid);

		$em->persist($isok);
		$em->flush();

		$url = $this -> generateUrl('rando10k2vue');
		$response = new RedirectResponse($url);
		return $response;


		// $url = $this -> generateUrl('user_messagerie');
		// $response = new RedirectResponse($url);
		// return $response;




    }
}
