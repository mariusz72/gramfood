<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class GramfoodklembowdokType extends AbstractType {
	/**
	 *
	 * @param FormBuilderInterface $builder        	
	 * @param array $options        	
	 */
	public function buildForm(FormBuilderInterface $builder, array $options) {
		$builder->add ( 'typ' )->add ( 'idk' )->add ( 'rejpar' )->add ( 'rejwz' )->add ( 'rejbok' )->add ( 'rejof' )->add ( 'rejzs' )->add ( 'rejpro' )->add ( 'alias' )->add ( 'alodb' )->add ( 'odb' )->add ( 'os' )->add ( 'gr' )->add ( 'nr' )->add ( 'rej' )->add ( 'rok' )->add ( 'mc' )->add ( 'nrr' )->add ( 'dwy' )->add ( 'dsp' )->add ( 'fp' )->add ( 'dni' )->add ( 'tpl' )->add ( 'dpl' )->add ( 'n0' )->add ( 'n1' )->add ( 'n2' )->add ( 'n3' )->add ( 'n4' )->add ( 'v1' )->add ( 'v2' )->add ( 'v4' )->add ( 'wart' )->add ( 'zap' )->add ( 'przedp' )->add ( 'koszt' )->add ( 'nb' )->add ( 'rab' )->add ( 'prrab' )->add ( 'status' )->add ( 'bank' )->add ( 'bankn' )->add ( 'banks' )->add ( 'nrk' )->add ( 'dwyk' )->add ( 'wsk' )->add ( 'wwart' )->add ( 'wal' )->add ( 'kurs' )->add ( 'przel' )->add ( 'nipx' )->add ( 'nip' )->add ( 'reg' )->add ( 'nazw' )->add ( 'nazw2' )->add ( 'kodp' )->add ( 'mias' )->add ( 'ulic' )->add ( 'adrk' )->add ( 'dnext' )->add ( 'cen' )->add ( 'wardo' )->add ( 'adrdo' )->add ( 'defn' )->add ( 'defni' )->add ( 'drozl' )->add ( 'zasob' )->add ( 'kwzat' )->add ( 'inf' )->add ( 'notk' )->add ( 'oswy' )->add ( 'osod' )->add ( 'ow' )->add ( 'uz' )->add ( 'te' )->add ( 'lat' )->add ( 'lon' )->add ( 'lok' )->add ( 'akt' )->add ( 'anul' )->add ( 'wers' )->add ( 'tem' )->add ( 'rejvko' )->add ( 'koszvm' )->add ( 'idno' )->add ( 'mail' )->add ( 'kraj' )->add ( 'zid' )->add ( 'dj' )->add ( 'ddn' )->add ( 'ow2' )->add ( 'ow3' )->add ( 't1' )->add ( 'nr2' );
	}
	
	/**
	 *
	 * @param OptionsResolverInterface $resolver        	
	 */
	public function setDefaultOptions(OptionsResolverInterface $resolver) {
		$resolver->setDefaults ( array (
				'data_class' => 'AppBundle\Entity\Gramfoodklembowdok' 
		) );
	}
	
	/**
	 *
	 * @return string
	 */
	public function getName() {
		return 'appbundle_gramfoodklembowdok';
	}
}
