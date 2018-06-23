<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Gramfoodklembowuzytak
 *
 * @ORM\Table(name="gramfoodklembowuzytak")
 * @ORM\Entity
 */
class Gramfoodklembowuzytak {
	/**
	 *
	 * @var string @ORM\Column(name="ID", type="string", length=50, nullable=false)
	 *      @ORM\Id
	 *      @ORM\GeneratedValue(strategy="IDENTITY")
	 */
	private $id;
	
	/**
	 *
	 * @var string @ORM\Column(name="Alias", type="string", length=50, nullable=true)
	 */
	private $alias;
	
	/**
	 *
	 * @var string @ORM\Column(name="Komp", type="string", length=100, nullable=true)
	 */
	private $komp;
	
	/**
	 * Get id
	 *
	 * @return string
	 */
	public function getId() {
		return $this->id;
	}
	
	/**
	 * Set alias
	 *
	 * @param string $alias        	
	 * @return Gramfoodklembowuzytak
	 */
	public function setAlias($alias) {
		$this->alias = $alias;
		
		return $this;
	}
	
	/**
	 * Get alias
	 *
	 * @return string
	 */
	public function getAlias() {
		return $this->alias;
	}
	
	/**
	 * Set komp
	 *
	 * @param string $komp        	
	 * @return Gramfoodklembowuzytak
	 */
	public function setKomp($komp) {
		$this->komp = $komp;
		
		return $this;
	}
	
	/**
	 * Get komp
	 *
	 * @return string
	 */
	public function getKomp() {
		return $this->komp;
	}
}
