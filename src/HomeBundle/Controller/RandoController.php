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
    public function rando50k1Action()
    {
        return $this->render('HomeBundle:rando:rando50k1.html.twig');
    }
    public function modifybtn50k1Action(Request $request)
    {
		$em = $this->getDoctrine()->getManager();
		$user = $this->container->get('security.context')->getToken()->getUser();

		$isok = $em->getRepository('TrajetBundle:Trajets')->findOneByIdUser($user->getId());
		//$isok = new Trajets();
		$isok->setTrajet50k1(true);
		$userid = $user -> getId();
		$isok->setIdUser($userid);
		// $repository = $this->getDoctrine()->getRepository('TrajetBundle:Trajets');
		// $trajets = $repository->findOneById_user($userid);

		$em->persist($isok);
		$em->flush();

		$url = $this -> generateUrl('rando50k1vue');
		$response = new RedirectResponse($url);
		return $response;


		// $url = $this -> generateUrl('user_messagerie');
		// $response = new RedirectResponse($url);
		// return $response;




    }
    public function rando50k2Action()
    {
        return $this->render('HomeBundle:rando:rando50k2.html.twig');
    }
    public function modifybtn50k2Action(Request $request)
    {
		$em = $this->getDoctrine()->getManager();
		$user = $this->container->get('security.context')->getToken()->getUser();

		$isok = $em->getRepository('TrajetBundle:Trajets')->findOneByIdUser($user->getId());
		//$isok = new Trajets();
		$isok->setTrajet50k2(true);
		$userid = $user -> getId();
		$isok->setIdUser($userid);
		// $repository = $this->getDoctrine()->getRepository('TrajetBundle:Trajets');
		// $trajets = $repository->findOneById_user($userid);

		$em->persist($isok);
		$em->flush();

		$url = $this -> generateUrl('rando50k2vue');
		$response = new RedirectResponse($url);
		return $response;


		// $url = $this -> generateUrl('user_messagerie');
		// $response = new RedirectResponse($url);
		// return $response;




    }
    public function rando50k3Action()
    {
        return $this->render('HomeBundle:rando:rando50k3.html.twig');
    }
    public function modifybtn50k3Action(Request $request)
    {
		$em = $this->getDoctrine()->getManager();
		$user = $this->container->get('security.context')->getToken()->getUser();

		$isok = $em->getRepository('TrajetBundle:Trajets')->findOneByIdUser($user->getId());
		//$isok = new Trajets();
		$isok->setTrajet50k3(true);
		$userid = $user -> getId();
		$isok->setIdUser($userid);
		// $repository = $this->getDoctrine()->getRepository('TrajetBundle:Trajets');
		// $trajets = $repository->findOneById_user($userid);

		$em->persist($isok);
		$em->flush();

		$url = $this -> generateUrl('rando50k3vue');
		$response = new RedirectResponse($url);
		return $response;


		// $url = $this -> generateUrl('user_messagerie');
		// $response = new RedirectResponse($url);
		// return $response;




    }
    public function rando50k4Action()
    {
        return $this->render('HomeBundle:rando:rando50k4.html.twig');
    }
    public function modifybtn50k4Action(Request $request)
    {
		$em = $this->getDoctrine()->getManager();
		$user = $this->container->get('security.context')->getToken()->getUser();

		$isok = $em->getRepository('TrajetBundle:Trajets')->findOneByIdUser($user->getId());
		//$isok = new Trajets();
		$isok->setTrajet50k4(true);
		$userid = $user -> getId();
		$isok->setIdUser($userid);
		// $repository = $this->getDoctrine()->getRepository('TrajetBundle:Trajets');
		// $trajets = $repository->findOneById_user($userid);

		$em->persist($isok);
		$em->flush();

		$url = $this -> generateUrl('rando50k4vue');
		$response = new RedirectResponse($url);
		return $response;


		// $url = $this -> generateUrl('user_messagerie');
		// $response = new RedirectResponse($url);
		// return $response;




    }
    public function rando60k1Action()
    {
        return $this->render('HomeBundle:rando:rando60k1.html.twig');
    }
    public function modifybtn60k1Action(Request $request)
    {
		$em = $this->getDoctrine()->getManager();
		$user = $this->container->get('security.context')->getToken()->getUser();

		$isok = $em->getRepository('TrajetBundle:Trajets')->findOneByIdUser($user->getId());
		//$isok = new Trajets();
		$isok->setTrajet60k1(true);
		$userid = $user -> getId();
		$isok->setIdUser($userid);
		// $repository = $this->getDoctrine()->getRepository('TrajetBundle:Trajets');
		// $trajets = $repository->findOneById_user($userid);

		$em->persist($isok);
		$em->flush();

		$url = $this -> generateUrl('rando60k1vue');
		$response = new RedirectResponse($url);
		return $response;


		// $url = $this -> generateUrl('user_messagerie');
		// $response = new RedirectResponse($url);
		// return $response;




    }
    public function rando60k2Action()
    {
        return $this->render('HomeBundle:rando:rando60k2.html.twig');
    }
    public function modifybtn60k2Action(Request $request)
    {
		$em = $this->getDoctrine()->getManager();
		$user = $this->container->get('security.context')->getToken()->getUser();

		$isok = $em->getRepository('TrajetBundle:Trajets')->findOneByIdUser($user->getId());
		//$isok = new Trajets();
		$isok->setTrajet60k2(true);
		$userid = $user -> getId();
		$isok->setIdUser($userid);
		// $repository = $this->getDoctrine()->getRepository('TrajetBundle:Trajets');
		// $trajets = $repository->findOneById_user($userid);

		$em->persist($isok);
		$em->flush();

		$url = $this -> generateUrl('rando60k2vue');
		$response = new RedirectResponse($url);
		return $response;


		// $url = $this -> generateUrl('user_messagerie');
		// $response = new RedirectResponse($url);
		// return $response;




    }
    public function rando60k3Action()
    {
        return $this->render('HomeBundle:rando:rando60k3.html.twig');
    }
    public function modifybtn60k3Action(Request $request)
    {
		$em = $this->getDoctrine()->getManager();
		$user = $this->container->get('security.context')->getToken()->getUser();

		$isok = $em->getRepository('TrajetBundle:Trajets')->findOneByIdUser($user->getId());
		//$isok = new Trajets();
		$isok->setTrajet60k3(true);
		$userid = $user -> getId();
		$isok->setIdUser($userid);
		// $repository = $this->getDoctrine()->getRepository('TrajetBundle:Trajets');
		// $trajets = $repository->findOneById_user($userid);

		$em->persist($isok);
		$em->flush();

		$url = $this -> generateUrl('rando60k3vue');
		$response = new RedirectResponse($url);
		return $response;


		// $url = $this -> generateUrl('user_messagerie');
		// $response = new RedirectResponse($url);
		// return $response;




    }
    public function rando60k4Action()
    {
        return $this->render('HomeBundle:rando:rando60k4.html.twig');
    }
    public function modifybtn60k4Action(Request $request)
    {
		$em = $this->getDoctrine()->getManager();
		$user = $this->container->get('security.context')->getToken()->getUser();

		$isok = $em->getRepository('TrajetBundle:Trajets')->findOneByIdUser($user->getId());
		//$isok = new Trajets();
		$isok->setTrajet60k4(true);
		$userid = $user -> getId();
		$isok->setIdUser($userid);
		// $repository = $this->getDoctrine()->getRepository('TrajetBundle:Trajets');
		// $trajets = $repository->findOneById_user($userid);

		$em->persist($isok);
		$em->flush();

		$url = $this -> generateUrl('rando60k4vue');
		$response = new RedirectResponse($url);
		return $response;


		// $url = $this -> generateUrl('user_messagerie');
		// $response = new RedirectResponse($url);
		// return $response;




    }
}
