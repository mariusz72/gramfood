<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Gramfoodklembowdefs
 *
 * @ORM\Table(name="gramfoodklembowdefs")
 * @ORM\Entity
 */
class Gramfoodklembowdefs {
	/**
	 *
	 * @var string @ORM\Column(name="ID", type="string", length=50, nullable=false)
	 *      @ORM\Id
	 *      @ORM\GeneratedValue(strategy="IDENTITY")
	 */
	private $id;
	
	/**
	 *
	 * @var string @ORM\Column(name="Pole", type="string", length=50, nullable=true)
	 */
	private $pole;
	
	/**
	 *
	 * @var string @ORM\Column(name="Pole2", type="string", length=50, nullable=true)
	 */
	private $pole2;
	
	/**
	 *
	 * @var string @ORM\Column(name="Nazw", type="string", length=100, nullable=true)
	 */
	private $nazw;
	
	/**
	 *
	 * @var string @ORM\Column(name="Nazw2", type="string", length=250, nullable=true)
	 */
	private $nazw2;
	
	/**
	 *
	 * @var string @ORM\Column(name="Nazw3", type="string", length=100, nullable=true)
	 */
	private $nazw3;
	
	/**
	 *
	 * @var string @ORM\Column(name="Nazw4", type="text", length=16777215, nullable=true)
	 */
	private $nazw4;
	
	/**
	 *
	 * @var integer @ORM\Column(name="N1", type="integer", nullable=true)
	 */
	private $n1;
	
	/**
	 *
	 * @var integer @ORM\Column(name="N2", type="integer", nullable=true)
	 */
	private $n2;
	
	/**
	 *
	 * @var float @ORM\Column(name="F1", type="float", precision=10, scale=0, nullable=true)
	 */
	private $f1;
	
	/**
	 *
	 * @var float @ORM\Column(name="F2", type="float", precision=10, scale=0, nullable=true)
	 */
	private $f2;
	
	/**
	 *
	 * @var string @ORM\Column(name="Wsk", type="string", length=1, nullable=true)
	 */
	private $wsk;
	
	/**
	 *
	 * @var string @ORM\Column(name="Anul", type="string", length=1, nullable=true)
	 */
	private $anul;
	
	/**
	 *
	 * @var string @ORM\Column(name="Akt", type="string", length=1, nullable=true)
	 */
	private $akt;
	
	/**
	 *
	 * @var integer @ORM\Column(name="Wers", type="integer", nullable=true)
	 */
	private $wers;
	
	/**
	 *
	 * @var string @ORM\Column(name="DataL", type="string", length=50, nullable=true)
	 */
	private $datal;
	
	/**
	 * Get id
	 *
	 * @return string
	 */
	public function getId() {
		return $this->id;
	}
	
	/**
	 * Set pole
	 *
	 * @param string $pole        	
	 * @return Gramfoodklembowdefs
	 */
	public function setPole($pole) {
		$this->pole = $pole;
		
		return $this;
	}
	
	/**
	 * Get pole
	 *
	 * @return string
	 */
	public function getPole() {
		return $this->pole;
	}
	
	/**
	 * Set pole2
	 *
	 * @param string $pole2        	
	 * @return Gramfoodklembowdefs
	 */
	public function setPole2($pole2) {
		$this->pole2 = $pole2;
		
		return $this;
	}
	
	/**
	 * Get pole2
	 *
	 * @return string
	 */
	public function getPole2() {
		return $this->pole2;
	}
	
	/**
	 * Set nazw
	 *
	 * @param string $nazw        	
	 * @return Gramfoodklembowdefs
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
	 * Set nazw2
	 *
	 * @param string $nazw2        	
	 * @return Gramfoodklembowdefs
	 */
	public function setNazw2($nazw2) {
		$this->nazw2 = $nazw2;
		
		return $this;
	}
	
	/**
	 * Get nazw2
	 *
	 * @return string
	 */
	public function getNazw2() {
		return $this->nazw2;
	}
	
	/**
	 * Set nazw3
	 *
	 * @param string $nazw3        	
	 * @return Gramfoodklembowdefs
	 */
	public function setNazw3($nazw3) {
		$this->nazw3 = $nazw3;
		
		return $this;
	}
	
	/**
	 * Get nazw3
	 *
	 * @return string
	 */
	public function getNazw3() {
		return $this->nazw3;
	}
	
	/**
	 * Set nazw4
	 *
	 * @param string $nazw4        	
	 * @return Gramfoodklembowdefs
	 */
	public function setNazw4($nazw4) {
		$this->nazw4 = $nazw4;
		
		return $this;
	}
	
	/**
	 * Get nazw4
	 *
	 * @return string
	 */
	public function getNazw4() {
		return $this->nazw4;
	}
	
	/**
	 * Set n1
	 *
	 * @param integer $n1        	
	 * @return Gramfoodklembowdefs
	 */
	public function setN1($n1) {
		$this->n1 = $n1;
		
		return $this;
	}
	
	/**
	 * Get n1
	 *
	 * @return integer
	 */
	public function getN1() {
		return $this->n1;
	}
	
	/**
	 * Set n2
	 *
	 * @param integer $n2        	
	 * @return Gramfoodklembowdefs
	 */
	public function setN2($n2) {
		$this->n2 = $n2;
		
		return $this;
	}
	
	/**
	 * Get n2
	 *
	 * @return integer
	 */
	public function getN2() {
		return $this->n2;
	}
	
	/**
	 * Set f1
	 *
	 * @param float $f1        	
	 * @return Gramfoodklembowdefs
	 */
	public function setF1($f1) {
		$this->f1 = $f1;
		
		return $this;
	}
	
	/**
	 * Get f1
	 *
	 * @return float
	 */
	public function getF1() {
		return $this->f1;
	}
	
	/**
	 * Set f2
	 *
	 * @param float $f2        	
	 * @return Gramfoodklembowdefs
	 */
	public function setF2($f2) {
		$this->f2 = $f2;
		
		return $this;
	}
	
	/**
	 * Get f2
	 *
	 * @return float
	 */
	public function getF2() {
		return $this->f2;
	}
	
	/**
	 * Set wsk
	 *
	 * @param string $wsk        	
	 * @return Gramfoodklembowdefs
	 */
	public function setWsk($wsk) {
		$this->wsk = $wsk;
		
		return $this;
	}
	
	/**
	 * Get wsk
	 *
	 * @return string
	 */
	public function getWsk() {
		return $this->wsk;
	}
	
	/**
	 * Set anul
	 *
	 * @param string $anul        	
	 * @return Gramfoodklembowdefs
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
	 * Set akt
	 *
	 * @param string $akt        	
	 * @return Gramfoodklembowdefs
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
	 * Set wers
	 *
	 * @param integer $wers        	
	 * @return Gramfoodklembowdefs
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
	
	/**
	 * Set datal
	 *
	 * @param string $datal        	
	 * @return Gramfoodklembowdefs
	 */
	public function setDatal($datal) {
		$this->datal = $datal;
		
		return $this;
	}
	
	/**
	 * Get datal
	 *
	 * @return string
	 */
	public function getDatal() {
		return $this->datal;
	}
}
