<?php

namespace AppBundle\Entity;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Query\ResultSetMapping;

class GramfoodklembowspecRepository extends EntityRepository {

	public function findByNrser($kod = '', $sn = '') {
		
		$query = "SELECT a
					FROM AppBundle:Gramfoodklembowspec a
				  WHERE a.typ = 'PW' and a.kod = :kod and a.sn like :sn ";
		
		
		$wynik = $this->getEntityManager()->createQuery($query);
		$wynik->setParameter('kod', $kod);
		$wynik->setParameter('sn', $sn);
		
		return $query->getResult();
	}
}
