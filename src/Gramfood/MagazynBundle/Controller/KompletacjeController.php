<?php

namespace Gramfood\MagazynBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Entity\Testowa;
use AppBundle\Entity\Gramfoodklembowzamzy;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\ExtGramfoodkompow;
use AppBundle\Form\ExtGramfoodkompowType;

class KompletacjeController extends Controller {
	
	/**
	 * Lists all Gramfoodklembowdok entities.
	 */	
	public function listaAction() {
		

			$em = $this->getDoctrine ()->getManager ();
		
			// $entities = $em->getRepository('AppBundle:Gramfoodklembowdok')->findAll();
//			$entities = $em->getRepository ( 'AppBundle:Gramfoodklembowdok' )->findBy ( 
//					array (	'typ' => 'KPL', 'akt' => 'T', 'anul' => 'N'),
//					array (	'id' => 'ASC'), 3);

			$aa = $em->getRepository('AppBundle:ExtGramfoodkompow')->findToExt();		

			return $this->render ( 'GramfoodMagazynBundle:Default:lista.html.twig', array (
			    'entities' => $aa
				//	'aa' => $aa
			) );
	
	}

	/**
	 * Lists kompletacji dla produktu.
	 */
	public function listaProduktAction($kod, Request $request) {
		
		
		$em = $this->getDoctrine ()->getManager ();
		
		$sn = $request->request->get('sn');
	//	file_put_contents('c:\xampp\tmp\1_sn.txt', print_r( $sn. ' -'. $kod , true));
		
//		$entitiesSP = $em->getRepository ( 'AppBundle:Gramfoodklembowspec' )->findBy (
//		    array (	'typ' => 'PW', 'kod' => $kod, 'sn' => $sn),
//				array (	'id' => 'ASC'));

		$entitiesSP = $em->getRepository('AppBundle:ExtGramfoodkompow')->findToPw ($sn, $kod);
		
	//	file_put_contents('c:\xampp\tmp\entiti_sn.txt', print_r( $entitiesSP , true));
		
		if ($entitiesSP) {
			$bank = $entitiesSP[0]->getIdf();
		}else{
			$bank = 'brak';
		};
		
		$entities = $em->getRepository('AppBundle:ExtGramfoodkompow')->findToDok ($bank);
		
	//	$entities = $em->getRepository ( 'AppBundle:Gramfoodklembowdok' )->findBy (
	//			array (	'typ' => 'KPL', 'akt' => 'T', 'anul' => 'N', 'bank' => $bank),
	//			array (	'id' => 'ASC'));
		
		return $this->render ( 'GramfoodMagazynBundle:Default:lista.html.twig', array (
				'entities' => $entities,
				'wz' => 'T'
		) );
		
	}
	
	/**
	 * Lists kompletacji dla produktu.
	 */
	public function listaProduktZPwAction($pw) {
		
		
		$em = $this->getDoctrine ()->getManager ();
		
		// $entities = $em->getRepository('AppBundle:Gramfoodklembowdok')->findAll();
//		$entities = $em->getRepository ( 'AppBundle:Gramfoodklembowdok' )->findBy (
//				array (	'typ' => 'KPL', 'akt' => 'T', 'anul' => 'N', 'bank' => $pw),
//				array (	'id' => 'ASC'));
		
		$entities = $em->getRepository('AppBundle:ExtGramfoodkompow')->findToDok ($pw);
		
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
	public function showPWAction($id, Request $request) {
		$em = $this->getDoctrine ()->getManager ();
		
		$idpw = $request->query->get('idpw');
		
		if($idpw){
		    $pole ='id';
		    $twig_name = 'showPwPage.html.twig';
		}else{
		    $pole ='idf';
		    $twig_name = 'showPw.html.twig';
		}
		
		$entity = $em->getRepository ( 'AppBundle:Gramfoodklembowspec' )->findBy (
				array (	$pole => $id),	array (	'id' => 'ASC'));
		
		if (! $entity) {
			throw $this->createNotFoundException ( 'Unable to find Gramfoodklembowspec entity.' );
		}
		
		return $this->render ( 'GramfoodMagazynBundle:Default:'.$twig_name, array (
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
	 * Finds and displays a Gramfoodklembowspec entity.
	 */
	public function listaPZAction($id, Request $request) {
		$em = $this->getDoctrine ()->getManager ();
		
		$entity_ext = $em->getRepository('AppBundle:ExtGramfoodkompow')->findBy (array ('idpz' => $id));
		
		$ids = array();
		foreach($entity_ext as $w) {
			$ids[] = $w->getIdkpl();
		}
		
		//file_put_contents('/tmp/111_sprTrasmit.txt', print_r( $ids , true));
		
		$aa = $em->getRepository('AppBundle:ExtGramfoodkompow')->findToExt_zPZ($ids);
		
		return $this->render ( 'GramfoodMagazynBundle:Default:lista.html.twig', array (
				'entities' => $aa
				//	'aa' => $aa
		) );
	}

	/**
	 * wyswiatlenie skøadników kompletacji RW Rozchód Wewnetrzny.
	 */
	public function rwIdAction(Request $request) {
		$em = $this->getDoctrine ()->getManager ();
		
		$NrR = $request->request->get('nrr');
		$bankN = $request->request->get('bankN');
		$idkpl = $request->request->get('idkpl');
		$idRw = $request->request->get('idrw');
		
		//file_put_contents('/tmp/111_sprTrasmit.txt', print_r( $NrR. ' - ' . $bankN , true));
		
//		$entities = $em->getRepository ( 'AppBundle:Gramfoodklembowspec' )->findBy (
//				array (	'idf' => $bankN),	array (	'id' => 'ASC'));
		
		$entities = $em->getRepository ( 'AppBundle:ExtGramfoodkompow' )->findByIdOr ($bankN);
		
		$entities2 = $em->getRepository ( 'AppBundle:ExtGramfoodkompow' )->findRwExt($bankN);
		
		if (! $entities) {
			throw $this->createNotFoundException ( 'Unable to find Gramfoodklembowspec entity.' );
		}
		
		return $this->render ( 'GramfoodMagazynBundle:Default:showRw.html.twig', array (
				'entities' => $entities,
		        'entities2' => $entities2,
		        'idkpl' => $idkpl
		) );

	}

	
	/**
	 * wyswiatlenie powiazan kompletacji EXT.
	 */
	public function ExtPowShowAction(Request $request) {
		
		$id = $request->query->get('id');
		$modal = $request->query->get('modal');
		$nazwa = $request->query->get('nazwa');
		$idkpl = $request->query->get('idkpl');
		
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
				'modal' => $modal,
		        'idkpl' => $idkpl
		) );
		
	}
	
	/**
	 * wyswiatlenie powiazan kompletacji EXT.
	 */
	public function searchPZAction(Request $request) {
		
		$kod = $request->query->get('kod');
		$modal = $request->query->get('modal');
		
		$em = $this->getDoctrine ()->getManager ();
		
	//	$entities = $em->getRepository ( 'AppBundle:Gramfoodklembowspec' )->findBy (
	//			array (	'kod' => $kod, 'typ' => 'ZAT'),	array (	'id' => 'ASC'));
		
		$entities = $em->getRepository ( 'AppBundle:ExtGramfoodkompow' )->findByTypOr ($kod);
		
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
		$entity->setData(date('Y-m-d H:i:s'));
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
		$idkpl = $request->query->get('idkpl');
		$il = $request->query->get('il');
		
		$entity = new ExtGramfoodkompow ();
		$form = $this->createCreateForm ( $entity );
		
		
		$em = $this->getDoctrine ()->getManager ();
		
		$rw = $em->getRepository ( 'AppBundle:Gramfoodklembowspec' )->findBy (
				array (	'id' => $id));
		
		return $this->render ( 'GramfoodMagazynBundle:Default:newExtPow.html.twig', array (
				'rw' => $rw,
				'id' => $id,
		        'idkpl' => $idkpl,
		        'il' => $il,
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
		$idkpl = $request->query->get('idkpl');
		
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
		        'idkpl' => $idkpl,
				'il' => $entity->getIl(),
				'modal' => $modal,
				'entity' => $entity,
				'form' => $editForm->createView ()
		) );
	}
	
}
