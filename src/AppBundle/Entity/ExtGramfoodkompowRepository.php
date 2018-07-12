<?php

namespace AppBundle\Entity;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Query\ResultSetMapping;

/**
 * ExtGramfoodkompowRepository
 *
 */
class ExtGramfoodkompowRepository {

     /**
     * @return string
     */
    public function findToExt($idKpl)
    {
        return $idKpl;
    }
}
