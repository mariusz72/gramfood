<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Gramfoodklembowtowarydz
 *
 * @ORM\Table(name="gramfoodklembowtowarydz")
 * @ORM\Entity
 */
class Gramfoodklembowtowarydz {
	/**
	 *
	 * @var string @ORM\Column(name="ID", type="string", length=50, nullable=false)
	 *      @ORM\Id
	 *      @ORM\GeneratedValue(strategy="IDENTITY")
	 */
	private $id;
	
	/**
	 *
	 * @var string @ORM\Column(name="Data", type="string", length=8, nullable=true)
	 */
	private $data;
	
	/**
	 *
	 * @var string @ORM\Column(name="Mag", type="string", length=20, nullable=true)
	 */
	private $mag;
	
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
	 * @var float @ORM\Column(name="ST", type="float", precision=10, scale=0, nullable=true)
	 */
	private $st;
	
	/**
	 *
	 * @var float @ORM\Column(name="cz", type="float", precision=10, scale=0, nullable=true)
	 */
	private $cz;
	
	/**
	 *
	 * @var float @ORM\Column(name="cn", type="float", precision=10, scale=0, nullable=true)
	 */
	private $cn;
	
	/**
	 *
	 * @var float @ORM\Column(name="cb", type="float", precision=10, scale=0, nullable=true)
	 */
	private $cb;
	
	/**
	 *
	 * @var float @ORM\Column(name="pi", type="float", precision=10, scale=0, nullable=true)
	 */
	private $pi;
	
	/**
	 *
	 * @var float @ORM\Column(name="pw", type="float", precision=10, scale=0, nullable=true)
	 */
	private $pw;
	
	/**
	 *
	 * @var float @ORM\Column(name="ri", type="float", precision=10, scale=0, nullable=true)
	 */
	private $ri;
	
	/**
	 *
	 * @var float @ORM\Column(name="rw", type="float", precision=10, scale=0, nullable=true)
	 */
	private $rw;
	
	/**
	 *
	 * @var float @ORM\Column(name="pmci", type="float", precision=10, scale=0, nullable=true)
	 */
	private $pmci;
	
	/**
	 *
	 * @var float @ORM\Column(name="pmcw", type="float", precision=10, scale=0, nullable=true)
	 */
	private $pmcw;
	
	/**
	 *
	 * @var float @ORM\Column(name="obr", type="float", precision=10, scale=0, nullable=true)
	 */
	private $obr;
	
	/**
	 * Get id
	 *
	 * @return string
	 */
	public function getId() {
		return $this->id;
	}
	
	/**
	 * Set data
	 *
	 * @param string $data        	
	 * @return Gramfoodklembowtowarydz
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
	 * Set mag
	 *
	 * @param string $mag        	
	 * @return Gramfoodklembowtowarydz
	 */
	public function setMag($mag) {
		$this->mag = $mag;
		
		return $this;
	}
	
	/**
	 * Get mag
	 *
	 * @return string
	 */
	public function getMag() {
		return $this->mag;
	}
	
	/**
	 * Set kod
	 *
	 * @param string $kod        	
	 * @return Gramfoodklembowtowarydz
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
	 * @return Gramfoodklembowtowarydz
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
	 * Set st
	 *
	 * @param float $st        	
	 * @return Gramfoodklembowtowarydz
	 */
	public function setSt($st) {
		$this->st = $st;
		
		return $this;
	}
	
	/**
	 * Get st
	 *
	 * @return float
	 */
	public function getSt() {
		return $this->st;
	}
	
	/**
	 * Set cz
	 *
	 * @param float $cz        	
	 * @return Gramfoodklembowtowarydz
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
	 * Set cn
	 *
	 * @param float $cn        	
	 * @return Gramfoodklembowtowarydz
	 */
	public function setCn($cn) {
		$this->cn = $cn;
		
		return $this;
	}
	
	/**
	 * Get cn
	 *
	 * @return float
	 */
	public function getCn() {
		return $this->cn;
	}
	
	/**
	 * Set cb
	 *
	 * @param float $cb        	
	 * @return Gramfoodklembowtowarydz
	 */
	public function setCb($cb) {
		$this->cb = $cb;
		
		return $this;
	}
	
	/**
	 * Get cb
	 *
	 * @return float
	 */
	public function getCb() {
		return $this->cb;
	}
	
	/**
	 * Set pi
	 *
	 * @param float $pi        	
	 * @return Gramfoodklembowtowarydz
	 */
	public function setPi($pi) {
		$this->pi = $pi;
		
		return $this;
	}
	
	/**
	 * Get pi
	 *
	 * @return float
	 */
	public function getPi() {
		return $this->pi;
	}
	
	/**
	 * Set pw
	 *
	 * @param float $pw        	
	 * @return Gramfoodklembowtowarydz
	 */
	public function setPw($pw) {
		$this->pw = $pw;
		
		return $this;
	}
	
	/**
	 * Get pw
	 *
	 * @return float
	 */
	public function getPw() {
		return $this->pw;
	}
	
	/**
	 * Set ri
	 *
	 * @param float $ri        	
	 * @return Gramfoodklembowtowarydz
	 */
	public function setRi($ri) {
		$this->ri = $ri;
		
		return $this;
	}
	
	/**
	 * Get ri
	 *
	 * @return float
	 */
	public function getRi() {
		return $this->ri;
	}
	
	/**
	 * Set rw
	 *
	 * @param float $rw        	
	 * @return Gramfoodklembowtowarydz
	 */
	public function setRw($rw) {
		$this->rw = $rw;
		
		return $this;
	}
	
	/**
	 * Get rw
	 *
	 * @return float
	 */
	public function getRw() {
		return $this->rw;
	}
	
	/**
	 * Set pmci
	 *
	 * @param float $pmci        	
	 * @return Gramfoodklembowtowarydz
	 */
	public function setPmci($pmci) {
		$this->pmci = $pmci;
		
		return $this;
	}
	
	/**
	 * Get pmci
	 *
	 * @return float
	 */
	public function getPmci() {
		return $this->pmci;
	}
	
	/**
	 * Set pmcw
	 *
	 * @param float $pmcw        	
	 * @return Gramfoodklembowtowarydz
	 */
	public function setPmcw($pmcw) {
		$this->pmcw = $pmcw;
		
		return $this;
	}
	
	/**
	 * Get pmcw
	 *
	 * @return float
	 */
	public function getPmcw() {
		return $this->pmcw;
	}
	
	/**
	 * Set obr
	 *
	 * @param float $obr        	
	 * @return Gramfoodklembowtowarydz
	 */
	public function setObr($obr) {
		$this->obr = $obr;
		
		return $this;
	}
	
	/**
	 * Get obr
	 *
	 * @return float
	 */
	public function getObr() {
		return $this->obr;
	}
}
