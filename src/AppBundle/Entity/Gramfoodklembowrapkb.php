<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Gramfoodklembowrapkb
 *
 * @ORM\Table(name="gramfoodklembowrapkb")
 * @ORM\Entity
 */
class Gramfoodklembowrapkb {
	/**
	 *
	 * @var string @ORM\Column(name="ID", type="string", length=50, nullable=false)
	 *      @ORM\Id
	 *      @ORM\GeneratedValue(strategy="IDENTITY")
	 */
	private $id;
	
	/**
	 *
	 * @var string @ORM\Column(name="KB", type="string", length=1, nullable=true)
	 */
	private $kb;
	
	/**
	 *
	 * @var string @ORM\Column(name="Wsk", type="string", length=5, nullable=true)
	 */
	private $wsk;
	
	/**
	 *
	 * @var string @ORM\Column(name="NrR", type="string", length=50, nullable=true)
	 */
	private $nrr;
	
	/**
	 *
	 * @var string @ORM\Column(name="Rej", type="string", length=10, nullable=true)
	 */
	private $rej;
	
	/**
	 *
	 * @var string @ORM\Column(name="Rok", type="string", length=4, nullable=true)
	 */
	private $rok;
	
	/**
	 *
	 * @var integer @ORM\Column(name="Nr", type="integer", nullable=true)
	 */
	private $nr;
	
	/**
	 *
	 * @var string @ORM\Column(name="Data", type="string", length=8, nullable=true)
	 */
	private $data;
	
	/**
	 *
	 * @var string @ORM\Column(name="DataK", type="string", length=8, nullable=true)
	 */
	private $datak;
	
	/**
	 *
	 * @var string @ORM\Column(name="Ko", type="string", length=50, nullable=true)
	 */
	private $ko;
	
	/**
	 *
	 * @var string @ORM\Column(name="Str1", type="string", length=50, nullable=true)
	 */
	private $str1;
	
	/**
	 *
	 * @var float @ORM\Column(name="Sp", type="float", precision=10, scale=0, nullable=true)
	 */
	private $sp;
	
	/**
	 *
	 * @var float @ORM\Column(name="Wp", type="float", precision=10, scale=0, nullable=true)
	 */
	private $wp;
	
	/**
	 *
	 * @var float @ORM\Column(name="Wy", type="float", precision=10, scale=0, nullable=true)
	 */
	private $wy;
	
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
	 * @var string @ORM\Column(name="Wal", type="string", length=10, nullable=true)
	 */
	private $wal;
	
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
	 * @var string @ORM\Column(name="Mc", type="string", length=10, nullable=true)
	 */
	private $mc;
	
	/**
	 * Get id
	 *
	 * @return string
	 */
	public function getId() {
		return $this->id;
	}
	
	/**
	 * Set kb
	 *
	 * @param string $kb        	
	 * @return Gramfoodklembowrapkb
	 */
	public function setKb($kb) {
		$this->kb = $kb;
		
		return $this;
	}
	
	/**
	 * Get kb
	 *
	 * @return string
	 */
	public function getKb() {
		return $this->kb;
	}
	
	/**
	 * Set wsk
	 *
	 * @param string $wsk        	
	 * @return Gramfoodklembowrapkb
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
	 * Set nrr
	 *
	 * @param string $nrr        	
	 * @return Gramfoodklembowrapkb
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
	 * Set rej
	 *
	 * @param string $rej        	
	 * @return Gramfoodklembowrapkb
	 */
	public function setRej($rej) {
		$this->rej = $rej;
		
		return $this;
	}
	
	/**
	 * Get rej
	 *
	 * @return string
	 */
	public function getRej() {
		return $this->rej;
	}
	
	/**
	 * Set rok
	 *
	 * @param string $rok        	
	 * @return Gramfoodklembowrapkb
	 */
	public function setRok($rok) {
		$this->rok = $rok;
		
		return $this;
	}
	
	/**
	 * Get rok
	 *
	 * @return string
	 */
	public function getRok() {
		return $this->rok;
	}
	
	/**
	 * Set nr
	 *
	 * @param integer $nr        	
	 * @return Gramfoodklembowrapkb
	 */
	public function setNr($nr) {
		$this->nr = $nr;
		
		return $this;
	}
	
	/**
	 * Get nr
	 *
	 * @return integer
	 */
	public function getNr() {
		return $this->nr;
	}
	
	/**
	 * Set data
	 *
	 * @param string $data        	
	 * @return Gramfoodklembowrapkb
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
	 * Set datak
	 *
	 * @param string $datak        	
	 * @return Gramfoodklembowrapkb
	 */
	public function setDatak($datak) {
		$this->datak = $datak;
		
		return $this;
	}
	
	/**
	 * Get datak
	 *
	 * @return string
	 */
	public function getDatak() {
		return $this->datak;
	}
	
	/**
	 * Set ko
	 *
	 * @param string $ko        	
	 * @return Gramfoodklembowrapkb
	 */
	public function setKo($ko) {
		$this->ko = $ko;
		
		return $this;
	}
	
	/**
	 * Get ko
	 *
	 * @return string
	 */
	public function getKo() {
		return $this->ko;
	}
	
	/**
	 * Set str1
	 *
	 * @param string $str1        	
	 * @return Gramfoodklembowrapkb
	 */
	public function setStr1($str1) {
		$this->str1 = $str1;
		
		return $this;
	}
	
	/**
	 * Get str1
	 *
	 * @return string
	 */
	public function getStr1() {
		return $this->str1;
	}
	
	/**
	 * Set sp
	 *
	 * @param float $sp        	
	 * @return Gramfoodklembowrapkb
	 */
	public function setSp($sp) {
		$this->sp = $sp;
		
		return $this;
	}
	
	/**
	 * Get sp
	 *
	 * @return float
	 */
	public function getSp() {
		return $this->sp;
	}
	
	/**
	 * Set wp
	 *
	 * @param float $wp        	
	 * @return Gramfoodklembowrapkb
	 */
	public function setWp($wp) {
		$this->wp = $wp;
		
		return $this;
	}
	
	/**
	 * Get wp
	 *
	 * @return float
	 */
	public function getWp() {
		return $this->wp;
	}
	
	/**
	 * Set wy
	 *
	 * @param float $wy        	
	 * @return Gramfoodklembowrapkb
	 */
	public function setWy($wy) {
		$this->wy = $wy;
		
		return $this;
	}
	
	/**
	 * Get wy
	 *
	 * @return float
	 */
	public function getWy() {
		return $this->wy;
	}
	
	/**
	 * Set uz
	 *
	 * @param string $uz        	
	 * @return Gramfoodklembowrapkb
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
	 * @return Gramfoodklembowrapkb
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
	 * Set wal
	 *
	 * @param string $wal        	
	 * @return Gramfoodklembowrapkb
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
	 * Set akt
	 *
	 * @param string $akt        	
	 * @return Gramfoodklembowrapkb
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
	 * @return Gramfoodklembowrapkb
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
	 * @return Gramfoodklembowrapkb
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
	 * Set mc
	 *
	 * @param string $mc        	
	 * @return Gramfoodklembowrapkb
	 */
	public function setMc($mc) {
		$this->mc = $mc;
		
		return $this;
	}
	
	/**
	 * Get mc
	 *
	 * @return string
	 */
	public function getMc() {
		return $this->mc;
	}
}
