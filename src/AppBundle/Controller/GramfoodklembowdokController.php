<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Entity\Gramfoodklembowdok;
use AppBundle\Form\GramfoodklembowdokType;

/**
 * Gramfoodklembowdok controller.
 */
class GramfoodklembowdokController extends Controller {
	
	/**
	 * Lists all Gramfoodklembowdok entities.
	 */
	public function indexAction() {
		$em = $this->getDoctrine ()->getManager ();
		
		// $entities = $em->getRepository('AppBundle:Gramfoodklembowdok')->findAll();
		$entities = $em->getRepository ( 'AppBundle:Gramfoodklembowdok' )->findBy ( array (
				'typ' => 'KPL' 
		), array (
				'id' => 'DESC' 
		), 20 );
		
		return $this->render ( 'AppBundle:Gramfoodklembowdok:index.html.twig', array (
				'entities' => $entities 
		) );
	}
	/**
	 * Creates a new Gramfoodklembowdok entity.
	 */
	public function createAction(Request $request) {
		$entity = new Gramfoodklembowdok ();
		$form = $this->createCreateForm ( $entity );
		$form->handleRequest ( $request );
		
		if ($form->isValid ()) {
			$em = $this->getDoctrine ()->getManager ();
			$em->persist ( $entity );
			$em->flush ();
			
			return $this->redirect ( $this->generateUrl ( 'komp_show', array (
					'id' => $entity->getId () 
			) ) );
		}
		
		return $this->render ( 'AppBundle:Gramfoodklembowdok:new.html.twig', array (
				'entity' => $entity,
				'form' => $form->createView () 
		) );
	}
	
	/**
	 * Creates a form to create a Gramfoodklembowdok entity.
	 *
	 * @param Gramfoodklembowdok $entity
	 *        	The entity
	 *        	
	 * @return \Symfony\Component\Form\Form The form
	 */
	private function createCreateForm(Gramfoodklembowdok $entity) {
		$form = $this->createForm ( new GramfoodklembowdokType (), $entity, array (
				'action' => $this->generateUrl ( 'komp_create' ),
				'method' => 'POST' 
		) );
		
		$form->add ( 'submit', 'submit', array (
				'label' => 'Create' 
		) );
		
		return $form;
	}
	
	/**
	 * Displays a form to create a new Gramfoodklembowdok entity.
	 */
	public function newAction() {
		$entity = new Gramfoodklembowdok ();
		$form = $this->createCreateForm ( $entity );
		
		return $this->render ( 'AppBundle:Gramfoodklembowdok:new.html.twig', array (
				'entity' => $entity,
				'form' => $form->createView () 
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
		
		$deleteForm = $this->createDeleteForm ( $id );
		
		return $this->render ( 'AppBundle:Gramfoodklembowdok:show.html.twig', array (
				'entity' => $entity,
				'delete_form' => $deleteForm->createView () 
		) );
	}
	
	/**
	 * Displays a form to edit an existing Gramfoodklembowdok entity.
	 */
	public function editAction($id) {
		$em = $this->getDoctrine ()->getManager ();
		
		$entity = $em->getRepository ( 'AppBundle:Gramfoodklembowdok' )->find ( $id );
		
		if (! $entity) {
			throw $this->createNotFoundException ( 'Unable to find Gramfoodklembowdok entity.' );
		}
		
		$editForm = $this->createEditForm ( $entity );
		$deleteForm = $this->createDeleteForm ( $id );
		
		return $this->render ( 'AppBundle:Gramfoodklembowdok:edit.html.twig', array (
				'entity' => $entity,
				'edit_form' => $editForm->createView (),
				'delete_form' => $deleteForm->createView () 
		) );
	}
	
	/**
	 * Creates a form to edit a Gramfoodklembowdok entity.
	 *
	 * @param Gramfoodklembowdok $entity
	 *        	The entity
	 *        	
	 * @return \Symfony\Component\Form\Form The form
	 */
	private function createEditForm(Gramfoodklembowdok $entity) {
		$form = $this->createForm ( new GramfoodklembowdokType (), $entity, array (
				'action' => $this->generateUrl ( 'komp_update', array (
						'id' => $entity->getId () 
				) ),
				'method' => 'PUT' 
		) );
		
		$form->add ( 'submit', 'submit', array (
				'label' => 'Update' 
		) );
		
		return $form;
	}
	/**
	 * Edits an existing Gramfoodklembowdok entity.
	 */
	public function updateAction(Request $request, $id) {
		$em = $this->getDoctrine ()->getManager ();
		
		$entity = $em->getRepository ( 'AppBundle:Gramfoodklembowdok' )->find ( $id );
		
		if (! $entity) {
			throw $this->createNotFoundException ( 'Unable to find Gramfoodklembowdok entity.' );
		}
		
		$deleteForm = $this->createDeleteForm ( $id );
		$editForm = $this->createEditForm ( $entity );
		$editForm->handleRequest ( $request );
		
		if ($editForm->isValid ()) {
			$em->flush ();
			
			return $this->redirect ( $this->generateUrl ( 'komp_edit', array (
					'id' => $id 
			) ) );
		}
		
		return $this->render ( 'AppBundle:Gramfoodklembowdok:edit.html.twig', array (
				'entity' => $entity,
				'edit_form' => $editForm->createView (),
				'delete_form' => $deleteForm->createView () 
		) );
	}
	/**
	 * Deletes a Gramfoodklembowdok entity.
	 */
	public function deleteAction(Request $request, $id) {
		$form = $this->createDeleteForm ( $id );
		$form->handleRequest ( $request );
		
		if ($form->isValid ()) {
			$em = $this->getDoctrine ()->getManager ();
			$entity = $em->getRepository ( 'AppBundle:Gramfoodklembowdok' )->find ( $id );
			
			if (! $entity) {
				throw $this->createNotFoundException ( 'Unable to find Gramfoodklembowdok entity.' );
			}
			
			$em->remove ( $entity );
			$em->flush ();
		}
		
		return $this->redirect ( $this->generateUrl ( 'komp' ) );
	}
	
	/**
	 * Creates a form to delete a Gramfoodklembowdok entity by id.
	 *
	 * @param mixed $id
	 *        	The entity id
	 *        	
	 * @return \Symfony\Component\Form\Form The form
	 */
	private function createDeleteForm($id) {
		return $this->createFormBuilder ()->setAction ( $this->generateUrl ( 'komp_delete', array (
				'id' => $id 
		) ) )->setMethod ( 'DELETE' )->add ( 'submit', 'submit', array (
				'label' => 'Delete' 
		) )->getForm ();
	}
}
