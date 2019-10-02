<?php

namespace AppBundle\Entity;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Query\ResultSetMapping;
use Doctrine\ORM\Query\Expr\Join;


/**
 * ExtGramfoodkompowRepository
 *
 */
class ExtGramfoodkompowRepository extends EntityRepository {

    private $oddata = null;
    /**
     * @return mixed
     */
    public function getOddata()
    {
        return $this->oddata;
    }

    /**
     * @param mixed $oddata
     */
    public function setOddata($oddata)
    {
        $this->oddata = $oddata;
        return $this;
    }

    /**
     * @return string
     */
    public function listaPzSql()
    {
//         $em = $this->getEntityManager()->createQueryBuilder();
//         $em
//         ->addSelect('s.id, s.typ, s.nrr, s.idf, s.idwz, s.idpz, s.data, s.alias, s.kod, s.nazw, s.il, s.jm, s.kat, \'ss\' as sn, s.dwaz, SUM(e.il) as sumk')
//         ->from('AppBundle\Entity\Gramfoodklembowspec', 's')
//         ->leftJoin('AppBundle\Entity\ExtGramfoodkompow', 'e', Join::WITH, 's.id = e.idpz')
//         ->where('s.typ = \'PZ\' OR s.typ = \'ZAT\' OR s.typ = \'VRR\' ')
//         ->andWhere('s.akt = \'T\'')
//         ->andWhere('s.anul = \'N\'')
//         ->andWhere('s.data > \''.$this->getOddata().'\'')
//         ->groupBy('s.id, s.typ, s.nrr, s.idf, s.idwz, s.idpz, s.data, s.alias, s.kod, s.nazw, s.il, s.jm, s.kat, s.dwaz');

       
        $em = $this->getEntityManager()->createQueryBuilder();
        $em
        ->addSelect('s.id, s.typ, s.nrr, s.idf, s.idwz, s.idpz, s.data, s.alias, s.kod, s.nazw, s.il, s.jm, s.kat, s.sn, s.dwaz, s.sumk, s.sumwz')
        ->from('AppBundle:Viewgramfoodklembowspecil', 's')
        ->where('s.typ = \'PZ\' OR s.typ = \'ZAT\' OR s.typ = \'VRR\' ')
        ->andWhere('s.akt = \'T\'')
        ->andWhere('s.anul = \'N\'')
        ->andWhere('s.data > \''.$this->getOddata().'\'')
        ->orderBy('s.id', 'ASC');
        
        return $em->getQuery()->getResult();
 
    }
    
    /**
     * @return string
     */
    public function listaPzKodSql($kod)
    {
        $em = $this->getEntityManager()->createQueryBuilder();
        $em
        ->addSelect('s.id, s.typ, s.nrr, s.idf, s.idwz, s.idpz, s.data, s.alias, s.kod, s.nazw, s.il, s.jm, s.kat, s.sn, s.dwaz, s.sumk, s.sumwz')
        ->from('AppBundle:Viewgramfoodklembowspecil', 's')
        ->where('s.typ = \'PZ\' OR s.typ = \'ZAT\' OR s.typ = \'VRR\' ')
        ->andWhere('s.akt = \'T\'')
        ->andWhere('s.anul = \'N\'')
        ->andWhere('s.kod = \''.$kod.'\'')
        ->andWhere('s.data > \''.$this->getOddata().'\'')
        ->orderBy('s.id', 'ASC');
        
        return $em->getQuery()->getResult();
        
    }
    
    /**
     * @return string
     */
    public function listaPwSql()
    {
        
//         $em = $this->getEntityManager()->createQueryBuilder();
//         $em
//         ->addSelect('s.id, s.typ, s.nrr, s.idf, s.idwz, s.idpz, s.data, s.alias, s.kod, s.nazw, s.il, s.jm, s.kat, MAX(SUBSTRING(s.sn,1,100)) as sn, s.dwaz, SUM(e.il) as sumk, SUM(s2.il) as sumwz')
//         ->from('AppBundle\Entity\Gramfoodklembowspec', 's')
//         ->leftJoin('AppBundle\Entity\ExtGramfoodkompow', 'e', Join::WITH, 's.id = e.idpz')
//         ->leftJoin('AppBundle\Entity\Gramfoodklembowspec', 's2', Join::WITH, '(s.sn like s2.sn and s2.typ in (\'VAT\', \'WZ\'))  ')
//         ->where('s.typ = \'PW\' ')
//         ->andWhere('s.akt = \'T\'')
//         ->andWhere('s.anul = \'N\'')
//         ->andWhere('s.data > \''.$this->getOddata().'\'')
//         ->orderBy('s.id', 'ASC')
//         ->groupBy('s.id, s.typ, s.nrr, s.idf, s.idwz, s.idpz, s.data, s.alias, s.kod, s.nazw, s.il, s.jm, s.kat, s.dwaz');

        $em = $this->getEntityManager()->createQueryBuilder();
        $em
        ->addSelect('s.id, s.typ, s.nrr, s.idf, s.idwz, s.idpz, s.data, s.alias, s.kod, s.nazw, s.il, s.jm, s.kat, s.sn, s.dwaz, s.sumk, s.sumwz')
        ->from('AppBundle:Viewgramfoodklembowspecil', 's')
        ->where('s.typ = \'PW\' ')
        ->andWhere('s.akt = \'T\'')
        ->andWhere('s.anul = \'N\'')
        ->andWhere('s.data > \''.$this->getOddata().'\'')
        ->orderBy('s.id', 'ASC');

        
//      $em = $this->getEntityManager();
//      $query = $em->createQuery(
//           'SELECT s2.il as sumwz, e.il as sumk, s.id, s.typ, s.nrr, s.idf, s.idwz, s.idpz, s.data, s.alias, s.kod, s.nazw, s.il, s.sn, s.jm, s.kat, s.dwaz
//             FROM AppBundle:Gramfoodklembowspec s
//                  LEFT JOIN
//                (
//                  SELECT sum(s.il) as il, s.sn
//                   FROM AppBundle:Gramfoodklembowspec s WHERE s.typ in (\'VAT\', \'WZ\')
//                 group by (s.sn)
//                ) s2 ON (s.sn like s2.sn)
//                 LEFT JOIN
//               (
//                 SELECT sum(e.il) as il , e.SNpz, e.IDpz FROM AppBundle:Gramfoodklembowdok e WHERE 1=1 GROUP BY e.SNpz, e.IDpz
//               ) e ON (s.ID = e.IDpz )
//                 WHERE s.Data > 20180101 and s.typ in (\'PW\')
//            ');
//      return $query->getResult();
      //  file_put_contents('c:\Users\PC\Documents\111_tablicaPowiazan.txt', print_r(  $query->getSQL() , true));
  
     
       return $em->getQuery()->getResult();
        
    }

    
    
    /**
     * @return string
     */
    public function listaRwSql()
    {
        
        $em = $this->getEntityManager()->createQueryBuilder();
        $em
        ->addSelect('s.id, s.typ, s.nrr, s.idf, s.idwz, s.idpz, s.data, s.alias, s.kod, s.nazw, s.il, s.jm, s.kat, s.sn, s.dwaz, d.id as idkpl')
        ->from('AppBundle:Gramfoodklembowspec', 's')
        ->leftJoin('AppBundle\Entity\Gramfoodklembowdok', 'd', Join::WITH, 'd.rejpro = s.nrr')
        ->where('s.typ = \'RW\' ')
        ->andWhere('s.akt = \'T\'')
        ->andWhere('s.anul = \'N\'')
        ->andWhere('s.data > \''.$this->getOddata().'\'')
        ->orderBy('s.id', 'ASC');
        
        //file_put_contents('c:\Users\PC\Documents\111_RW.txt', print_r( $em->getQuery()->getResult() , true));
        
        return $em->getQuery()->getResult();
        
    }
    
     /**
     * @return string
     */
    public function findToExt()
    {
        //$em = $this->entityManager->createQueryBuilder();
        $em = $this->getEntityManager()->createQueryBuilder();
       // $em = $this->getDoctrine()->entityManager->createQueryBuilder();
        $em
        ->addSelect('d, e.idkpl, e.idrw')
        ->from('AppBundle\Entity\Gramfoodklembowdok', 'd')
   //     ->leftJoin('AppBundle\Entity\ExtGramfoodkompow', 'e', \Doctrine\ORM\Query\Expr\Join::WITH, 'd.id = e.idkpl')
        ->leftJoin('AppBundle\Entity\ExtGramfoodkompow', 'e', Join::WITH, 'd.id = e.idkpl')
        ->where('d.typ = \'KPL\' ')
        ->andWhere('d.akt = \'T\'')
        ->andWhere('d.id LIKE \'KPL.%\'')
     //   ->setMaxResults(3)
        ->orderBy('d.id', 'DESC');
        
        return $em->getQuery()->getResult();

    }
    
    /**
     * @return string
     */
    public function findToExt_zPZ($arrayKPL)
    {
    	//$em = $this->entityManager->createQueryBuilder();
    	$em = $this->getEntityManager()->createQueryBuilder();
    	// $em = $this->getDoctrine()->entityManager->createQueryBuilder();
    	$em
    	->addSelect('d, e.idkpl, e.idrw')
    	->from('AppBundle\Entity\Gramfoodklembowdok', 'd')
    	//     ->leftJoin('AppBundle\Entity\ExtGramfoodkompow', 'e', \Doctrine\ORM\Query\Expr\Join::WITH, 'd.id = e.idkpl')
    	->leftJoin('AppBundle\Entity\ExtGramfoodkompow', 'e', Join::WITH, 'd.id = e.idkpl')
    	->where('d.typ = \'KPL\' ')
    	->andWhere('d.akt = \'T\'')
    	->andWhere('d.id LIKE \'KPL.%\'')
    	->andWhere('e.idkpl IN (:arrayKPL)')
    	->setParameter('arrayKPL', $arrayKPL)
    	//   ->setMaxResults(3)
    	->orderBy('d.id', 'DESC');
    	
    	return $em->getQuery()->getResult();
    	
    }
    
    /**
     * @return string
     */
    public function findRwExt($bankN)
    {
        //$em = $this->entityManager->createQueryBuilder();
        $em = $this->getEntityManager()->createQueryBuilder();
        $em
        ->addSelect('s, e.idrw')
        ->from('AppBundle\Entity\Gramfoodklembowspec', 's')
        ->leftJoin('AppBundle\Entity\ExtGramfoodkompow', 'e', Join::WITH, 's.id = e.idrw')
     //   ->where('s.idf = :bankN ')
        ->andWhere('s.idf = :bankN OR s.idwz = :bankN  ')
        ->setParameter('bankN', $bankN)
        ->orderBy('s.id', 'ASC');
        
        return $em->getQuery()->getResult();
        
    }
    
    /**
     * @return string
     */
    public function findToPw($sn, $kod)
    {
        $em = $this->getEntityManager()->createQueryBuilder();
        $em
        ->addSelect('s')
        ->from('AppBundle\Entity\Gramfoodklembowspec', 's')
        ->where('s.typ = \'PW\' ')
        ->andwhere('s.sn like :sn ')
        ->andwhere('s.kod = :kod ')
        ->setParameter('sn', $sn)
        ->setParameter('kod', $kod)
        ->orderBy('s.id', 'ASC');
        
        return $em->getQuery()->getResult();
        
    }
    
    /**
     * @return string
     */
    public function findToDok($bank)
    {
        $em = $this->getEntityManager()->createQueryBuilder();
        $em
        ->addSelect('d, e.idkpl, e.idrw')
        ->from('AppBundle\Entity\Gramfoodklembowdok', 'd')
        ->leftJoin('AppBundle\Entity\ExtGramfoodkompow', 'e', Join::WITH, 'd.id = e.idkpl')
        ->where('d.typ = \'KPL\' ')
        ->andWhere('d.akt = \'T\'')
        ->andWhere('d.anul = \'N\'')
        ->andWhere('d.id LIKE \'KPL.%\'')
        ->andwhere('d.bank = :bank ')
        ->setParameter('bank', $bank)
        ->orderBy('d.id', 'DESC');
        
        
        return $em->getQuery()->getResult();
        
    }
    
    /**
     * @return string
     */
    public function findByIdOr($bankN)
    {
        $em = $this->getEntityManager()->createQueryBuilder();
        $em
        ->addSelect('s')
        ->from('AppBundle\Entity\Gramfoodklembowspec', 's')
        ->andWhere('s.idf = :bankN OR s.idwz = :bankN ')
        ->setParameter('bankN', $bankN)
        ->orderBy('s.id', 'ASC');

        return $em->getQuery()->getResult();
        
    }
    
    /**
     * @return string
     */
    public function findByTypOr($kod)
    {
        $em = $this->getEntityManager()->createQueryBuilder();
        $em
 //       ->addSelect('s')
 //       ->from('AppBundle\Entity\Gramfoodklembowspec', 's')
 //       ->where('s.kod = :kod ')
 //       ->andWhere('s.typ = \'ZAT\' OR s.typ = \'PW\' OR s.typ = \'PZ\' OR s.typ = \'VRR\'')
 //       ->andWhere('s.data > \''.$this->getOddata().'\'')
 //       ->setParameter('kod', $kod)
 //       ->orderBy('s.id', 'ASC');
        
        
        ->addSelect('s.id, s.typ, s.nrr, s.idf, s.idwz, s.idpz, s.data, s.alias, s.kod, s.nazw, s.il, s.jm, s.kat, \'ss\' as sn, s.dwaz, SUM(e.il) as sumk')
        ->from('AppBundle\Entity\Gramfoodklembowspec', 's')
        //     ->leftJoin('AppBundle\Entity\ExtGramfoodkompow', 'e', \Doctrine\ORM\Query\Expr\Join::WITH, 'd.id = e.idkpl')
        ->leftJoin('AppBundle\Entity\ExtGramfoodkompow', 'e', Join::WITH, 's.id = e.idpz')
        //  array (	'typ' => array('ZAT', 'PZ', 'VRR'), 'akt' => 'T', 'anul' => 'N'),
        ->where('s.kod = :kod ')
        ->andWhere('s.typ = \'ZAT\' OR s.typ = \'PW\' OR s.typ = \'PZ\' OR s.typ = \'VRR\' ')
        ->andWhere('s.data > \''.$this->getOddata().'\'')
        ->setParameter('kod', $kod)
        ->groupBy('s.id, s.typ, s.nrr, s.idf, s.idwz, s.idpz, s.data, s.alias, s.kod, s.nazw, s.il, s.jm, s.kat, s.dwaz')
        ->orderBy('s.id', 'ASC');
        
        
        
        return $em->getQuery()->getResult();
        
    }
    
    /**
     * @return string
     */
    public function findSkladnikiKompletacjiByKPL_SPR($idkpl)
    {
        
        $em = $this->getEntityManager();
        $query1 = $em->createQuery(
                'SELECT s
			    FROM AppBundle:Gramfoodklembowspec s, AppBundle:Gramfoodklembowdok d
			    WHERE
					d.id = :idkpl AND
 				    (d.bankn = s.idwz OR d.bankn = s.idf)
    			ORDER BY s.id ASC'
                )->setParameter('idkpl', $idkpl);
                        
           return $query1->getResult();
                        
    }
    
    
    /**
     * @return string
     */
    public function findSkladnikiKompletacjiByKPL($idkpl, $idrw = NULL)
    {
//     	$em = $this->getEntityManager()->createQueryBuilder();
//     	$em
//     	->addSelect('s')
//     	->from('AppBundle\Entity\Gramfoodklembowspec', 's')
//     	->from('AppBundle\Entity\gramfoodklembowdok', 'd')
//     	->where('d.id = :idkpl ')
//     	->andWhere('d.bankn = s.idf')
//     	->setParameter('idkpl', $idkpl)
//     	->orderBy('s.id', 'ASC');
        
    	if(preg_match("/^S\./i", $idrw )){
    		$s_id = 's.idwz' ;
    	}else{
    		$s_id = 's.idf';
    	};

    	
    	$em = $this->getEntityManager();
    	$query = $em->createQuery(
    			'SELECT s
			    FROM AppBundle:Gramfoodklembowspec s, AppBundle:Gramfoodklembowdok d
			    WHERE 
					d.id = :idkpl AND
 				    d.bankn = '.$s_id.'
    			ORDER BY s.id ASC'
    			)->setParameter('idkpl', $idkpl);
    			
    		//	file_put_contents('/tmp/111_SQL.txt', print_r( $query->getSQL() , true));
    			
    			return $query->getResult();
    	
    //	return $em->getQuery()->getResult();
    	
    }
    
    /**
     * @return string
     */
    public function findByPZwExtSpec($idrw)
    {
    	
    	$em = $this->getEntityManager();
    	$query = $em->createQuery(
    			'SELECT s, e
			    FROM AppBundle:Gramfoodklembowspec s, AppBundle:ExtGramfoodkompow e
			    WHERE
					s.id = e.idpz AND
 					e.idrw = :idrw
			    ORDER BY s.id ASC'
    			)->setParameter('idrw', $idrw);
    
//     			$em = $this->getEntityManager()->createQueryBuilder();
//     			$em
//     			->addSelect('e, s')
//     			->from('AppBundle\Entity\Gramfoodklembowspec', 's')
//     			->leftJoin('AppBundle\Entity\ExtGramfoodkompow', 'e', Join::WITH, 's.id = e.idpz')
//     			->Where('e.idrw = :idrw ')
//     			->setParameter('idrw', $idrw)
//     			->orderBy('e.id', 'ASC');
    			
    			return $query->getResult();
    			
    			//	return $em->getQuery()->getResult();
    			
    }
    
}
