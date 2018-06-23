<?php

namespace Gramfood\MagazynBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Entity\Testowa;
use AppBundle\Entity\Gramfoodklembowzamzy;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\ExtGramfoodkompow;
use AppBundle\Entity\Gramfoodklembowspec;
use AppBundle\Form\ExtGramfoodkompowType;

class KompletacjeController extends Controller {
	
	/**
	 * Lists all Gramfoodklembowdok entities.
	 */	
	public function listaAction() {
		

			$em = $this->getDoctrine ()->getManager ();
		
			// $entities = $em->getRepository('AppBundle:Gramfoodklembowdok')->findAll();
			$entities = $em->getRepository ( 'AppBundle:Gramfoodklembowdok' )->findBy ( 
					array (	'typ' => 'KPL', 'akt' => 'T', 'anul' => 'N'),
					array (	'id' => 'ASC'));
		
			return $this->render ( 'GramfoodMagazynBundle:Default:lista.html.twig', array (
					'entities' => $entities
			) );
	
	}

	/**
	 * Lists kompletacji dla produktu.
	 */
	public function listaProduktAction($kod, $sn) {
		
		
		$em = $this->getDoctrine ()->getManager ();
		
	#	$entitiesSP = $em->getRepository ( 'AppBundle:Gramfoodklembowspec' )->findBy (
	#			array (	'typ' => 'PW', 'kod' => $kod, 'sn' => $sn),
	#			array (	'id' => 'ASC'));

	#$entitiesSP = $em->getRepository ( 'AppBundle:Gramfoodklembowspec' )->findByNrser($kod, $sn);
		
		$repository = $em->getRepository ( 'AppBundle:Gramfoodklembowspec' );
		
		$query = $repository->createQueryBuilder('a')
				   ->where('a.typ like :typ and a.kod = :kod and a.sn LIKE :sn')
                   ->setParameter('typ', 'PW')
				   ->setParameter('kod', $kod)
				   ->setParameter('sn', $sn)
                   ->getQuery();
				   
		$entitiesSP = $query->execute();
		
				
		if ($entitiesSP) {
			$bank = $entitiesSP[0]->getIdf();
		}else{
			$bank = 'brak';
		};
		
		// $entities = $em->getRepository('AppBundle:Gramfoodklembowdok')->findAll();
		$entities = $em->getRepository ( 'AppBundle:Gramfoodklembowdok' )->findBy (
				array (	'typ' => 'KPL', 'akt' => 'T', 'anul' => 'N', 'bank' => $bank),
				array (	'id' => 'ASC'));
		
		return $this->render ( 'GramfoodMagazynBundle:Default:lista.html.twig', array (
				'entities' => $entities,
				'wz' => 'T'
		) );
		
	}
	
	/**
	 * Finds and displays a Gramfoodklembowdok entity.
	 */
	public function showAction($id) {
		$em = $this->getDoctrine ()->getManager ();
		
		$entity = $em->getRepository ( 'AppBundle:Gramfoodklembowdok' )->find ( $id );
		
		if (! $entity) {
			throw $this->createNotFoundException ( 'Unable to find Gramfoodklembowdok entity.' );
		}
		
		return $this->render ( 'GramfoodMagazynBundle:Default:show.html.twig', array (
				'entity' => $entity
		) );
	}
	
	/**
	 * Finds and displays a Gramfoodklembowspec entity.
	 */
	public function showPWAction($id) {
		$em = $this->getDoctrine ()->getManager ();
		
		$entity = $em->getRepository ( 'AppBundle:Gramfoodklembowspec' )->findBy (
				array (	'idf' => $id),	array (	'id' => 'ASC'));
		
		if (! $entity) {
			throw $this->createNotFoundException ( 'Unable to find Gramfoodklembowspec entity.' );
		}
		
		return $this->render ( 'GramfoodMagazynBundle:Default:showPw.html.twig', array (
				'entity' => $entity[0]
		) );
	}
	
	/**
	 * Finds and displays a Gramfoodklembowspec entity.
	 */
	public function showPZAction($id, Request $request) {
		$em = $this->getDoctrine ()->getManager ();
		$modal = $request->query->get('modal');
		
		$entity = $em->getRepository ( 'AppBundle:Gramfoodklembowspec' )->findBy (
				array (	'id' => $id, 'typ' => 'ZAT'),	array (	'id' => 'ASC'));
		
		if (! $entity) {
			throw $this->createNotFoundException ( 'Unable to find Gramfoodklembowspec entity.' );
		}
		
		if($modal == 1){
			$twig_name = 'showPz.html.twig';
		}else{
			$twig_name = 'showPzPage.html.twig';
		}
		
		return $this->render ( 'GramfoodMagazynBundle:Default:'.$twig_name, array (
				'entity' => $entity[0]
		) );
	}

	/**
	 * wyswiatlenie skøadników kompletacji RW Rozchód Wewnetrzny.
	 */
	public function rwIdAction(Request $request) {
		$em = $this->getDoctrine ()->getManager ();
		
		$NrR = $request->request->get('nrr');
		$bankN = $request->request->get('bankN');
		
		//file_put_contents('/tmp/111_sprTrasmit.txt', print_r( $NrR. ' - ' . $bankN , true));
		
		$entities = $em->getRepository ( 'AppBundle:Gramfoodklembowspec' )->findBy (
				array (	'idf' => $bankN),	array (	'id' => 'ASC'));
		
		if (! $entities) {
			throw $this->createNotFoundException ( 'Unable to find Gramfoodklembowspec entity.' );
		}
		
		return $this->render ( 'GramfoodMagazynBundle:Default:showRw.html.twig', array (
				'entities' => $entities
		) );

	}

	
	/**
	 * wyswiatlenie powiazan kompletacji EXT.
	 */
	public function ExtPowShowAction(Request $request) {
		
		$id = $request->query->get('id');
		$modal = $request->query->get('modal');
		$nazwa = $request->query->get('nazwa');
		
		$em = $this->getDoctrine ()->getManager ();
		
		$entities = $em->getRepository ( 'AppBundle:ExtGramfoodkompow' )->findBy (
				array (	'idrw' => $id),	array (	'id' => 'ASC'));
		
		if (!$entities) {
			$entities = null;
		}
		
		return $this->render ( 'GramfoodMagazynBundle:Default:showExtPow.html.twig', array (
				'entities' => $entities,
				'id' => $id,
				'nazwa' => $nazwa,
				'modal' => $modal
		) );
		
	}
	
	/**
	 * wyswiatlenie powiazan kompletacji EXT.
	 */
	public function searchPZAction(Request $request) {
		
		$kod = $request->query->get('kod');
		$modal = $request->query->get('modal');
		
		$em = $this->getDoctrine ()->getManager ();
		
		$entities = $em->getRepository ( 'AppBundle:Gramfoodklembowspec' )->findBy (
				array (	'kod' => $kod, 'typ' => 'ZAT'),	array (	'id' => 'ASC'));
		
		if (!$entities) {
			$entities = null;
		}
		
		return $this->render ( 'GramfoodMagazynBundle:Default:searchPZ.html.twig', array (
				'entities' => $entities,
				'modal' => $modal
		) );

	}
	
	/**
	 * Deletes a ExtGramfoodkompow entity.
	 */
	public function deleteAction(Request $request, $id) {

			$em = $this->getDoctrine ()->getManager ();
			$entity = $em->getRepository ( 'AppBundle:ExtGramfoodkompow' )->find ( $id );
			
			if (! $entity) {
				throw $this->createNotFoundException ( 'Unable to find ExtGramfoodkompow entity.' );
			}
			
			$em->remove ( $entity );
			$em->flush ();
		
		return $this->redirect ( $this->generateUrl ( 'gramfood_magazyn_kompletacje_lista' ) );
	}
	
	/**
	 * Creates a new ExtGramfoodkompow entity.
	 */
	public function createAction(Request $request) {
		$entity = new ExtGramfoodkompow ();
		$form = $this->createCreateForm ( $entity );
		$form->handleRequest ( $request );
		
		if ($form->isValid ()) {
			$em = $this->getDoctrine ()->getManager ();
			$em->persist ( $entity );
			$em->flush ();
			
// 			return $this->redirect ( $this->generateUrl ( 'table_show', array (
// 					'id' => $entity->getId ()
// 			) ) );
			
			return $this->redirect ( $this->generateUrl ( 'gramfood_magazyn_kompletacje_lista' ) );
			//return new Response('OKKK');
		}
		
		return $this->render ( 'GramfoodMagazynBundle:Default:newExtPow.html.twig', array (
				'entity' => $entity,
				'form' => $form->createView ()
		) );
	}
	
	/**
	 * Creates a form to create a ExtGramfoodkompow entity.
	 *
	 * @param ExtGramfoodkompow $entity
	 *        	The entity
	 *
	 * @return \Symfony\Component\Form\Form The form
	 */
	private function createCreateForm(ExtGramfoodkompow $entity) {
		$form = $this->createForm ( new ExtGramfoodkompowType (), $entity, array (
				'action' => $this->generateUrl ( 'gramfood_magazyn_kompletacje_ExtPowCreate' ),
// 				'action' => '#',
				'method' => 'POST'
		) );
		
// 		$form->add ( 'submit', 'submit', array (
// 				'label' => 'Create'
// 		) );
		
		return $form;
	}
	
	/**
	 * Creates a form to edit a ExtGramfoodkompow entity. 
	 *
	 * @param ExtGramfoodkompow $entity
	 *        	The entity
	 *
	 * @return \Symfony\Component\Form\Form The form
	 */
	private function createEditForm(ExtGramfoodkompow $entity) {
		$form = $this->createForm ( new ExtGramfoodkompowType (), $entity, array (
				'action' => $this->generateUrl ( 'gramfood_magazyn_kompletacje_ExtPowUpdate', array (
						'id' => $entity->getId ()
				) ),
				'method' => 'PUT'
		) );
		
		return $form;
	}
	
	/**
	 * Edits an existing Gramfoodklembowdok entity.
	 */
	public function updateAction(Request $request, $id) {
		$em = $this->getDoctrine ()->getManager();
		$entity = $em->getRepository ( 'AppBundle:ExtGramfoodkompow' )->find ( $id );
		
		$id = $request->query->get('id');
		$idrw = $request->query->get('idrw');
		$modal = $request->query->get('modal');
		
		if (! $entity) {
			throw $this->createNotFoundException ( 'Unable to find ExtGramfoodkompow entity.' );
		}
		
		$editForm = $this->createEditForm ( $entity );
		$editForm->handleRequest ( $request );

			$em->flush ();
			return new Response('name');
			return $this->redirect ( $this->generateUrl ( 'gramfood_magazyn_kompletacje_lista' ) );

	}
	
	/**
	 * Displays a form to create a new ExtGramfoodkompow entity.
	 */
	public function ExtPowAddAction(Request $request) {
		
		$id = $request->query->get('id');
		$modal = $request->query->get('modal');
		
		$entity = new ExtGramfoodkompow ();
		$form = $this->createCreateForm ( $entity );
		
		
		$em = $this->getDoctrine ()->getManager ();
		
		$rw = $em->getRepository ( 'AppBundle:Gramfoodklembowspec' )->findBy (
				array (	'id' => $id));
		
		return $this->render ( 'GramfoodMagazynBundle:Default:newExtPow.html.twig', array (
				'rw' => $rw,
				'id' => $id,
				'modal' => $modal,
				'entity' => $entity,
				'form' => $form->createView ()
		) );
	}

	/**
	 * Edycja tabeli ExtGramfoodkompow.
	 */
	public function ExtPowEditAction(Request $request) {
		
		$id = $request->query->get('id');
		$idrw = $request->query->get('idrw');
		$modal = $request->query->get('modal');
		
		$em = $this->getDoctrine ()->getManager ();
		$entity = $em->getRepository ( 'AppBundle:ExtGramfoodkompow' )->find ( $id );

		$editForm = $this->createEditForm ( $entity );
		
		if (! $entity) {
			throw $this->createNotFoundException ( 'Unable to find ExtGramfoodkompow entity.' );
		}
		
		$rw = $em->getRepository ( 'AppBundle:Gramfoodklembowspec' )->findBy (
				array (	'id' => $idrw));
		
		return $this->render ( 'GramfoodMagazynBundle:Default:newExtPow.html.twig', array (
				'rw' => $rw,
				'id' => $id,
				'idrw' => $idrw,
				'modal' => $modal,
				'entity' => $entity,
				'form' => $editForm->createView ()
		) );
	}
	
}
