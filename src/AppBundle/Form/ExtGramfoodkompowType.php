<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ExtGramfoodkompowType extends AbstractType {
	/**
	 *
	 * @param FormBuilderInterface $builder        	
	 * @param array $options        	
	 */
	public function buildForm(FormBuilderInterface $builder, array $options) {
		$builder->add ( 'kod')
		->add ( 'idkpl' )
		->add ( 'idrw' )
		->add ( 'idpz' )
		->add ( 'snpz' )
		->add ( 'il' )
		->add ( 'jm' )
// 		->add ( 'data', 'hidden' )
		->add ( 'uzyt', 'hidden' )
		->add('save', 'submit', array('label' => 'Zapisz zmiany'));
	}
	
	/**
	 *
	 * @param OptionsResolverInterface $resolver        	
	 */
	public function setDefaultOptions(OptionsResolverInterface $resolver) {
		$resolver->setDefaults ( array (
				'data_class' => 'AppBundle\Entity\ExtGramfoodkompow' 
		) );
	}
	
	/**
	 *
	 * @return string
	 */
	public function getName() {
		return 'appbundle_extgramfoodkompow';
	}
}
