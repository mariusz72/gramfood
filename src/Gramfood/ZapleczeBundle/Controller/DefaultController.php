<?php

namespace Gramfood\ZapleczeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
	public function listaUzytkownikowAction()
    {
    	$em = $this->getDoctrine ()->getManager ();
    	
    	$entities = $em->getRepository('AppBundle:Gramfoodklembowuzyt')->findAll();
    	
    	return $this->render('GramfoodZapleczeBundle:Default:listaUzytkownikow.html.twig', array (
    			'entities' => $entities
    	) );
    	
    }
}
