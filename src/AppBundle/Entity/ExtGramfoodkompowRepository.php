<?php

namespace AppBundle\Entity;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Query\ResultSetMapping;


/**
 * ExtGramfoodkompowRepository
 *
 */
class ExtGramfoodkompowRepository extends EntityRepository {

     /**
     * @return string
     */
    public function findToExt($idKpl)
    {
        //$em = $this->entityManager->createQueryBuilder();
        $em = $this->getEntityManager()->createQueryBuilder();
       // $em = $this->getDoctrine()->entityManager->createQueryBuilder();
        $em
        ->select('d', 'e')
        ->from('AppBundle\Entity\Gramfoodklembowdok', 'd')
        ->leftJoin('AppBundle\Entity\ExtGramfoodkompow', 'e', \Doctrine\ORM\Query\Expr\Join::WITH, 'd.id = e.idkpl')
        ->where('d.typ like \'KPL\' ')
        ->orderBy('d.id', 'DESC');
        
        return $em->getQuery()->getResult();

    }
}
