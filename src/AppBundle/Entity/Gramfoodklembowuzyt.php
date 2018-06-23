<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Gramfoodklembowuzyt
 *
 * @ORM\Table(name="gramfoodklembowuzyt")
 * @ORM\Entity
 */
class Gramfoodklembowuzyt {
	/**
	 *
	 * @var string @ORM\Column(name="ID", type="string", length=50, nullable=false)
	 *      @ORM\Id
	 *      @ORM\GeneratedValue(strategy="IDENTITY")
	 */
	private $id;
	
	/**
	 *
	 * @var string @ORM\Column(name="Alias", type="string", length=50, nullable=true)
	 */
	private $alias;
	
	/**
	 *
	 * @var string @ORM\Column(name="Hasl", type="string", length=50, nullable=true)
	 */
	private $hasl;
	
	/**
	 *
	 * @var string @ORM\Column(name="Imie", type="string", length=100, nullable=true)
	 */
	private $imie;
	
	/**
	 *
	 * @var string @ORM\Column(name="Nazw", type="string", length=100, nullable=true)
	 */
	private $nazw;
	
	/**
	 *
	 * @var string @ORM\Column(name="UP", type="string", length=1, nullable=true)
	 */
	private $up;
	
	/**
	 *
	 * @var string @ORM\Column(name="dok", type="string", length=10, nullable=true)
	 */
	private $dok;
	
	/**
	 *
	 * @var string @ORM\Column(name="Prawa", type="text", length=16777215, nullable=true)
	 */
	private $prawa;
	
	/**
	 *
	 * @var string @ORM\Column(name="Doku", type="text", length=16777215, nullable=true)
	 */
	private $doku;
	
	/**
	 *
	 * @var string @ORM\Column(name="NA", type="string", length=1, nullable=true)
	 */
	private $na;
	
	/**
	 *
	 * @var string @ORM\Column(name="TU", type="string", length=1, nullable=true)
	 */
	private $tu;
	
	/**
	 *
	 * @var string @ORM\Column(name="Mail", type="string", length=50, nullable=true)
	 */
	private $mail;
	
	/**
	 *
	 * @var string @ORM\Column(name="T1", type="string", length=50, nullable=true)
	 */
	private $t1;
	
	/**
	 *
	 * @var string @ORM\Column(name="GG", type="string", length=50, nullable=true)
	 */
	private $gg;
	
	/**
	 *
	 * @var string @ORM\Column(name="Ul", type="string", length=50, nullable=true)
	 */
	private $ul;
	
	/**
	 *
	 * @var string @ORM\Column(name="Mi", type="string", length=50, nullable=true)
	 */
	private $mi;
	
	/**
	 *
	 * @var string @ORM\Column(name="Ko", type="string", length=50, nullable=true)
	 */
	private $ko;
	
	/**
	 *
	 * @var string @ORM\Column(name="Prof", type="string", length=50, nullable=true)
	 */
	private $prof;
	
	/**
	 *
	 * @var string @ORM\Column(name="AliasD", type="string", length=50, nullable=true)
	 */
	private $aliasd;
	
	/**
	 *
	 * @var string @ORM\Column(name="IDD", type="string", length=50, nullable=true)
	 */
	private $idd;
	
	/**
	 *
	 * @var string @ORM\Column(name="info", type="text", length=16777215, nullable=true)
	 */
	private $info;
	
	/**
	 *
	 * @var integer @ORM\Column(name="Lok", type="integer", nullable=true)
	 */
	private $lok;
	
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
	 * @var float @ORM\Column(name="KwZat", type="float", precision=10, scale=0, nullable=true)
	 */
	private $kwzat;
	
	/**
	 *
	 * @var integer @ORM\Column(name="kol", type="integer", nullable=true)
	 */
	private $kol;
	
	/**
	 * Get id
	 *
	 * @return string
	 */
	public function getId() {
		return $this->id;
	}
	
	/**
	 * Set alias
	 *
	 * @param string $alias        	
	 * @return Gramfoodklembowuzyt
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
	 * Set hasl
	 *
	 * @param string $hasl        	
	 * @return Gramfoodklembowuzyt
	 */
	public function setHasl($hasl) {
		$this->hasl = $hasl;
		
		return $this;
	}
	
	/**
	 * Get hasl
	 *
	 * @return string
	 */
	public function getHasl() {
		return $this->hasl;
	}
	
	/**
	 * Set imie
	 *
	 * @param string $imie        	
	 * @return Gramfoodklembowuzyt
	 */
	public function setImie($imie) {
		$this->imie = $imie;
		
		return $this;
	}
	
	/**
	 * Get imie
	 *
	 * @return string
	 */
	public function getImie() {
		return $this->imie;
	}
	
	/**
	 * Set nazw
	 *
	 * @param string $nazw        	
	 * @return Gramfoodklembowuzyt
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
	 * Set up
	 *
	 * @param string $up        	
	 * @return Gramfoodklembowuzyt
	 */
	public function setUp($up) {
		$this->up = $up;
		
		return $this;
	}
	
	/**
	 * Get up
	 *
	 * @return string
	 */
	public function getUp() {
		return $this->up;
	}
	
	/**
	 * Set dok
	 *
	 * @param string $dok        	
	 * @return Gramfoodklembowuzyt
	 */
	public function setDok($dok) {
		$this->dok = $dok;
		
		return $this;
	}
	
	/**
	 * Get dok
	 *
	 * @return string
	 */
	public function getDok() {
		return $this->dok;
	}
	
	/**
	 * Set prawa
	 *
	 * @param string $prawa        	
	 * @return Gramfoodklembowuzyt
	 */
	public function setPrawa($prawa) {
		$this->prawa = $prawa;
		
		return $this;
	}
	
	/**
	 * Get prawa
	 *
	 * @return string
	 */
	public function getPrawa() {
		return $this->prawa;
	}
	
	/**
	 * Set doku
	 *
	 * @param string $doku        	
	 * @return Gramfoodklembowuzyt
	 */
	public function setDoku($doku) {
		$this->doku = $doku;
		
		return $this;
	}
	
	/**
	 * Get doku
	 *
	 * @return string
	 */
	public function getDoku() {
		return $this->doku;
	}
	
	/**
	 * Set na
	 *
	 * @param string $na        	
	 * @return Gramfoodklembowuzyt
	 */
	public function setNa($na) {
		$this->na = $na;
		
		return $this;
	}
	
	/**
	 * Get na
	 *
	 * @return string
	 */
	public function getNa() {
		return $this->na;
	}
	
	/**
	 * Set tu
	 *
	 * @param string $tu        	
	 * @return Gramfoodklembowuzyt
	 */
	public function setTu($tu) {
		$this->tu = $tu;
		
		return $this;
	}
	
	/**
	 * Get tu
	 *
	 * @return string
	 */
	public function getTu() {
		return $this->tu;
	}
	
	/**
	 * Set mail
	 *
	 * @param string $mail        	
	 * @return Gramfoodklembowuzyt
	 */
	public function setMail($mail) {
		$this->mail = $mail;
		
		return $this;
	}
	
	/**
	 * Get mail
	 *
	 * @return string
	 */
	public function getMail() {
		return $this->mail;
	}
	
	/**
	 * Set t1
	 *
	 * @param string $t1        	
	 * @return Gramfoodklembowuzyt
	 */
	public function setT1($t1) {
		$this->t1 = $t1;
		
		return $this;
	}
	
	/**
	 * Get t1
	 *
	 * @return string
	 */
	public function getT1() {
		return $this->t1;
	}
	
	/**
	 * Set gg
	 *
	 * @param string $gg        	
	 * @return Gramfoodklembowuzyt
	 */
	public function setGg($gg) {
		$this->gg = $gg;
		
		return $this;
	}
	
	/**
	 * Get gg
	 *
	 * @return string
	 */
	public function getGg() {
		return $this->gg;
	}
	
	/**
	 * Set ul
	 *
	 * @param string $ul        	
	 * @return Gramfoodklembowuzyt
	 */
	public function setUl($ul) {
		$this->ul = $ul;
		
		return $this;
	}
	
	/**
	 * Get ul
	 *
	 * @return string
	 */
	public function getUl() {
		return $this->ul;
	}
	
	/**
	 * Set mi
	 *
	 * @param string $mi        	
	 * @return Gramfoodklembowuzyt
	 */
	public function setMi($mi) {
		$this->mi = $mi;
		
		return $this;
	}
	
	/**
	 * Get mi
	 *
	 * @return string
	 */
	public function getMi() {
		return $this->mi;
	}
	
	/**
	 * Set ko
	 *
	 * @param string $ko        	
	 * @return Gramfoodklembowuzyt
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
	 * Set prof
	 *
	 * @param string $prof        	
	 * @return Gramfoodklembowuzyt
	 */
	public function setProf($prof) {
		$this->prof = $prof;
		
		return $this;
	}
	
	/**
	 * Get prof
	 *
	 * @return string
	 */
	public function getProf() {
		return $this->prof;
	}
	
	/**
	 * Set aliasd
	 *
	 * @param string $aliasd        	
	 * @return Gramfoodklembowuzyt
	 */
	public function setAliasd($aliasd) {
		$this->aliasd = $aliasd;
		
		return $this;
	}
	
	/**
	 * Get aliasd
	 *
	 * @return string
	 */
	public function getAliasd() {
		return $this->aliasd;
	}
	
	/**
	 * Set idd
	 *
	 * @param string $idd        	
	 * @return Gramfoodklembowuzyt
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
	 * Set info
	 *
	 * @param string $info        	
	 * @return Gramfoodklembowuzyt
	 */
	public function setInfo($info) {
		$this->info = $info;
		
		return $this;
	}
	
	/**
	 * Get info
	 *
	 * @return string
	 */
	public function getInfo() {
		return $this->info;
	}
	
	/**
	 * Set lok
	 *
	 * @param integer $lok        	
	 * @return Gramfoodklembowuzyt
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
	 * Set anul
	 *
	 * @param string $anul        	
	 * @return Gramfoodklembowuzyt
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
	 * @return Gramfoodklembowuzyt
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
	 * @return Gramfoodklembowuzyt
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
	 * Set kwzat
	 *
	 * @param float $kwzat        	
	 * @return Gramfoodklembowuzyt
	 */
	public function setKwzat($kwzat) {
		$this->kwzat = $kwzat;
		
		return $this;
	}
	
	/**
	 * Get kwzat
	 *
	 * @return float
	 */
	public function getKwzat() {
		return $this->kwzat;
	}
	
	/**
	 * Set kol
	 *
	 * @param integer $kol        	
	 * @return Gramfoodklembowuzyt
	 */
	public function setKol($kol) {
		$this->kol = $kol;
		
		return $this;
	}
	
	/**
	 * Get kol
	 *
	 * @return integer
	 */
	public function getKol() {
		return $this->kol;
	}
}
