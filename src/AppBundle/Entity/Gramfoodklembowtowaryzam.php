<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Gramfoodklembowtowaryzam
 *
 * @ORM\Table(name="gramfoodklembowtowaryzam")
 * @ORM\Entity
 */
class Gramfoodklembowtowaryzam {
	/**
	 *
	 * @var string @ORM\Column(name="ID", type="string", length=50, nullable=false)
	 *      @ORM\Id
	 *      @ORM\GeneratedValue(strategy="IDENTITY")
	 */
	private $id;
	
	/**
	 *
	 * @var string @ORM\Column(name="IDzam", type="string", length=50, nullable=true)
	 */
	private $idzam;
	
	/**
	 *
	 * @var string @ORM\Column(name="Kod", type="string", length=50, nullable=true)
	 */
	private $kod;
	
	/**
	 *
	 * @var string @ORM\Column(name="Nazw", type="string", length=255, nullable=true)
	 */
	private $nazw;
	
	/**
	 *
	 * @var string @ORM\Column(name="Kat", type="string", length=50, nullable=true)
	 */
	private $kat;
	
	/**
	 *
	 * @var string @ORM\Column(name="Pr", type="string", length=50, nullable=true)
	 */
	private $pr;
	
	/**
	 *
	 * @var string @ORM\Column(name="Dost", type="string", length=50, nullable=true)
	 */
	private $dost;
	
	/**
	 *
	 * @var float @ORM\Column(name="Ce", type="float", precision=10, scale=0, nullable=true)
	 */
	private $ce;
	
	/**
	 *
	 * @var string @ORM\Column(name="Akt", type="string", length=1, nullable=true)
	 */
	private $akt;
	
	/**
	 *
	 * @var string @ORM\Column(name="Anul", type="string", length=1, nullable=true)
	 */
	private $anul;
	
	/**
	 *
	 * @var integer @ORM\Column(name="Wers", type="integer", nullable=true)
	 */
	private $wers;
	
	/**
	 * Get id
	 *
	 * @return string
	 */
	public function getId() {
		return $this->id;
	}
	
	/**
	 * Set idzam
	 *
	 * @param string $idzam        	
	 * @return Gramfoodklembowtowaryzam
	 */
	public function setIdzam($idzam) {
		$this->idzam = $idzam;
		
		return $this;
	}
	
	/**
	 * Get idzam
	 *
	 * @return string
	 */
	public function getIdzam() {
		return $this->idzam;
	}
	
	/**
	 * Set kod
	 *
	 * @param string $kod        	
	 * @return Gramfoodklembowtowaryzam
	 */
	public function setKod($kod) {
		$this->kod = $kod;
		
		return $this;
	}
	
	/**
	 * Get kod
	 *
	 * @return string
	 */
	public function getKod() {
		return $this->kod;
	}
	
	/**
	 * Set nazw
	 *
	 * @param string $nazw        	
	 * @return Gramfoodklembowtowaryzam
	 */
	public function setNazw($nazw) {
		$this->nazw = $nazw;
		
		return $this;
	}
	
	/**
	 * Get nazw
	 *
	 * @return string
	 */
	public function getNazw() {
		return $this->nazw;
	}
	
	/**
	 * Set kat
	 *
	 * @param string $kat        	
	 * @return Gramfoodklembowtowaryzam
	 */
	public function setKat($kat) {
		$this->kat = $kat;
		
		return $this;
	}
	
	/**
	 * Get kat
	 *
	 * @return string
	 */
	public function getKat() {
		return $this->kat;
	}
	
	/**
	 * Set pr
	 *
	 * @param string $pr        	
	 * @return Gramfoodklembowtowaryzam
	 */
	public function setPr($pr) {
		$this->pr = $pr;
		
		return $this;
	}
	
	/**
	 * Get pr
	 *
	 * @return string
	 */
	public function getPr() {
		return $this->pr;
	}
	
	/**
	 * Set dost
	 *
	 * @param string $dost        	
	 * @return Gramfoodklembowtowaryzam
	 */
	public function setDost($dost) {
		$this->dost = $dost;
		
		return $this;
	}
	
	/**
	 * Get dost
	 *
	 * @return string
	 */
	public function getDost() {
		return $this->dost;
	}
	
	/**
	 * Set ce
	 *
	 * @param float $ce        	
	 * @return Gramfoodklembowtowaryzam
	 */
	public function setCe($ce) {
		$this->ce = $ce;
		
		return $this;
	}
	
	/**
	 * Get ce
	 *
	 * @return float
	 */
	public function getCe() {
		return $this->ce;
	}
	
	/**
	 * Set akt
	 *
	 * @param string $akt        	
	 * @return Gramfoodklembowtowaryzam
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
	 * @return Gramfoodklembowtowaryzam
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
	 * @return Gramfoodklembowtowaryzam
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
