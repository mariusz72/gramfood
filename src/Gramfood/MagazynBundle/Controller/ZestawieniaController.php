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
	
    private $oddata = '0';
    
	/**
     * @return string
     */
    public function getOddata()
    {
        return $this->oddata;
    }

    /**
     * @param mixed $oddata
     */
    public function setOddata()
    {
        if($this->container->hasParameter('oddata')){
            $this->oddata = $this->container->getParameter('oddata');
        }else{
            $this->oddata = '0';
        };
        return $this;
    }

    /**
	 * Lists all WZ entities.
	 */	
	public function listaWZAction() {
		

			$em = $this->getDoctrine ()->getManager ();

	//		$entities = $em->getRepository ( 'AppBundle:Gramfoodklembowspec' )->findBy ( 
	//		    array (	'typ' => array('VAT', 'WZ'), 'akt' => 'T', 'anul' => 'N'),
	//				array (	'id' => 'ASC')
	//		    );

			$query = $em->createQuery('
                SELECT s
                FROM AppBundle:Gramfoodklembowspec s
                WHERE s.typ in ( \'VAT\', \'WZ\') 
                    AND s.data > \''.$this->setOddata()->getOddata().'\'
                    AND s.akt = \'T\'
                    AND s.anul = \'N\'
            ') ;
			
			$entities =  $query->getResult();
			
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
				array (	'typ' => array('VAT', 'WZ'), 'kod' => $kod, 'akt' => 'T', 'anul' => 'N'),
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
		
	//	$entities = $em->getRepository ( 'AppBundle:Gramfoodklembowspec' )->findBy (
	//			array (	'typ' => 'PW', 'akt' => 'T', 'anul' => 'N'),
	//			array (	'id' => 'ASC'));
		
		$entities = $em->getRepository ( 'AppBundle:ExtGramfoodkompow' )
		->setOddata($this->setOddata()->getOddata())
		->listaPwSql();
		
	//	$entities = $em->getRepository ( 'AppBundle:Viewgramfoodklembowspecil' )->findBy (array ('data' => '>20180814'));
	
		// wyszukanie sn i dodanie do entity
	//	foreach ($entities as $key => $item) {
	//	    $lista_spec = $em->getRepository ( 'AppBundle:Gramfoodklembowspec' )->findBy (array ('id' => $item['id']));
	//	    $entities[$key]['sn'] = $lista_spec[0]->getSn();
	//	}
		
	//	file_put_contents('c:\Users\PC\Documents\111_tablicaPowiazan.txt', print_r($entities , true));
		
		return $this->render ( 'GramfoodMagazynBundle:Zestawienia:listaPW.html.twig', array (
				'entities' => $entities
		) );
		
	}
	
	/**
	 * Lists all WZ entities.
	 */
	public function listaPZAction() {
		
		
		$em = $this->getDoctrine ()->getManager ();
		
	//	$entities = $em->getRepository ( 'AppBundle:Gramfoodklembowspec' )->findBy (
	//	    array (	'typ' => array('ZAT', 'PZ', 'VRR'), 'akt' => 'T', 'anul' => 'N'),
	//			array (	'id' => 'ASC'));
		
		$entities = $em->getRepository ( 'AppBundle:ExtGramfoodkompow' )
		               ->setOddata($this->setOddata()->getOddata())
		               ->listaPzSql();
	// dopisanie nr seryjnego - obejscie problemu grupowania po typie 'text'	  
// 		               foreach ($entities as $key => $item) {
// 		                   $lista_spec = $em->getRepository ( 'AppBundle:Gramfoodklembowspec' )->findBy (array ('id' => $item['id']));
// 		                     $entities[$key]['sn'] = $lista_spec[0]->getSn();
// 		               }
		               
		
		return $this->render ( 'GramfoodMagazynBundle:Zestawienia:listaPZ.html.twig', array (
				'entities' => $entities
		) );
		
	}
	
	/**
	 * Lists all WZ entities.
	 */
	public function listaPZkodAction($kod) {
		
		
		$em = $this->getDoctrine ()->getManager ();
		
// 		$entities = $em->getRepository ( 'AppBundle:Gramfoodklembowspec' )->findBy (
// 		    array (	'typ' => array('ZAT', 'PZ', 'VRR'), 'kod' => $kod, 'akt' => 'T', 'anul' => 'N'),
// 				array (	'id' => 'ASC'));

		$entities = $em->getRepository ( 'AppBundle:ExtGramfoodkompow' )
		->setOddata($this->setOddata()->getOddata())
		->listaPzKodSql($kod);
		
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

	//		foreach ($listaPZ as $keyPZ => $itemPZ) {
	//		    if(preg_match("/^PW/i", $itemPZ['id'] )){
	//		        $tablicaPowiazan[$keyRW][1][$keyPZ] = $itemPZ;
	//		        $tablicaPowiazan[$keyRW][1][$keyPZ+1] = $this->tworzTablice($itemPZ['id'],2, $idkpl);
	//		        file_put_contents('/tmp/111_tablicaPowiazan_'.$itemPZ['id'].'.txt', print_r( $tablicaPowiazan , true));
	//		        //$tablicaPowiazan[$keyRW][][$keyPZ][0] =  $this->tworzTablice($itemPZ->getIdpz(),2);
	//		        //$tablicaPowiazan[$keyRW][][$keyPZ] = $itemPZ->getIdpz();
	//		    }else{
	//		        $tablicaPowiazan[$keyRW][1][$keyPZ] = $itemPZ;
	//		    };
	//		};
			
			
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
	public function raportZKPLAction($idkpl, $idrw, $idpw, $typ) {

		$tablicaPowiazan2 = $this->tworzTablice($idpw, 1, $idkpl);
		
		if($typ == 1){
		    $file_twig = 'GramfoodMagazynBundle:Zestawienia:raportZKPLshort.html.twig';
		}else {
		    $file_twig = 'GramfoodMagazynBundle:Zestawienia:raportZKPL.html.twig';
		};
		
		$em = $this->getDoctrine ()->getManager ();
		$produktPw = $em->getRepository ( 'AppBundle:Gramfoodklembowspec' )->findBy (array ('idf' => $idpw));
		
		return $this->render ( $file_twig, array (
				'tabelaPowiazan' => $tablicaPowiazan2,
				'produktPw' => $produktPw
		) );
		
		
	}
	
	/**
	 * Lista rozchodow dla Idpz
	 */
	public function listaRozchodowAction($id) {
	    
	    $tablicaPw = array();
	    $em = $this->getDoctrine ()->getManager ();
	    
	    $produktPz = $em->getRepository ( 'AppBundle:Gramfoodklembowspec' )->findBy (
	        array (	'id' => $id, 'akt' => 'T', 'anul' => 'N'),
	        array (	'id' => 'ASC'));
	    
// 	    $entities_kpl = $em->getRepository ( 'AppBundle:ExtGramfoodkompow' )->findBy (
// 	        array (	'idpz' => $id));
	    
// 	    foreach ($entities_kpl as $key => $item) {
// 	        $kpl = $em->getRepository ( 'AppBundle:Gramfoodklembowdok' )->findBy (
// 	            array (	'id' => $item->getIdkpl()));
	        
// 	        $entitiesPw = $em->getRepository ( 'AppBundle:Gramfoodklembowspec' )->findBy (
// 	            array (	'idf' => $kpl[0]->getBank(), 'akt' => 'T', 'anul' => 'N'),
// 	            array (	'id' => 'ASC'));
	   
// 	        $tablicaPw[$key] = $entitiesPw;
// 	    }
	    
	    
	    $query = $em->createQuery('

 	    SELECT e.idrw, e.idkpl, e.idpz, s.idf, s.id, s.nazw, e.il, s.sn
 	    FROM AppBundle:ExtGramfoodkompow e
 	    LEFT JOIN AppBundle:Gramfoodklembowdok d WITH (d.id = e.idkpl)
 	    LEFT JOIN AppBundle:Gramfoodklembowspec s WITH (s.idf = d.bank and s.typ = \'PW\' and s.akt = \'T\' and s.anul = \'N\')
 	    WHERE (e.idpz = \''.$id.'\' and s.data > \''.$this->setOddata()->getOddata().'\')

            ') ;
	    
	    $tablicaPw =  $query->getResult();
	    
// 	    SELECT e.IDrw, e.IDkpl, e.IDpz, s.IDf, s.ID, s.Nazw, e.il, s.sn
// 	    FROM [gramfood].[dbo].[ext_gramfoodkompow] e
// 	    LEFT JOIN [gramfood].[dbo].[gramfoodklembowdok] d ON (d.id = e.IDkpl)
// 	    LEFT JOIN [gramfood].[dbo].[gramfoodklembowspec] s ON (s.idf = d.Bank and s.typ = 'PW' and s.Akt = 'T' and s.Anul = 'N')
// 	    WHERE (e.IDpz = 'PZ.180116.141808.AE7698')

	    
	    return $this->render ( 'GramfoodMagazynBundle:Zestawienia:raportRozchodow.html.twig', array (
	        'produktPz' => $produktPz,
	        'listaPw' => $tablicaPw
	    ) );
	    
	}

}
