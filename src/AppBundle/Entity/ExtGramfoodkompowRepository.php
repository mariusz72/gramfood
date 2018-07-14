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
        ->addSelect('d, e.idkpl')
        ->from('AppBundle\Entity\Gramfoodklembowdok', 'd')
   //     ->leftJoin('AppBundle\Entity\ExtGramfoodkompow', 'e', \Doctrine\ORM\Query\Expr\Join::WITH, 'd.id = e.idkpl')
        ->leftJoin('AppBundle\Entity\ExtGramfoodkompow', 'e', Join::WITH, 'd.id = e.idkpl')
        ->where('d.typ = \'KPL\' ')
        ->andWhere('d.akt = \'T\'')
     //   ->setMaxResults(3)
        ->orderBy('d.id', 'DESC');
        
        return $em->getQuery()->getResult();

    }
}
