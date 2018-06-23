<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Gramfoodklembowinwent
 *
 * @ORM\Table(name="gramfoodklembowinwent")
 * @ORM\Entity
 */
class Gramfoodklembowinwent {
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
	 * @var string @ORM\Column(name="Wsk", type="string", length=1, nullable=true)
	 */
	private $wsk;
	
	/**
	 *
	 * @var integer @ORM\Column(name="Ark", type="integer", nullable=true)
	 */
	private $ark;
	
	/**
	 *
	 * @var integer @ORM\Column(name="Poz", type="integer", nullable=true)
	 */
	private $poz;
	
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
	 * @var string @ORM\Column(name="Nazw", type="string", length=250, nullable=true)
	 */
	private $nazw;
	
	/**
	 *
	 * @var string @ORM\Column(name="JM", type="string", length=20, nullable=true)
	 */
	private $jm;
	
	/**
	 *
	 * @var float @ORM\Column(name="Ka", type="float", precision=10, scale=0, nullable=true)
	 */
	private $ka;
	
	/**
	 *
	 * @var float @ORM\Column(name="Sp", type="float", precision=10, scale=0, nullable=true)
	 */
	private $sp;
	
	/**
	 *
	 * @var float @ORM\Column(name="Ce", type="float", precision=10, scale=0, nullable=true)
	 */
	private $ce;
	
	/**
	 *
	 * @var string @ORM\Column(name="IDd", type="string", length=50, nullable=true)
	 */
	private $idd;
	
	/**
	 *
	 * @var string @ORM\Column(name="Rej", type="string", length=50, nullable=true)
	 */
	private $rej;
	
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
	 * @var string @ORM\Column(name="Gr", type="string", length=50, nullable=true)
	 */
	private $gr;
	
	/**
	 *
	 * @var string @ORM\Column(name="kk", type="string", length=250, nullable=true)
	 */
	private $kk;
	
	/**
	 *
	 * @var float @ORM\Column(name="oinw", type="float", precision=10, scale=0, nullable=true)
	 */
	private $oinw;
	
	/**
	 *
	 * @var float @ORM\Column(name="ooinw", type="float", precision=10, scale=0, nullable=true)
	 */
	private $ooinw;
	
	/**
	 *
	 * @var float @ORM\Column(name="CeB", type="float", precision=10, scale=0, nullable=true)
	 */
	private $ceb;
	
	/**
	 *
	 * @var string @ORM\Column(name="kat", type="string", length=50, nullable=true)
	 */
	private $kat;
	
	/**
	 *
	 * @var string @ORM\Column(name="lokm", type="string", length=50, nullable=true)
	 */
	private $lokm;
	
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
	 * @return Gramfoodklembowinwent
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
	 * Set wsk
	 *
	 * @param string $wsk        	
	 * @return Gramfoodklembowinwent
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
	 * Set ark
	 *
	 * @param integer $ark        	
	 * @return Gramfoodklembowinwent
	 */
	public function setArk($ark) {
		$this->ark = $ark;
		
		return $this;
	}
	
	/**
	 * Get ark
	 *
	 * @return integer
	 */
	public function getArk() {
		return $this->ark;
	}
	
	/**
	 * Set poz
	 *
	 * @param integer $poz        	
	 * @return Gramfoodklembowinwent
	 */
	public function setPoz($poz) {
		$this->poz = $poz;
		
		return $this;
	}
	
	/**
	 * Get poz
	 *
	 * @return integer
	 */
	public function getPoz() {
		return $this->poz;
	}
	
	/**
	 * Set data
	 *
	 * @param string $data        	
	 * @return Gramfoodklembowinwent
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
	 * @return Gramfoodklembowinwent
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
	 * @return Gramfoodklembowinwent
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
	 * @return Gramfoodklembowinwent
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
	 * Set jm
	 *
	 * @param string $jm        	
	 * @return Gramfoodklembowinwent
	 */
	public function setJm($jm) {
		$this->jm = $jm;
		
		return $this;
	}
	
	/**
	 * Get jm
	 *
	 * @return string
	 */
	public function getJm() {
		return $this->jm;
	}
	
	/**
	 * Set ka
	 *
	 * @param float $ka        	
	 * @return Gramfoodklembowinwent
	 */
	public function setKa($ka) {
		$this->ka = $ka;
		
		return $this;
	}
	
	/**
	 * Get ka
	 *
	 * @return float
	 */
	public function getKa() {
		return $this->ka;
	}
	
	/**
	 * Set sp
	 *
	 * @param float $sp        	
	 * @return Gramfoodklembowinwent
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
	 * Set ce
	 *
	 * @param float $ce        	
	 * @return Gramfoodklembowinwent
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
	 * Set idd
	 *
	 * @param string $idd        	
	 * @return Gramfoodklembowinwent
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
	 * Set rej
	 *
	 * @param string $rej        	
	 * @return Gramfoodklembowinwent
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
	 * Set akt
	 *
	 * @param string $akt        	
	 * @return Gramfoodklembowinwent
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
	 * @return Gramfoodklembowinwent
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
	 * @return Gramfoodklembowinwent
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
	 * Set gr
	 *
	 * @param string $gr        	
	 * @return Gramfoodklembowinwent
	 */
	public function setGr($gr) {
		$this->gr = $gr;
		
		return $this;
	}
	
	/**
	 * Get gr
	 *
	 * @return string
	 */
	public function getGr() {
		return $this->gr;
	}
	
	/**
	 * Set kk
	 *
	 * @param string $kk        	
	 * @return Gramfoodklembowinwent
	 */
	public function setKk($kk) {
		$this->kk = $kk;
		
		return $this;
	}
	
	/**
	 * Get kk
	 *
	 * @return string
	 */
	public function getKk() {
		return $this->kk;
	}
	
	/**
	 * Set oinw
	 *
	 * @param float $oinw        	
	 * @return Gramfoodklembowinwent
	 */
	public function setOinw($oinw) {
		$this->oinw = $oinw;
		
		return $this;
	}
	
	/**
	 * Get oinw
	 *
	 * @return float
	 */
	public function getOinw() {
		return $this->oinw;
	}
	
	/**
	 * Set ooinw
	 *
	 * @param float $ooinw        	
	 * @return Gramfoodklembowinwent
	 */
	public function setOoinw($ooinw) {
		$this->ooinw = $ooinw;
		
		return $this;
	}
	
	/**
	 * Get ooinw
	 *
	 * @return float
	 */
	public function getOoinw() {
		return $this->ooinw;
	}
	
	/**
	 * Set ceb
	 *
	 * @param float $ceb        	
	 * @return Gramfoodklembowinwent
	 */
	public function setCeb($ceb) {
		$this->ceb = $ceb;
		
		return $this;
	}
	
	/**
	 * Get ceb
	 *
	 * @return float
	 */
	public function getCeb() {
		return $this->ceb;
	}
	
	/**
	 * Set kat
	 *
	 * @param string $kat        	
	 * @return Gramfoodklembowinwent
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
	 * Set lokm
	 *
	 * @param string $lokm        	
	 * @return Gramfoodklembowinwent
	 */
	public function setLokm($lokm) {
		$this->lokm = $lokm;
		
		return $this;
	}
	
	/**
	 * Get lokm
	 *
	 * @return string
	 */
	public function getLokm() {
		return $this->lokm;
	}
}
