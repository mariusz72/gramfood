<?php

namespace Gramfood\MagazynBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Entity\Testowa;
use AppBundle\Entity\Gramfoodklembowzamzy;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\ExtGramfoodkompow;
use AppBundle\Form\ExtGramfoodkompowType;

class ZestawieniaController extends Controller {
	
	/**
	 * Lists all WZ entities.
	 */	
	public function listaWZAction() {
		

			$em = $this->getDoctrine ()->getManager ();

			$entities = $em->getRepository ( 'AppBundle:Gramfoodklembowspec' )->findBy ( 
					array (	'typ' => 'WZ', 'akt' => 'T', 'anul' => 'N'),
					array (	'id' => 'ASC'));
		
			return $this->render ( 'GramfoodMagazynBundle:Zestawienia:listaWZ.html.twig', array (
					'entities' => $entities
			) );
	
	}

	/**
	 * Lists all WZ entities.
	 */
	public function listaTowaryAction() {
		
		
		$em = $this->getDoctrine ()->getManager ();
		
		$entities = $em->getRepository ( 'AppBundle:Gramfoodklembowtowary' )->findBy (
				array (	),
				array (	'id' => 'ASC'));
		
		return $this->render ( 'GramfoodMagazynBundle:Zestawienia:listaTowary.html.twig', array (
				'entities' => $entities
		) );
		
	}
	
	/**
	 * Lists all WZ entities.
	 */
	public function listaPWAction() {
		
		
		$em = $this->getDoctrine ()->getManager ();
		
		$entities = $em->getRepository ( 'AppBundle:Gramfoodklembowspec' )->findBy (
				array (	'typ' => 'PW', 'akt' => 'T', 'anul' => 'N'),
				array (	'id' => 'ASC'));
		
		return $this->render ( 'GramfoodMagazynBundle:Zestawienia:listaPW.html.twig', array (
				'entities' => $entities
		) );
		
	}
	
	/**
	 * Lists all WZ entities.
	 */
	public function listaPZAction() {
		
		
		$em = $this->getDoctrine ()->getManager ();
		
		$entities = $em->getRepository ( 'AppBundle:Gramfoodklembowspec' )->findBy (
				array (	'typ' => 'ZAT', 'akt' => 'T', 'anul' => 'N'),
				array (	'id' => 'ASC'));
		
		return $this->render ( 'GramfoodMagazynBundle:Zestawienia:listaPZ.html.twig', array (
				'entities' => $entities
		) );
		
	}

}
