<?php

namespace HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

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

		$isok = $em->getRepository('TrajetBundle:Trajet')->findOneByIdUser($user->getId());

		$isok->setTrajet1(true);

		$em->persist($isok);
		$em->flush();

		$url = $this -> generateUrl('rando10k1');
		$response = new RedirectResponse($url);
		return $response;

    }
}
