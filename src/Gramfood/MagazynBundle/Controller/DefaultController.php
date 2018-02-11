<?php

namespace Gramfood\MagazynBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Entity\Testowa;

class DefaultController extends Controller
{
    public function index_oldAction($name)
    {
        return $this->render('GramfoodMagazynBundle:Default:index.html.twig', array('name' => $name));
    }

    public function indexAction()
    {
        return $this->render('GramfoodMagazynBundle:Default:index.html.twig');
    }
	
    public function index2Action()
    {
        #return $this->render('GramfoodMagazynBundle:Default:index.html.twig');
		#return $this->render('gramfood/index.html.twig');
		
	# $product = new Testowa();
    # $product->setImie('Wiktor');
    # $product->setNazwisko('Kowalski');
    # $product->setWiek('44');

    # $em = $this->getDoctrine()->getManager();

    # $em->persist($product);
    # $em->flush();
		
		
		$product = $this->getDoctrine()
        ->getRepository('AppBundle:Testowa')
        ->findAll();

    if (!$product) {
        throw $this->createNotFoundException(
            'No product found for id 1'
        );
    }

		return $this->render('GramfoodMagazynBundle:Default:index2.html.twig', array(
        'product' => $product,
		));
		
    }	
	
    public function formAction()
    {
		return $this->render('gramfood/form.html.twig');
    }		
}
