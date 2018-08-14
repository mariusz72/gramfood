<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Gramfoodklembowplatny
 *
 * @ORM\Table(name="gramfoodklembowplatny")
 * @ORM\Entity
 */
class Gramfoodklembowplatny {
	/**
	 *
	 * @var string @ORM\Column(name="ID", type="string", length=50, nullable=false)
	 *      @ORM\Id
	 *      @ORM\GeneratedValue(strategy="IDENTITY")
	 */
	private $id;
	
	/**
	 *
	 * @var string @ORM\Column(name="IDp", type="string", length=50, nullable=true)
	 */
	private $idp;
	
	/**
	 *
	 * @var string @ORM\Column(name="NrR", type="string", length=50, nullable=true)
	 */
	private $nrr;
	
	/**
	 *
	 * @var string @ORM\Column(name="Data", type="string", length=8, nullable=true)
	 */
	private $data;
	
	/**
	 *
	 * @var string @ORM\Column(name="RFp", type="string", length=10, nullable=true)
	 */
	private $rfp;
	
	/**
	 *
	 * @var string @ORM\Column(name="IDd", type="string", length=50, nullable=true)
	 */
	private $idd;
	
	/**
	 *
	 * @var string @ORM\Column(name="RejD", type="string", length=50, nullable=true)
	 */
	private $rejd;
	
	/**
	 *
	 * @var string @ORM\Column(name="IDza", type="string", length=50, nullable=true)
	 */
	private $idza;
	
	/**
	 *
	 * @var string @ORM\Column(name="Fak", type="string", length=50, nullable=true)
	 */
	private $fak;
	
	/**
	 *
	 * @var float @ORM\Column(name="Wart", type="float", precision=10, scale=0, nullable=true)
	 */
	private $wart;
	
	/**
	 *
	 * @var string @ORM\Column(name="Wal", type="string", length=10, nullable=true)
	 */
	private $wal;
	
	/**
	 *
	 * @var string @ORM\Column(name="UZ", type="string", length=50, nullable=true)
	 */
	private $uz;
	
	/**
	 *
	 * @var integer @ORM\Column(name="Lok", type="integer", nullable=true)
	 */
	private $lok;
	
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
	 *
	 * @var string @ORM\Column(name="Rejza", type="string", length=50, nullable=true)
	 */
	private $rejza;
	
	/**
	 *
	 * @var string @ORM\Column(name="Ki", type="string", length=5, nullable=true)
	 */
	private $ki;
	
	/**
	 * Get id
	 *
	 * @return string
	 */
	public function getId() {
		return $this->id;
	}
	
	/**
	 * Set idp
	 *
	 * @param string $idp        	
	 * @return Gramfoodklembowplatny
	 */
	public function setIdp($idp) {
		$this->idp = $idp;
		
		return $this;
	}
	
	/**
	 * Get idp
	 *
	 * @return string
	 */
	public function getIdp() {
		return $this->idp;
	}
	
	/**
	 * Set nrr
	 *
	 * @param string $nrr        	
	 * @return Gramfoodklembowplatny
	 */
	public function setNrr($nrr) {
		$this->nrr = $nrr;
		
		return $this;
	}
	
	/**
	 * Get nrr
	 *
	 * @return string
	 */
	public function getNrr() {
		return $this->nrr;
	}
	
	/**
	 * Set data
	 *
	 * @param string $data        	
	 * @return Gramfoodklembowplatny
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
	 * Set rfp
	 *
	 * @param string $rfp        	
	 * @return Gramfoodklembowplatny
	 */
	public function setRfp($rfp) {
		$this->rfp = $rfp;
		
		return $this;
	}
	
	/**
	 * Get rfp
	 *
	 * @return string
	 */
	public function getRfp() {
		return $this->rfp;
	}
	
	/**
	 * Set idd
	 *
	 * @param string $idd        	
	 * @return Gramfoodklembowplatny
	 */
	public function setIdd($idd) {
		$this->idd = $idd;
		
		return $this;
	}
	
	/**
	 * Get idd
	 *
	 * @return string
	 */
	public function getIdd() {
		return $this->idd;
	}
	
	/**
	 * Set rejd
	 *
	 * @param string $rejd        	
	 * @return Gramfoodklembowplatny
	 */
	public function setRejd($rejd) {
		$this->rejd = $rejd;
		
		return $this;
	}
	
	/**
	 * Get rejd
	 *
	 * @return string
	 */
	public function getRejd() {
		return $this->rejd;
	}
	
	/**
	 * Set idza
	 *
	 * @param string $idza        	
	 * @return Gramfoodklembowplatny
	 */
	public function setIdza($idza) {
		$this->idza = $idza;
		
		return $this;
	}
	
	/**
	 * Get idza
	 *
	 * @return string
	 */
	public function getIdza() {
		return $this->idza;
	}
	
	/**
	 * Set fak
	 *
	 * @param string $fak        	
	 * @return Gramfoodklembowplatny
	 */
	public function setFak($fak) {
		$this->fak = $fak;
		
		return $this;
	}
	
	/**
	 * Get fak
	 *
	 * @return string
	 */
	public function getFak() {
		return $this->fak;
	}
	
	/**
	 * Set wart
	 *
	 * @param float $wart        	
	 * @return Gramfoodklembowplatny
	 */
	public function setWart($wart) {
		$this->wart = $wart;
		
		return $this;
	}
	
	/**
	 * Get wart
	 *
	 * @return float
	 */
	public function getWart() {
		return $this->wart;
	}
	
	/**
	 * Set wal
	 *
	 * @param string $wal        	
	 * @return Gramfoodklembowplatny
	 */
	public function setWal($wal) {
		$this->wal = $wal;
		
		return $this;
	}
	
	/**
	 * Get wal
	 *
	 * @return string
	 */
	public function getWal() {
		return $this->wal;
	}
	
	/**
	 * Set uz
	 *
	 * @param string $uz        	
	 * @return Gramfoodklembowplatny
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
	 * Set lok
	 *
	 * @param integer $lok        	
	 * @return Gramfoodklembowplatny
	 */
	public function setLok($lok) {
		$this->lok = $lok;
		
		return $this;
	}
	
	/**
	 * Get lok
	 *
	 * @return integer
	 */
	public function getLok() {
		return $this->lok;
	}
	
	/**
	 * Set akt
	 *
	 * @param string $akt        	
	 * @return Gramfoodklembowplatny
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
	 * @return Gramfoodklembowplatny
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
	 * @return Gramfoodklembowplatny
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
	 * Set rejza
	 *
	 * @param string $rejza        	
	 * @return Gramfoodklembowplatny
	 */
	public function setRejza($rejza) {
		$this->rejza = $rejza;
		
		return $this;
	}
	
	/**
	 * Get rejza
	 *
	 * @return string
	 */
	public function getRejza() {
		return $this->rejza;
	}
	
	/**
	 * Set ki
	 *
	 * @param string $ki        	
	 * @return Gramfoodklembowplatny
	 */
	public function setKi($ki) {
		$this->ki = $ki;
		
		return $this;
	}
	
	/**
	 * Get ki
	 *
	 * @return string
	 */
	public function getKi() {
		return $this->ki;
	}
}
