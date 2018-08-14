<?php

namespace Gramfood\loginBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\SecurityContext;

class DefaultController extends Controller
{
    public function loginAction()
    {
    	{
    		$request = $this->getRequest();
    		$session = $request->getSession();
    		
    		# pobranie informacji o bledach logowania
    		if ($request->attributes->has(SecurityContext::AUTHENTICATION_ERROR))
    		{
    			$error = $request->attributes->get(SecurityContext::AUTHENTICATION_ERROR);
    		}
    		else
    		{
    			$error = $session->get(SecurityContext::AUTHENTICATION_ERROR);
    			$session->remove(SecurityContext::AUTHENTICATION_ERROR);
    		}
    		
    		return $this->render(
    				'GramfoodloginBundle:Default:login.html.twig',
    				array(
    						'last_username' => $session->get(SecurityContext::LAST_USERNAME),
    						'error' => $error
    				));
    	}
    	
    	
    	
//     	return $this->render('GramfoodloginBundle:Default:login.html.twig');
    }
}
