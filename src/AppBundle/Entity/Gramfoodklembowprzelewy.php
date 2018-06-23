<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Gramfoodklembowprzelewy
 *
 * @ORM\Table(name="gramfoodklembowprzelewy")
 * @ORM\Entity
 */
class Gramfoodklembowprzelewy {
	/**
	 *
	 * @var string @ORM\Column(name="ID", type="string", length=50, nullable=false)
	 *      @ORM\Id
	 *      @ORM\GeneratedValue(strategy="IDENTITY")
	 */
	private $id;
	
	/**
	 *
	 * @var string @ORM\Column(name="Kier", type="string", length=10, nullable=true)
	 */
	private $kier;
	
	/**
	 *
	 * @var string @ORM\Column(name="Typ", type="string", length=10, nullable=true)
	 */
	private $typ;
	
	/**
	 *
	 * @var string @ORM\Column(name="IDk", type="string", length=50, nullable=true)
	 */
	private $idk;
	
	/**
	 *
	 * @var string @ORM\Column(name="Alias", type="string", length=50, nullable=true)
	 */
	private $alias;
	
	/**
	 *
	 * @var string @ORM\Column(name="Data", type="string", length=20, nullable=true)
	 */
	private $data;
	
	/**
	 *
	 * @var string @ORM\Column(name="O1", type="string", length=90, nullable=true)
	 */
	private $o1;
	
	/**
	 *
	 * @var string @ORM\Column(name="O2", type="string", length=90, nullable=true)
	 */
	private $o2;
	
	/**
	 *
	 * @var string @ORM\Column(name="Ko", type="string", length=50, nullable=true)
	 */
	private $ko;
	
	/**
	 *
	 * @var string @ORM\Column(name="Bo", type="string", length=50, nullable=true)
	 */
	private $bo;
	
	/**
	 *
	 * @var string @ORM\Column(name="Z1", type="string", length=90, nullable=true)
	 */
	private $z1;
	
	/**
	 *
	 * @var string @ORM\Column(name="Z2", type="string", length=90, nullable=true)
	 */
	private $z2;
	
	/**
	 *
	 * @var string @ORM\Column(name="Kz", type="string", length=50, nullable=true)
	 */
	private $kz;
	
	/**
	 *
	 * @var string @ORM\Column(name="Bz", type="string", length=50, nullable=true)
	 */
	private $bz;
	
	/**
	 *
	 * @var string @ORM\Column(name="Tyt", type="string", length=90, nullable=true)
	 */
	private $tyt;
	
	/**
	 *
	 * @var string @ORM\Column(name="Tyt2", type="string", length=90, nullable=true)
	 */
	private $tyt2;
	
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
	 * @var string @ORM\Column(name="zID", type="string", length=50, nullable=true)
	 */
	private $zid;
	
	/**
	 *
	 * @var string @ORM\Column(name="UZ", type="string", length=50, nullable=true)
	 */
	private $uz;
	
	/**
	 *
	 * @var integer @ORM\Column(name="LOK", type="integer", nullable=true)
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
	 * Get id
	 *
	 * @return string
	 */
	public function getId() {
		return $this->id;
	}
	
	/**
	 * Set kier
	 *
	 * @param string $kier        	
	 * @return Gramfoodklembowprzelewy
	 */
	public function setKier($kier) {
		$this->kier = $kier;
		
		return $this;
	}
	
	/**
	 * Get kier
	 *
	 * @return string
	 */
	public function getKier() {
		return $this->kier;
	}
	
	/**
	 * Set typ
	 *
	 * @param string $typ        	
	 * @return Gramfoodklembowprzelewy
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
	 * Set idk
	 *
	 * @param string $idk        	
	 * @return Gramfoodklembowprzelewy
	 */
	public function setIdk($idk) {
		$this->idk = $idk;
		
		return $this;
	}
	
	/**
	 * Get idk
	 *
	 * @return string
	 */
	public function getIdk() {
		return $this->idk;
	}
	
	/**
	 * Set alias
	 *
	 * @param string $alias        	
	 * @return Gramfoodklembowprzelewy
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
	 * Set data
	 *
	 * @param string $data        	
	 * @return Gramfoodklembowprzelewy
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
	 * Set o1
	 *
	 * @param string $o1        	
	 * @return Gramfoodklembowprzelewy
	 */
	public function setO1($o1) {
		$this->o1 = $o1;
		
		return $this;
	}
	
	/**
	 * Get o1
	 *
	 * @return string
	 */
	public function getO1() {
		return $this->o1;
	}
	
	/**
	 * Set o2
	 *
	 * @param string $o2        	
	 * @return Gramfoodklembowprzelewy
	 */
	public function setO2($o2) {
		$this->o2 = $o2;
		
		return $this;
	}
	
	/**
	 * Get o2
	 *
	 * @return string
	 */
	public function getO2() {
		return $this->o2;
	}
	
	/**
	 * Set ko
	 *
	 * @param string $ko        	
	 * @return Gramfoodklembowprzelewy
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
	 * Set bo
	 *
	 * @param string $bo        	
	 * @return Gramfoodklembowprzelewy
	 */
	public function setBo($bo) {
		$this->bo = $bo;
		
		return $this;
	}
	
	/**
	 * Get bo
	 *
	 * @return string
	 */
	public function getBo() {
		return $this->bo;
	}
	
	/**
	 * Set z1
	 *
	 * @param string $z1        	
	 * @return Gramfoodklembowprzelewy
	 */
	public function setZ1($z1) {
		$this->z1 = $z1;
		
		return $this;
	}
	
	/**
	 * Get z1
	 *
	 * @return string
	 */
	public function getZ1() {
		return $this->z1;
	}
	
	/**
	 * Set z2
	 *
	 * @param string $z2        	
	 * @return Gramfoodklembowprzelewy
	 */
	public function setZ2($z2) {
		$this->z2 = $z2;
		
		return $this;
	}
	
	/**
	 * Get z2
	 *
	 * @return string
	 */
	public function getZ2() {
		return $this->z2;
	}
	
	/**
	 * Set kz
	 *
	 * @param string $kz        	
	 * @return Gramfoodklembowprzelewy
	 */
	public function setKz($kz) {
		$this->kz = $kz;
		
		return $this;
	}
	
	/**
	 * Get kz
	 *
	 * @return string
	 */
	public function getKz() {
		return $this->kz;
	}
	
	/**
	 * Set bz
	 *
	 * @param string $bz        	
	 * @return Gramfoodklembowprzelewy
	 */
	public function setBz($bz) {
		$this->bz = $bz;
		
		return $this;
	}
	
	/**
	 * Get bz
	 *
	 * @return string
	 */
	public function getBz() {
		return $this->bz;
	}
	
	/**
	 * Set tyt
	 *
	 * @param string $tyt        	
	 * @return Gramfoodklembowprzelewy
	 */
	public function setTyt($tyt) {
		$this->tyt = $tyt;
		
		return $this;
	}
	
	/**
	 * Get tyt
	 *
	 * @return string
	 */
	public function getTyt() {
		return $this->tyt;
	}
	
	/**
	 * Set tyt2
	 *
	 * @param string $tyt2        	
	 * @return Gramfoodklembowprzelewy
	 */
	public function setTyt2($tyt2) {
		$this->tyt2 = $tyt2;
		
		return $this;
	}
	
	/**
	 * Get tyt2
	 *
	 * @return string
	 */
	public function getTyt2() {
		return $this->tyt2;
	}
	
	/**
	 * Set wart
	 *
	 * @param float $wart        	
	 * @return Gramfoodklembowprzelewy
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
	 * @return Gramfoodklembowprzelewy
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
	 * Set zid
	 *
	 * @param string $zid        	
	 * @return Gramfoodklembowprzelewy
	 */
	public function setZid($zid) {
		$this->zid = $zid;
		
		return $this;
	}
	
	/**
	 * Get zid
	 *
	 * @return string
	 */
	public function getZid() {
		return $this->zid;
	}
	
	/**
	 * Set uz
	 *
	 * @param string $uz        	
	 * @return Gramfoodklembowprzelewy
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
	 * @return Gramfoodklembowprzelewy
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
	 * @return Gramfoodklembowprzelewy
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
	 * @return Gramfoodklembowprzelewy
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
	 * @return Gramfoodklembowprzelewy
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
