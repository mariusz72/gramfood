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
        ->addSelect('s')
        ->from('AppBundle\Entity\Gramfoodklembowspec', 's')
        ->where('s.kod = :kod ')
        ->andWhere('s.typ = \'ZAT\' OR s.typ = \'PW\' ')
        ->setParameter('kod', $kod)
        ->orderBy('s.id', 'ASC');
        
        return $em->getQuery()->getResult();
        
    }
    
}
