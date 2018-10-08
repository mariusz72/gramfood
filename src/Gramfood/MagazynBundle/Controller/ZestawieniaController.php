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
	public function listaWZkodAction($kod) {
		
		
		$em = $this->getDoctrine ()->getManager ();
		
		$entities = $em->getRepository ( 'AppBundle:Gramfoodklembowspec' )->findBy (
				array (	'typ' => 'WZ', 'kod' => $kod, 'akt' => 'T', 'anul' => 'N'),
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
				array (	'ostr' => 'DESC'));
		
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
	
	/**
	 * Lists all WZ entities.
	 */
	public function listaPZkodAction($kod) {
		
		
		$em = $this->getDoctrine ()->getManager ();
		
		$entities = $em->getRepository ( 'AppBundle:Gramfoodklembowspec' )->findBy (
				array (	'typ' => 'ZAT', 'kod' => $kod, 'akt' => 'T', 'anul' => 'N'),
				array (	'id' => 'ASC'));
		
		return $this->render ( 'GramfoodMagazynBundle:Zestawienia:listaPZ.html.twig', array (
				'entities' => $entities
		) );
		
	}
	
	private function listaEXTzKPL($idkpl) {
		$em = $this->getDoctrine ()->getManager ();
	//	$lista = $em->getRepository ( 'AppBundle:ExtGramfoodkompow' )->findBy (array (	'idkpl' => $idkpl));
		$lista = $em->getRepository ( 'AppBundle:ExtGramfoodkompow' )->findSkladnikiKompletacjiByKPL ($idkpl);
		return $lista;
	}
	
	private function listaRW($idpw, $tryb, $idkpl_zEXT = NULL) {
		$em = $this->getDoctrine ()->getManager ();
		if($tryb == 2){
			$item = $em->getRepository ( 'AppBundle:Gramfoodklembowspec' )->findBy (array (	'id' => $idpw));
			$idpw = $item[0]->getIdf();
		}
		$idkpl = $em->getRepository ( 'AppBundle:Gramfoodklembowdok' )->findBy (array (	'bank' => $idpw));
		
		$idRWzEXT = $this->listaEXTzKPL($idkpl_zEXT);
		
		
		if(isset($idRWzEXT[0])){
    			$idrwEXT = $idRWzEXT[0]->getId();
		}else{
		    $idrwEXT = 'S.BRAK';
		}
		
		$lista = $em->getRepository ( 'AppBundle:ExtGramfoodkompow' )->findSkladnikiKompletacjiByKPL ($idkpl[0]->getId(), $idrwEXT);
		
		return $lista;
	}
	
	private function listaRWzKPL($idkpl) {
		$em = $this->getDoctrine ()->getManager ();
		$lista = $em->getRepository ( 'AppBundle:ExtGramfoodkompow' )->findSkladnikiKompletacjiByKPL ($idkpl);
		return $lista;
	}
	
	private function listaPZzRW($idrw) {
		$em = $this->getDoctrine ()->getManager ();
		$lista = $em->getRepository ( 'AppBundle:ExtGramfoodkompow' )->findBy (array ('idrw' => $idrw));
		$lista_out = array();
		
		foreach ($lista as $key => $item) {
			$lista_spec = $em->getRepository ( 'AppBundle:Gramfoodklembowspec' )->findBy (array ('id' => $item->getIdpz()));
			array_push($lista_out, array('id' => $item->getIdpz(), 
										'il'  => $item->getIl(),
										'nazw'  => $lista_spec[0]->getNazw(),
										'kod'  => $item->getKod(),
										'jm'  => $item->getJm(),
										'nrr'  => $lista_spec[0]->getNrr(),
										'data'  => $lista_spec[0]->getData(),
										'dwaz'  => $lista_spec[0]->getDwaz(),
										'alias'  => $lista_spec[0]->getAlias(),
										'sn'  => $lista_spec[0]->getSn()
			));
		}
		
		return $lista_out;
	}
	
	private function tworzTablice($idpw, $tryb = 1, $idkpl = 1 ) {
		$listaRW = $this->listaRW($idpw, $tryb, $idkpl);
		$tablicaPowiazan = array();
		
		foreach ($listaRW as $keyRW => $itemRW) {
			$tablicaPowiazan[$keyRW][0] = $itemRW;
			$listaPZ = $this->listaPZzRW($itemRW->getId());
			
// 			foreach ($listaPZ as $keyPZ => $itemPZ) {
// 				if(preg_match("/^PW/i", $itemPZ->getIdpz() )){
// 					$tablicaPowiazan[$keyRW][1][$keyPZ] = $itemPZ->getIdpz();
// 					$tablicaPowiazan[$keyRW][1][$keyPZ+1] = $this->tworzTablice($itemPZ->getIdpz(),2);
// 					//$tablicaPowiazan[$keyRW][][$keyPZ][0] =  $this->tworzTablice($itemPZ->getIdpz(),2);
// 					//$tablicaPowiazan[$keyRW][][$keyPZ] = $itemPZ->getIdpz();
// 				}else{
// 					$tablicaPowiazan[$keyRW][1][$keyPZ] = $itemPZ;
// 				};
// 			};
			
			foreach ($listaPZ as $keyPZ => $itemPZ) {
				if(preg_match("/^PW/i", $itemPZ['id'] )){
					$tablicaPowiazan[$keyRW][1][$keyPZ] = $itemPZ;
					$tablicaPowiazan[$keyRW][1][$keyPZ+1] = $this->tworzTablice($itemPZ['id'],2, $idkpl);
					//$tablicaPowiazan[$keyRW][][$keyPZ][0] =  $this->tworzTablice($itemPZ->getIdpz(),2);
					//$tablicaPowiazan[$keyRW][][$keyPZ] = $itemPZ->getIdpz();
				}else{
					$tablicaPowiazan[$keyRW][1][$keyPZ] = $itemPZ;
				};
			};
			
			//	file_put_contents('/tmp/111_tablicaPowiazan.txt', print_r( $tablicaPowiazan , true));
			
		};
		return $tablicaPowiazan;
	}
	
	/**
	 * Lists all WZ entities.
	 */
	public function raportZKPLAction($idkpl, $idrw, $idpw) {

		$tablicaPowiazan2 = $this->tworzTablice($idpw, 1, $idkpl);
		
		$em = $this->getDoctrine ()->getManager ();
		$produktPw = $em->getRepository ( 'AppBundle:Gramfoodklembowspec' )->findBy (array ('idf' => $idpw));
		
		return $this->render ( 'GramfoodMagazynBundle:Zestawienia:raportZKPL.html.twig', array (
				'tabelaPowiazan' => $tablicaPowiazan2,
				'produktPw' => $produktPw
		) );
		
		
	}

}
