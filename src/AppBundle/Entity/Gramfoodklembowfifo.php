<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Gramfoodklembowfifo
 *
 * @ORM\Table(name="gramfoodklembowfifo")
 * @ORM\Entity
 */
class Gramfoodklembowfifo {
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
	 * @var string @ORM\Column(name="IDr", type="string", length=50, nullable=true)
	 */
	private $idr;
	
	/**
	 *
	 * @var string @ORM\Column(name="Nrp", type="string", length=50, nullable=true)
	 */
	private $nrp;
	
	/**
	 *
	 * @var string @ORM\Column(name="Nrr", type="string", length=50, nullable=true)
	 */
	private $nrr;
	
	/**
	 *
	 * @var string @ORM\Column(name="Dap", type="string", length=20, nullable=true)
	 */
	private $dap;
	
	/**
	 *
	 * @var string @ORM\Column(name="Dar", type="string", length=20, nullable=true)
	 */
	private $dar;
	
	/**
	 *
	 * @var string @ORM\Column(name="Te", type="string", length=250, nullable=true)
	 */
	private $te;
	
	/**
	 *
	 * @var float @ORM\Column(name="ile", type="float", precision=10, scale=0, nullable=true)
	 */
	private $ile;
	
	/**
	 *
	 * @var float @ORM\Column(name="cz", type="float", precision=10, scale=0, nullable=true)
	 */
	private $cz;
	
	/**
	 *
	 * @var float @ORM\Column(name="cs", type="float", precision=10, scale=0, nullable=true)
	 */
	private $cs;
	
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
	 * @return string
	 */
	public function getId() {
		return $this->id;
	}
	
	/**
	 * Set idp
	 *
	 * @param string $idp        	
	 * @return Gramfoodklembowfifo
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
	 * Set idr
	 *
	 * @param string $idr        	
	 * @return Gramfoodklembowfifo
	 */
	public function setIdr($idr) {
		$this->idr = $idr;
		
		return $this;
	}
	
	/**
	 * Get idr
	 *
	 * @return string
	 */
	public function getIdr() {
		return $this->idr;
	}
	
	/**
	 * Set nrp
	 *
	 * @param string $nrp        	
	 * @return Gramfoodklembowfifo
	 */
	public function setNrp($nrp) {
		$this->nrp = $nrp;
		
		return $this;
	}
	
	/**
	 * Get nrp
	 *
	 * @return string
	 */
	public function getNrp() {
		return $this->nrp;
	}
	
	/**
	 * Set nrr
	 *
	 * @param string $nrr        	
	 * @return Gramfoodklembowfifo
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
	 * Set dap
	 *
	 * @param string $dap        	
	 * @return Gramfoodklembowfifo
	 */
	public function setDap($dap) {
		$this->dap = $dap;
		
		return $this;
	}
	
	/**
	 * Get dap
	 *
	 * @return string
	 */
	public function getDap() {
		return $this->dap;
	}
	
	/**
	 * Set dar
	 *
	 * @param string $dar        	
	 * @return Gramfoodklembowfifo
	 */
	public function setDar($dar) {
		$this->dar = $dar;
		
		return $this;
	}
	
	/**
	 * Get dar
	 *
	 * @return string
	 */
	public function getDar() {
		return $this->dar;
	}
	
	/**
	 * Set te
	 *
	 * @param string $te        	
	 * @return Gramfoodklembowfifo
	 */
	public function setTe($te) {
		$this->te = $te;
		
		return $this;
	}
	
	/**
	 * Get te
	 *
	 * @return string
	 */
	public function getTe() {
		return $this->te;
	}
	
	/**
	 * Set ile
	 *
	 * @param float $ile        	
	 * @return Gramfoodklembowfifo
	 */
	public function setIle($ile) {
		$this->ile = $ile;
		
		return $this;
	}
	
	/**
	 * Get ile
	 *
	 * @return float
	 */
	public function getIle() {
		return $this->ile;
	}
	
	/**
	 * Set cz
	 *
	 * @param float $cz        	
	 * @return Gramfoodklembowfifo
	 */
	public function setCz($cz) {
		$this->cz = $cz;
		
		return $this;
	}
	
	/**
	 * Get cz
	 *
	 * @return float
	 */
	public function getCz() {
		return $this->cz;
	}
	
	/**
	 * Set cs
	 *
	 * @param float $cs        	
	 * @return Gramfoodklembowfifo
	 */
	public function setCs($cs) {
		$this->cs = $cs;
		
		return $this;
	}
	
	/**
	 * Get cs
	 *
	 * @return float
	 */
	public function getCs() {
		return $this->cs;
	}
	
	/**
	 * Set akt
	 *
	 * @param string $akt        	
	 * @return Gramfoodklembowfifo
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
	 * @return Gramfoodklembowfifo
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
	 * @return Gramfoodklembowfifo
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
