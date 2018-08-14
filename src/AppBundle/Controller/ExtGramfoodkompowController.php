<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Entity\ExtGramfoodkompow;
use AppBundle\Form\ExtGramfoodkompowType;

/**
 * ExtGramfoodkompow controller.
 */
class ExtGramfoodkompowController extends Controller {
	
	/**
	 * Lists all ExtGramfoodkompow entities.
	 */
	public function indexAction() {
		$em = $this->getDoctrine ()->getManager ();
		
		$entities = $em->getRepository ( 'AppBundle:ExtGramfoodkompow' )->findAll ();
		
		return $this->render ( 'AppBundle:ExtGramfoodkompow:index.html.twig', array (
				'entities' => $entities 
		) );
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
			
			return $this->redirect ( $this->generateUrl ( 'table_show', array (
					'id' => $entity->getId () 
			) ) );
		}
		
		return $this->render ( 'AppBundle:ExtGramfoodkompow:new.html.twig', array (
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
				'action' => $this->generateUrl ( 'table_create' ),
				'method' => 'POST' 
		) );
		
		$form->add ( 'submit', 'submit', array (
				'label' => 'Create' 
		) );
		
		return $form;
	}
	
	/**
	 * Displays a form to create a new ExtGramfoodkompow entity.
	 */
	public function newAction() {
		$entity = new ExtGramfoodkompow ();
		$form = $this->createCreateForm ( $entity );
		
		return $this->render ( 'AppBundle:ExtGramfoodkompow:new.html.twig', array (
				'entity' => $entity,
				'form' => $form->createView () 
		) );
	}
	
	/**
	 * Finds and displays a ExtGramfoodkompow entity.
	 */
	public function showAction($id) {
		$em = $this->getDoctrine ()->getManager ();
		
		$entity = $em->getRepository ( 'AppBundle:ExtGramfoodkompow' )->find ( $id );
		
		if (! $entity) {
			throw $this->createNotFoundException ( 'Unable to find ExtGramfoodkompow entity.' );
		}
		
		$deleteForm = $this->createDeleteForm ( $id );
		
		return $this->render ( 'AppBundle:ExtGramfoodkompow:show.html.twig', array (
				'entity' => $entity,
				'delete_form' => $deleteForm->createView () 
		) );
	}
	
	/**
	 * Displays a form to edit an existing ExtGramfoodkompow entity.
	 */
	public function editAction($id) {
		$em = $this->getDoctrine ()->getManager ();
		
		$entity = $em->getRepository ( 'AppBundle:ExtGramfoodkompow' )->find ( $id );
		
		if (! $entity) {
			throw $this->createNotFoundException ( 'Unable to find ExtGramfoodkompow entity.' );
		}
		
		$editForm = $this->createEditForm ( $entity );
		$deleteForm = $this->createDeleteForm ( $id );
		
		return $this->render ( 'AppBundle:ExtGramfoodkompow:edit.html.twig', array (
				'entity' => $entity,
				'edit_form' => $editForm->createView (),
				'delete_form' => $deleteForm->createView () 
		) );
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
				'action' => $this->generateUrl ( 'table_update', array (
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
	 * Edits an existing ExtGramfoodkompow entity.
	 */
	public function updateAction(Request $request, $id) {
		$em = $this->getDoctrine ()->getManager ();
		
		$entity = $em->getRepository ( 'AppBundle:ExtGramfoodkompow' )->find ( $id );
		
		if (! $entity) {
			throw $this->createNotFoundException ( 'Unable to find ExtGramfoodkompow entity.' );
		}
		
		$deleteForm = $this->createDeleteForm ( $id );
		$editForm = $this->createEditForm ( $entity );
		$editForm->handleRequest ( $request );
		
		if ($editForm->isValid ()) {
			$em->flush ();
			
			return $this->redirect ( $this->generateUrl ( 'table_edit', array (
					'id' => $id 
			) ) );
		}
		
		return $this->render ( 'AppBundle:ExtGramfoodkompow:edit.html.twig', array (
				'entity' => $entity,
				'edit_form' => $editForm->createView (),
				'delete_form' => $deleteForm->createView () 
		) );
	}
	/**
	 * Deletes a ExtGramfoodkompow entity.
	 */
	public function deleteAction(Request $request, $id) {
		$form = $this->createDeleteForm ( $id );
		$form->handleRequest ( $request );
		
		if ($form->isValid ()) {
			$em = $this->getDoctrine ()->getManager ();
			$entity = $em->getRepository ( 'AppBundle:ExtGramfoodkompow' )->find ( $id );
			
			if (! $entity) {
				throw $this->createNotFoundException ( 'Unable to find ExtGramfoodkompow entity.' );
			}
			
			$em->remove ( $entity );
			$em->flush ();
		}
		
		return $this->redirect ( $this->generateUrl ( 'table' ) );
	}
	
	/**
	 * Creates a form to delete a ExtGramfoodkompow entity by id.
	 *
	 * @param mixed $id
	 *        	The entity id
	 *        	
	 * @return \Symfony\Component\Form\Form The form
	 */
	private function createDeleteForm($id) {
		return $this->createFormBuilder ()->setAction ( $this->generateUrl ( 'table_delete', array (
				'id' => $id 
		) ) )->setMethod ( 'DELETE' )->add ( 'submit', 'submit', array (
				'label' => 'Delete' 
		) )->getForm ();
	}
}
