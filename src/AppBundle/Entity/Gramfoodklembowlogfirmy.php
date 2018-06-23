<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Gramfoodklembowlogfirmy
 *
 * @ORM\Table(name="gramfoodklembowlogfirmy")
 * @ORM\Entity
 */
class Gramfoodklembowlogfirmy {
	/**
	 *
	 * @var integer @ORM\Column(name="ID", type="integer", nullable=false)
	 *      @ORM\Id
	 *      @ORM\GeneratedValue(strategy="IDENTITY")
	 */
	private $id;
	
	/**
	 *
	 * @var string @ORM\Column(name="data", type="string", length=20, nullable=true)
	 */
	private $data;
	
	/**
	 *
	 * @var string @ORM\Column(name="firma", type="string", length=50, nullable=true)
	 */
	private $firma;
	
	/**
	 *
	 * @var string @ORM\Column(name="uz", type="string", length=50, nullable=true)
	 */
	private $uz;
	
	/**
	 *
	 * @var string @ORM\Column(name="akt", type="string", length=1, nullable=true)
	 */
	private $akt;
	
	/**
	 *
	 * @var string @ORM\Column(name="anul", type="string", length=1, nullable=true)
	 */
	private $anul;
	
	/**
	 *
	 * @var integer @ORM\Column(name="wers", type="integer", nullable=true)
	 */
	private $wers;
	
	/**
	 * Get id
	 *
	 * @return integer
	 */
	public function getId() {
		return $this->id;
	}
	
	/**
	 * Set data
	 *
	 * @param string $data        	
	 * @return Gramfoodklembowlogfirmy
	 */
	public function setData($data) {
		$this->data = $data;
		
		return $this;
	}
	
	/**
	 * Get data
	 *
	 * @return string
	 */
	public function getData() {
		return $this->data;
	}
	
	/**
	 * Set firma
	 *
	 * @param string $firma        	
	 * @return Gramfoodklembowlogfirmy
	 */
	public function setFirma($firma) {
		$this->firma = $firma;
		
		return $this;
	}
	
	/**
	 * Get firma
	 *
	 * @return string
	 */
	public function getFirma() {
		return $this->firma;
	}
	
	/**
	 * Set uz
	 *
	 * @param string $uz        	
	 * @return Gramfoodklembowlogfirmy
	 */
	public function setUz($uz) {
		$this->uz = $uz;
		
		return $this;
	}
	
	/**
	 * Get uz
	 *
	 * @return string
	 */
	public function getUz() {
		return $this->uz;
	}
	
	/**
	 * Set akt
	 *
	 * @param string $akt        	
	 * @return Gramfoodklembowlogfirmy
	 */
	public function setAkt($akt) {
		$this->akt = $akt;
		
		return $this;
	}
	
	/**
	 * Get akt
	 *
	 * @return string
	 */
	public function getAkt() {
		return $this->akt;
	}
	
	/**
	 * Set anul
	 *
	 * @param string $anul        	
	 * @return Gramfoodklembowlogfirmy
	 */
	public function setAnul($anul) {
		$this->anul = $anul;
		
		return $this;
	}
	
	/**
	 * Get anul
	 *
	 * @return string
	 */
	public function getAnul() {
		return $this->anul;
	}
	
	/**
	 * Set wers
	 *
	 * @param integer $wers        	
	 * @return Gramfoodklembowlogfirmy
	 */
	public function setWers($wers) {
		$this->wers = $wers;
		
		return $this;
	}
	
	/**
	 * Get wers
	 *
	 * @return integer
	 */
	public function getWers() {
		return $this->wers;
	}
}
