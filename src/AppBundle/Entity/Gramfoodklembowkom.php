<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Gramfoodklembowkom
 *
 * @ORM\Table(name="gramfoodklembowkom")
 * @ORM\Entity
 */
class Gramfoodklembowkom {
	/**
	 *
	 * @var string @ORM\Column(name="ID", type="string", length=50, nullable=false)
	 *      @ORM\Id
	 *      @ORM\GeneratedValue(strategy="IDENTITY")
	 */
	private $id;
	
	/**
	 *
	 * @var string @ORM\Column(name="DoID", type="string", length=50, nullable=true)
	 */
	private $doid;
	
	/**
	 *
	 * @var string @ORM\Column(name="DatN", type="string", length=20, nullable=true)
	 */
	private $datn;
	
	/**
	 *
	 * @var string @ORM\Column(name="DatO", type="string", length=20, nullable=true)
	 */
	private $dato;
	
	/**
	 *
	 * @var string @ORM\Column(name="AlN", type="string", length=50, nullable=true)
	 */
	private $aln;
	
	/**
	 *
	 * @var string @ORM\Column(name="AlO", type="string", length=250, nullable=true)
	 */
	private $alo;
	
	/**
	 *
	 * @var string @ORM\Column(name="Alias", type="string", length=50, nullable=true)
	 */
	private $alias;
	
	/**
	 *
	 * @var string @ORM\Column(name="IDo", type="string", length=50, nullable=true)
	 */
	private $ido;
	
	/**
	 *
	 * @var string @ORM\Column(name="Nrr", type="string", length=50, nullable=true)
	 */
	private $nrr;
	
	/**
	 *
	 * @var string @ORM\Column(name="IDd", type="string", length=50, nullable=true)
	 */
	private $idd;
	
	/**
	 *
	 * @var string @ORM\Column(name="Typ", type="string", length=5, nullable=true)
	 */
	private $typ;
	
	/**
	 *
	 * @var string @ORM\Column(name="Ro", type="string", length=50, nullable=true)
	 */
	private $ro;
	
	/**
	 *
	 * @var string @ORM\Column(name="Tekst", type="text", length=16777215, nullable=true)
	 */
	private $tekst;
	
	/**
	 *
	 * @var string @ORM\Column(name="Opis", type="text", length=16777215, nullable=true)
	 */
	private $opis;
	
	/**
	 *
	 * @var string @ORM\Column(name="Wazn", type="string", length=10, nullable=true)
	 */
	private $wazn;
	
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
	 * Set doid
	 *
	 * @param string $doid        	
	 * @return Gramfoodklembowkom
	 */
	public function setDoid($doid) {
		$this->doid = $doid;
		
		return $this;
	}
	
	/**
	 * Get doid
	 *
	 * @return string
	 */
	public function getDoid() {
		return $this->doid;
	}
	
	/**
	 * Set datn
	 *
	 * @param string $datn        	
	 * @return Gramfoodklembowkom
	 */
	public function setDatn($datn) {
		$this->datn = $datn;
		
		return $this;
	}
	
	/**
	 * Get datn
	 *
	 * @return string
	 */
	public function getDatn() {
		return $this->datn;
	}
	
	/**
	 * Set dato
	 *
	 * @param string $dato        	
	 * @return Gramfoodklembowkom
	 */
	public function setDato($dato) {
		$this->dato = $dato;
		
		return $this;
	}
	
	/**
	 * Get dato
	 *
	 * @return string
	 */
	public function getDato() {
		return $this->dato;
	}
	
	/**
	 * Set aln
	 *
	 * @param string $aln        	
	 * @return Gramfoodklembowkom
	 */
	public function setAln($aln) {
		$this->aln = $aln;
		
		return $this;
	}
	
	/**
	 * Get aln
	 *
	 * @return string
	 */
	public function getAln() {
		return $this->aln;
	}
	
	/**
	 * Set alo
	 *
	 * @param string $alo        	
	 * @return Gramfoodklembowkom
	 */
	public function setAlo($alo) {
		$this->alo = $alo;
		
		return $this;
	}
	
	/**
	 * Get alo
	 *
	 * @return string
	 */
	public function getAlo() {
		return $this->alo;
	}
	
	/**
	 * Set alias
	 *
	 * @param string $alias        	
	 * @return Gramfoodklembowkom
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
	 * Set ido
	 *
	 * @param string $ido        	
	 * @return Gramfoodklembowkom
	 */
	public function setIdo($ido) {
		$this->ido = $ido;
		
		return $this;
	}
	
	/**
	 * Get ido
	 *
	 * @return string
	 */
	public function getIdo() {
		return $this->ido;
	}
	
	/**
	 * Set nrr
	 *
	 * @param string $nrr        	
	 * @return Gramfoodklembowkom
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
	 * Set idd
	 *
	 * @param string $idd        	
	 * @return Gramfoodklembowkom
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
	 * Set typ
	 *
	 * @param string $typ        	
	 * @return Gramfoodklembowkom
	 */
	public function setTyp($typ) {
		$this->typ = $typ;
		
		return $this;
	}
	
	/**
	 * Get typ
	 *
	 * @return string
	 */
	public function getTyp() {
		return $this->typ;
	}
	
	/**
	 * Set ro
	 *
	 * @param string $ro        	
	 * @return Gramfoodklembowkom
	 */
	public function setRo($ro) {
		$this->ro = $ro;
		
		return $this;
	}
	
	/**
	 * Get ro
	 *
	 * @return string
	 */
	public function getRo() {
		return $this->ro;
	}
	
	/**
	 * Set tekst
	 *
	 * @param string $tekst        	
	 * @return Gramfoodklembowkom
	 */
	public function setTekst($tekst) {
		$this->tekst = $tekst;
		
		return $this;
	}
	
	/**
	 * Get tekst
	 *
	 * @return string
	 */
	public function getTekst() {
		return $this->tekst;
	}
	
	/**
	 * Set opis
	 *
	 * @param string $opis        	
	 * @return Gramfoodklembowkom
	 */
	public function setOpis($opis) {
		$this->opis = $opis;
		
		return $this;
	}
	
	/**
	 * Get opis
	 *
	 * @return string
	 */
	public function getOpis() {
		return $this->opis;
	}
	
	/**
	 * Set wazn
	 *
	 * @param string $wazn        	
	 * @return Gramfoodklembowkom
	 */
	public function setWazn($wazn) {
		$this->wazn = $wazn;
		
		return $this;
	}
	
	/**
	 * Get wazn
	 *
	 * @return string
	 */
	public function getWazn() {
		return $this->wazn;
	}
	
	/**
	 * Set akt
	 *
	 * @param string $akt        	
	 * @return Gramfoodklembowkom
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
	 * @return Gramfoodklembowkom
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
	 * @return Gramfoodklembowkom
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
