<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Gramfoodklembowklienci
 *
 * @ORM\Table(name="gramfoodklembowklienci")
 * @ORM\Entity
 */
class Gramfoodklembowklienci {
	/**
	 *
	 * @var string @ORM\Column(name="ID", type="string", length=50, nullable=false)
	 *      @ORM\Id
	 *      @ORM\GeneratedValue(strategy="IDENTITY")
	 */
	private $id;
	
	/**
	 *
	 * @var string @ORM\Column(name="IDz", type="string", length=50, nullable=true)
	 */
	private $idz;
	
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
	 * @var string @ORM\Column(name="Nazw", type="string", length=250, nullable=true)
	 */
	private $nazw;
	
	/**
	 *
	 * @var string @ORM\Column(name="Nazw2", type="string", length=250, nullable=true)
	 */
	private $nazw2;
	
	/**
	 *
	 * @var string @ORM\Column(name="Ulic", type="string", length=50, nullable=true)
	 */
	private $ulic;
	
	/**
	 *
	 * @var string @ORM\Column(name="Kodp", type="string", length=50, nullable=true)
	 */
	private $kodp;
	
	/**
	 *
	 * @var string @ORM\Column(name="Mias", type="string", length=50, nullable=true)
	 */
	private $mias;
	
	/**
	 *
	 * @var string @ORM\Column(name="NIPx", type="string", length=10, nullable=true)
	 */
	private $nipx;
	
	/**
	 *
	 * @var string @ORM\Column(name="NIP", type="string", length=50, nullable=true)
	 */
	private $nip;
	
	/**
	 *
	 * @var string @ORM\Column(name="Reg", type="string", length=50, nullable=true)
	 */
	private $reg;
	
	/**
	 *
	 * @var string @ORM\Column(name="Rodz", type="string", length=1, nullable=true)
	 */
	private $rodz;
	
	/**
	 *
	 * @var integer @ORM\Column(name="Stat", type="integer", nullable=true)
	 */
	private $stat;
	
	/**
	 *
	 * @var string @ORM\Column(name="OsU", type="string", length=50, nullable=true)
	 */
	private $osu;
	
	/**
	 *
	 * @var string @ORM\Column(name="REGPES", type="string", length=1, nullable=true)
	 */
	private $regpes;
	
	/**
	 *
	 * @var string @ORM\Column(name="Ceg", type="string", length=50, nullable=true)
	 */
	private $ceg;
	
	/**
	 *
	 * @var string @ORM\Column(name="t1", type="string", length=50, nullable=true)
	 */
	private $t1;
	
	/**
	 *
	 * @var string @ORM\Column(name="t2", type="string", length=50, nullable=true)
	 */
	private $t2;
	
	/**
	 *
	 * @var string @ORM\Column(name="tk", type="string", length=50, nullable=true)
	 */
	private $tk;
	
	/**
	 *
	 * @var string @ORM\Column(name="mail", type="string", length=100, nullable=true)
	 */
	private $mail;
	
	/**
	 *
	 * @var string @ORM\Column(name="www", type="string", length=100, nullable=true)
	 */
	private $www;
	
	/**
	 *
	 * @var string @ORM\Column(name="notk", type="text", length=16777215, nullable=true)
	 */
	private $notk;
	
	/**
	 *
	 * @var string @ORM\Column(name="Bank", type="string", length=50, nullable=true)
	 */
	private $bank;
	
	/**
	 *
	 * @var string @ORM\Column(name="BankN", type="string", length=50, nullable=true)
	 */
	private $bankn;
	
	/**
	 *
	 * @var string @ORM\Column(name="Swift", type="string", length=50, nullable=true)
	 */
	private $swift;
	
	/**
	 *
	 * @var string @ORM\Column(name="IDplat", type="string", length=100, nullable=true)
	 */
	private $idplat;
	
	/**
	 *
	 * @var string @ORM\Column(name="Gr", type="string", length=50, nullable=true)
	 */
	private $gr;
	
	/**
	 *
	 * @var string @ORM\Column(name="Fp", type="string", length=50, nullable=true)
	 */
	private $fp;
	
	/**
	 *
	 * @var integer @ORM\Column(name="Dni", type="integer", nullable=true)
	 */
	private $dni;
	
	/**
	 *
	 * @var integer @ORM\Column(name="Cen", type="integer", nullable=true)
	 */
	private $cen;
	
	/**
	 *
	 * @var float @ORM\Column(name="Rab", type="float", precision=10, scale=0, nullable=true)
	 */
	private $rab;
	
	/**
	 *
	 * @var string @ORM\Column(name="osoba", type="string", length=100, nullable=true)
	 */
	private $osoba;
	
	/**
	 *
	 * @var float @ORM\Column(name="Obr", type="float", precision=10, scale=0, nullable=true)
	 */
	private $obr;
	
	/**
	 *
	 * @var float @ORM\Column(name="Zal", type="float", precision=10, scale=0, nullable=true)
	 */
	private $zal;
	
	/**
	 *
	 * @var float @ORM\Column(name="Wasp", type="float", precision=10, scale=0, nullable=true)
	 */
	private $wasp;
	
	/**
	 *
	 * @var float @ORM\Column(name="Obsp", type="float", precision=10, scale=0, nullable=true)
	 */
	private $obsp;
	
	/**
	 *
	 * @var float @ORM\Column(name="Zasp", type="float", precision=10, scale=0, nullable=true)
	 */
	private $zasp;
	
	/**
	 *
	 * @var float @ORM\Column(name="Waza", type="float", precision=10, scale=0, nullable=true)
	 */
	private $waza;
	
	/**
	 *
	 * @var float @ORM\Column(name="Zaza", type="float", precision=10, scale=0, nullable=true)
	 */
	private $zaza;
	
	/**
	 *
	 * @var string @ORM\Column(name="KAdr", type="string", length=1, nullable=true)
	 */
	private $kadr;
	
	/**
	 *
	 * @var string @ORM\Column(name="KMias", type="string", length=50, nullable=true)
	 */
	private $kmias;
	
	/**
	 *
	 * @var string @ORM\Column(name="KUlic", type="string", length=50, nullable=true)
	 */
	private $kulic;
	
	/**
	 *
	 * @var string @ORM\Column(name="kKodp", type="string", length=10, nullable=true)
	 */
	private $kkodp;
	
	/**
	 *
	 * @var string @ORM\Column(name="GG", type="string", length=50, nullable=true)
	 */
	private $gg;
	
	/**
	 *
	 * @var string @ORM\Column(name="RR", type="string", length=250, nullable=true)
	 */
	private $rr;
	
	/**
	 *
	 * @var string @ORM\Column(name="Datnw", type="string", length=20, nullable=true)
	 */
	private $datnw;
	
	/**
	 *
	 * @var string @ORM\Column(name="LastW", type="string", length=20, nullable=true)
	 */
	private $lastw;
	
	/**
	 *
	 * @var string @ORM\Column(name="ksk", type="string", length=13, nullable=true)
	 */
	private $ksk;
	
	/**
	 *
	 * @var integer @ORM\Column(name="pkt", type="integer", nullable=true)
	 */
	private $pkt;
	
	/**
	 *
	 * @var string @ORM\Column(name="Ks", type="string", length=250, nullable=true)
	 */
	private $ks;
	
	/**
	 *
	 * @var string @ORM\Column(name="Kat", type="string", length=20, nullable=true)
	 */
	private $kat;
	
	/**
	 *
	 * @var string @ORM\Column(name="refer", type="string", length=50, nullable=true)
	 */
	private $refer;
	
	/**
	 *
	 * @var integer @ORM\Column(name="jez", type="integer", nullable=true)
	 */
	private $jez;
	
	/**
	 *
	 * @var string @ORM\Column(name="AdrD", type="string", length=200, nullable=true)
	 */
	private $adrd;
	
	/**
	 *
	 * @var string @ORM\Column(name="UZ", type="string", length=50, nullable=true)
	 */
	private $uz;
	
	/**
	 *
	 * @var string @ORM\Column(name="DZ", type="string", length=20, nullable=true)
	 */
	private $dz;
	
	/**
	 *
	 * @var string @ORM\Column(name="DZr", type="string", length=20, nullable=true)
	 */
	private $dzr;
	
	/**
	 *
	 * @var string @ORM\Column(name="Zglo", type="string", length=50, nullable=true)
	 */
	private $zglo;
	
	/**
	 *
	 * @var float @ORM\Column(name="lat", type="float", precision=10, scale=0, nullable=true)
	 */
	private $lat;
	
	/**
	 *
	 * @var float @ORM\Column(name="lon", type="float", precision=10, scale=0, nullable=true)
	 */
	private $lon;
	
	/**
	 *
	 * @var string @ORM\Column(name="Te", type="string", length=250, nullable=true)
	 */
	private $te;
	
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
	 * @var string @ORM\Column(name="Tem", type="string", length=80, nullable=true)
	 */
	private $tem;
	
	/**
	 *
	 * @var string @ORM\Column(name="DataL", type="string", length=50, nullable=true)
	 */
	private $datal;
	
	/**
	 *
	 * @var string @ORM\Column(name="Blok", type="string", length=5, nullable=true)
	 */
	private $blok;
	
	/**
	 *
	 * @var string @ORM\Column(name="kolo", type="string", length=10, nullable=true)
	 */
	private $kolo;
	
	/**
	 *
	 * @var string @ORM\Column(name="kraj", type="string", length=50, nullable=true)
	 */
	private $kraj;
	
	/**
	 *
	 * @var string @ORM\Column(name="OW", type="string", length=50, nullable=true)
	 */
	private $ow;
	
	/**
	 *
	 * @var string @ORM\Column(name="iNET", type="string", length=1, nullable=true)
	 */
	private $inet;
	
	/**
	 *
	 * @var integer @ORM\Column(name="nID", type="integer", nullable=true)
	 */
	private $nid;
	
	/**
	 *
	 * @var string @ORM\Column(name="Log", type="string", length=50, nullable=true)
	 */
	private $log;
	
	/**
	 *
	 * @var string @ORM\Column(name="Dp", type="string", length=12, nullable=true)
	 */
	private $dp;
	
	/**
	 * Get id
	 *
	 * @return string
	 */
	public function getId() {
		return $this->id;
	}
	
	/**
	 * Set idz
	 *
	 * @param string $idz        	
	 * @return Gramfoodklembowklienci
	 */
	public function setIdz($idz) {
		$this->idz = $idz;
		
		return $this;
	}
	
	/**
	 * Get idz
	 *
	 * @return string
	 */
	public function getIdz() {
		return $this->idz;
	}
	
	/**
	 * Set alias
	 *
	 * @param string $alias        	
	 * @return Gramfoodklembowklienci
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
	 * @return Gramfoodklembowklienci
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
	 * Set nazw
	 *
	 * @param string $nazw        	
	 * @return Gramfoodklembowklienci
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
	 * @return Gramfoodklembowklienci
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
	 * Set ulic
	 *
	 * @param string $ulic        	
	 * @return Gramfoodklembowklienci
	 */
	public function setUlic($ulic) {
		$this->ulic = $ulic;
		
		return $this;
	}
	
	/**
	 * Get ulic
	 *
	 * @return string
	 */
	public function getUlic() {
		return $this->ulic;
	}
	
	/**
	 * Set kodp
	 *
	 * @param string $kodp        	
	 * @return Gramfoodklembowklienci
	 */
	public function setKodp($kodp) {
		$this->kodp = $kodp;
		
		return $this;
	}
	
	/**
	 * Get kodp
	 *
	 * @return string
	 */
	public function getKodp() {
		return $this->kodp;
	}
	
	/**
	 * Set mias
	 *
	 * @param string $mias        	
	 * @return Gramfoodklembowklienci
	 */
	public function setMias($mias) {
		$this->mias = $mias;
		
		return $this;
	}
	
	/**
	 * Get mias
	 *
	 * @return string
	 */
	public function getMias() {
		return $this->mias;
	}
	
	/**
	 * Set nipx
	 *
	 * @param string $nipx        	
	 * @return Gramfoodklembowklienci
	 */
	public function setNipx($nipx) {
		$this->nipx = $nipx;
		
		return $this;
	}
	
	/**
	 * Get nipx
	 *
	 * @return string
	 */
	public function getNipx() {
		return $this->nipx;
	}
	
	/**
	 * Set nip
	 *
	 * @param string $nip        	
	 * @return Gramfoodklembowklienci
	 */
	public function setNip($nip) {
		$this->nip = $nip;
		
		return $this;
	}
	
	/**
	 * Get nip
	 *
	 * @return string
	 */
	public function getNip() {
		return $this->nip;
	}
	
	/**
	 * Set reg
	 *
	 * @param string $reg        	
	 * @return Gramfoodklembowklienci
	 */
	public function setReg($reg) {
		$this->reg = $reg;
		
		return $this;
	}
	
	/**
	 * Get reg
	 *
	 * @return string
	 */
	public function getReg() {
		return $this->reg;
	}
	
	/**
	 * Set rodz
	 *
	 * @param string $rodz        	
	 * @return Gramfoodklembowklienci
	 */
	public function setRodz($rodz) {
		$this->rodz = $rodz;
		
		return $this;
	}
	
	/**
	 * Get rodz
	 *
	 * @return string
	 */
	public function getRodz() {
		return $this->rodz;
	}
	
	/**
	 * Set stat
	 *
	 * @param integer $stat        	
	 * @return Gramfoodklembowklienci
	 */
	public function setStat($stat) {
		$this->stat = $stat;
		
		return $this;
	}
	
	/**
	 * Get stat
	 *
	 * @return integer
	 */
	public function getStat() {
		return $this->stat;
	}
	
	/**
	 * Set osu
	 *
	 * @param string $osu        	
	 * @return Gramfoodklembowklienci
	 */
	public function setOsu($osu) {
		$this->osu = $osu;
		
		return $this;
	}
	
	/**
	 * Get osu
	 *
	 * @return string
	 */
	public function getOsu() {
		return $this->osu;
	}
	
	/**
	 * Set regpes
	 *
	 * @param string $regpes        	
	 * @return Gramfoodklembowklienci
	 */
	public function setRegpes($regpes) {
		$this->regpes = $regpes;
		
		return $this;
	}
	
	/**
	 * Get regpes
	 *
	 * @return string
	 */
	public function getRegpes() {
		return $this->regpes;
	}
	
	/**
	 * Set ceg
	 *
	 * @param string $ceg        	
	 * @return Gramfoodklembowklienci
	 */
	public function setCeg($ceg) {
		$this->ceg = $ceg;
		
		return $this;
	}
	
	/**
	 * Get ceg
	 *
	 * @return string
	 */
	public function getCeg() {
		return $this->ceg;
	}
	
	/**
	 * Set t1
	 *
	 * @param string $t1        	
	 * @return Gramfoodklembowklienci
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
	 * Set t2
	 *
	 * @param string $t2        	
	 * @return Gramfoodklembowklienci
	 */
	public function setT2($t2) {
		$this->t2 = $t2;
		
		return $this;
	}
	
	/**
	 * Get t2
	 *
	 * @return string
	 */
	public function getT2() {
		return $this->t2;
	}
	
	/**
	 * Set tk
	 *
	 * @param string $tk        	
	 * @return Gramfoodklembowklienci
	 */
	public function setTk($tk) {
		$this->tk = $tk;
		
		return $this;
	}
	
	/**
	 * Get tk
	 *
	 * @return string
	 */
	public function getTk() {
		return $this->tk;
	}
	
	/**
	 * Set mail
	 *
	 * @param string $mail        	
	 * @return Gramfoodklembowklienci
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
	 * Set www
	 *
	 * @param string $www        	
	 * @return Gramfoodklembowklienci
	 */
	public function setWww($www) {
		$this->www = $www;
		
		return $this;
	}
	
	/**
	 * Get www
	 *
	 * @return string
	 */
	public function getWww() {
		return $this->www;
	}
	
	/**
	 * Set notk
	 *
	 * @param string $notk        	
	 * @return Gramfoodklembowklienci
	 */
	public function setNotk($notk) {
		$this->notk = $notk;
		
		return $this;
	}
	
	/**
	 * Get notk
	 *
	 * @return string
	 */
	public function getNotk() {
		return $this->notk;
	}
	
	/**
	 * Set bank
	 *
	 * @param string $bank        	
	 * @return Gramfoodklembowklienci
	 */
	public function setBank($bank) {
		$this->bank = $bank;
		
		return $this;
	}
	
	/**
	 * Get bank
	 *
	 * @return string
	 */
	public function getBank() {
		return $this->bank;
	}
	
	/**
	 * Set bankn
	 *
	 * @param string $bankn        	
	 * @return Gramfoodklembowklienci
	 */
	public function setBankn($bankn) {
		$this->bankn = $bankn;
		
		return $this;
	}
	
	/**
	 * Get bankn
	 *
	 * @return string
	 */
	public function getBankn() {
		return $this->bankn;
	}
	
	/**
	 * Set swift
	 *
	 * @param string $swift        	
	 * @return Gramfoodklembowklienci
	 */
	public function setSwift($swift) {
		$this->swift = $swift;
		
		return $this;
	}
	
	/**
	 * Get swift
	 *
	 * @return string
	 */
	public function getSwift() {
		return $this->swift;
	}
	
	/**
	 * Set idplat
	 *
	 * @param string $idplat        	
	 * @return Gramfoodklembowklienci
	 */
	public function setIdplat($idplat) {
		$this->idplat = $idplat;
		
		return $this;
	}
	
	/**
	 * Get idplat
	 *
	 * @return string
	 */
	public function getIdplat() {
		return $this->idplat;
	}
	
	/**
	 * Set gr
	 *
	 * @param string $gr        	
	 * @return Gramfoodklembowklienci
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
	 * Set fp
	 *
	 * @param string $fp        	
	 * @return Gramfoodklembowklienci
	 */
	public function setFp($fp) {
		$this->fp = $fp;
		
		return $this;
	}
	
	/**
	 * Get fp
	 *
	 * @return string
	 */
	public function getFp() {
		return $this->fp;
	}
	
	/**
	 * Set dni
	 *
	 * @param integer $dni        	
	 * @return Gramfoodklembowklienci
	 */
	public function setDni($dni) {
		$this->dni = $dni;
		
		return $this;
	}
	
	/**
	 * Get dni
	 *
	 * @return integer
	 */
	public function getDni() {
		return $this->dni;
	}
	
	/**
	 * Set cen
	 *
	 * @param integer $cen        	
	 * @return Gramfoodklembowklienci
	 */
	public function setCen($cen) {
		$this->cen = $cen;
		
		return $this;
	}
	
	/**
	 * Get cen
	 *
	 * @return integer
	 */
	public function getCen() {
		return $this->cen;
	}
	
	/**
	 * Set rab
	 *
	 * @param float $rab        	
	 * @return Gramfoodklembowklienci
	 */
	public function setRab($rab) {
		$this->rab = $rab;
		
		return $this;
	}
	
	/**
	 * Get rab
	 *
	 * @return float
	 */
	public function getRab() {
		return $this->rab;
	}
	
	/**
	 * Set osoba
	 *
	 * @param string $osoba        	
	 * @return Gramfoodklembowklienci
	 */
	public function setOsoba($osoba) {
		$this->osoba = $osoba;
		
		return $this;
	}
	
	/**
	 * Get osoba
	 *
	 * @return string
	 */
	public function getOsoba() {
		return $this->osoba;
	}
	
	/**
	 * Set obr
	 *
	 * @param float $obr        	
	 * @return Gramfoodklembowklienci
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
	
	/**
	 * Set zal
	 *
	 * @param float $zal        	
	 * @return Gramfoodklembowklienci
	 */
	public function setZal($zal) {
		$this->zal = $zal;
		
		return $this;
	}
	
	/**
	 * Get zal
	 *
	 * @return float
	 */
	public function getZal() {
		return $this->zal;
	}
	
	/**
	 * Set wasp
	 *
	 * @param float $wasp        	
	 * @return Gramfoodklembowklienci
	 */
	public function setWasp($wasp) {
		$this->wasp = $wasp;
		
		return $this;
	}
	
	/**
	 * Get wasp
	 *
	 * @return float
	 */
	public function getWasp() {
		return $this->wasp;
	}
	
	/**
	 * Set obsp
	 *
	 * @param float $obsp        	
	 * @return Gramfoodklembowklienci
	 */
	public function setObsp($obsp) {
		$this->obsp = $obsp;
		
		return $this;
	}
	
	/**
	 * Get obsp
	 *
	 * @return float
	 */
	public function getObsp() {
		return $this->obsp;
	}
	
	/**
	 * Set zasp
	 *
	 * @param float $zasp        	
	 * @return Gramfoodklembowklienci
	 */
	public function setZasp($zasp) {
		$this->zasp = $zasp;
		
		return $this;
	}
	
	/**
	 * Get zasp
	 *
	 * @return float
	 */
	public function getZasp() {
		return $this->zasp;
	}
	
	/**
	 * Set waza
	 *
	 * @param float $waza        	
	 * @return Gramfoodklembowklienci
	 */
	public function setWaza($waza) {
		$this->waza = $waza;
		
		return $this;
	}
	
	/**
	 * Get waza
	 *
	 * @return float
	 */
	public function getWaza() {
		return $this->waza;
	}
	
	/**
	 * Set zaza
	 *
	 * @param float $zaza        	
	 * @return Gramfoodklembowklienci
	 */
	public function setZaza($zaza) {
		$this->zaza = $zaza;
		
		return $this;
	}
	
	/**
	 * Get zaza
	 *
	 * @return float
	 */
	public function getZaza() {
		return $this->zaza;
	}
	
	/**
	 * Set kadr
	 *
	 * @param string $kadr        	
	 * @return Gramfoodklembowklienci
	 */
	public function setKadr($kadr) {
		$this->kadr = $kadr;
		
		return $this;
	}
	
	/**
	 * Get kadr
	 *
	 * @return string
	 */
	public function getKadr() {
		return $this->kadr;
	}
	
	/**
	 * Set kmias
	 *
	 * @param string $kmias        	
	 * @return Gramfoodklembowklienci
	 */
	public function setKmias($kmias) {
		$this->kmias = $kmias;
		
		return $this;
	}
	
	/**
	 * Get kmias
	 *
	 * @return string
	 */
	public function getKmias() {
		return $this->kmias;
	}
	
	/**
	 * Set kulic
	 *
	 * @param string $kulic        	
	 * @return Gramfoodklembowklienci
	 */
	public function setKulic($kulic) {
		$this->kulic = $kulic;
		
		return $this;
	}
	
	/**
	 * Get kulic
	 *
	 * @return string
	 */
	public function getKulic() {
		return $this->kulic;
	}
	
	/**
	 * Set kkodp
	 *
	 * @param string $kkodp        	
	 * @return Gramfoodklembowklienci
	 */
	public function setKkodp($kkodp) {
		$this->kkodp = $kkodp;
		
		return $this;
	}
	
	/**
	 * Get kkodp
	 *
	 * @return string
	 */
	public function getKkodp() {
		return $this->kkodp;
	}
	
	/**
	 * Set gg
	 *
	 * @param string $gg        	
	 * @return Gramfoodklembowklienci
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
	 * Set rr
	 *
	 * @param string $rr        	
	 * @return Gramfoodklembowklienci
	 */
	public function setRr($rr) {
		$this->rr = $rr;
		
		return $this;
	}
	
	/**
	 * Get rr
	 *
	 * @return string
	 */
	public function getRr() {
		return $this->rr;
	}
	
	/**
	 * Set datnw
	 *
	 * @param string $datnw        	
	 * @return Gramfoodklembowklienci
	 */
	public function setDatnw($datnw) {
		$this->datnw = $datnw;
		
		return $this;
	}
	
	/**
	 * Get datnw
	 *
	 * @return string
	 */
	public function getDatnw() {
		return $this->datnw;
	}
	
	/**
	 * Set lastw
	 *
	 * @param string $lastw        	
	 * @return Gramfoodklembowklienci
	 */
	public function setLastw($lastw) {
		$this->lastw = $lastw;
		
		return $this;
	}
	
	/**
	 * Get lastw
	 *
	 * @return string
	 */
	public function getLastw() {
		return $this->lastw;
	}
	
	/**
	 * Set ksk
	 *
	 * @param string $ksk        	
	 * @return Gramfoodklembowklienci
	 */
	public function setKsk($ksk) {
		$this->ksk = $ksk;
		
		return $this;
	}
	
	/**
	 * Get ksk
	 *
	 * @return string
	 */
	public function getKsk() {
		return $this->ksk;
	}
	
	/**
	 * Set pkt
	 *
	 * @param integer $pkt        	
	 * @return Gramfoodklembowklienci
	 */
	public function setPkt($pkt) {
		$this->pkt = $pkt;
		
		return $this;
	}
	
	/**
	 * Get pkt
	 *
	 * @return integer
	 */
	public function getPkt() {
		return $this->pkt;
	}
	
	/**
	 * Set ks
	 *
	 * @param string $ks        	
	 * @return Gramfoodklembowklienci
	 */
	public function setKs($ks) {
		$this->ks = $ks;
		
		return $this;
	}
	
	/**
	 * Get ks
	 *
	 * @return string
	 */
	public function getKs() {
		return $this->ks;
	}
	
	/**
	 * Set kat
	 *
	 * @param string $kat        	
	 * @return Gramfoodklembowklienci
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
	 * Set refer
	 *
	 * @param string $refer        	
	 * @return Gramfoodklembowklienci
	 */
	public function setRefer($refer) {
		$this->refer = $refer;
		
		return $this;
	}
	
	/**
	 * Get refer
	 *
	 * @return string
	 */
	public function getRefer() {
		return $this->refer;
	}
	
	/**
	 * Set jez
	 *
	 * @param integer $jez        	
	 * @return Gramfoodklembowklienci
	 */
	public function setJez($jez) {
		$this->jez = $jez;
		
		return $this;
	}
	
	/**
	 * Get jez
	 *
	 * @return integer
	 */
	public function getJez() {
		return $this->jez;
	}
	
	/**
	 * Set adrd
	 *
	 * @param string $adrd        	
	 * @return Gramfoodklembowklienci
	 */
	public function setAdrd($adrd) {
		$this->adrd = $adrd;
		
		return $this;
	}
	
	/**
	 * Get adrd
	 *
	 * @return string
	 */
	public function getAdrd() {
		return $this->adrd;
	}
	
	/**
	 * Set uz
	 *
	 * @param string $uz        	
	 * @return Gramfoodklembowklienci
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
	 * Set dz
	 *
	 * @param string $dz        	
	 * @return Gramfoodklembowklienci
	 */
	public function setDz($dz) {
		$this->dz = $dz;
		
		return $this;
	}
	
	/**
	 * Get dz
	 *
	 * @return string
	 */
	public function getDz() {
		return $this->dz;
	}
	
	/**
	 * Set dzr
	 *
	 * @param string $dzr        	
	 * @return Gramfoodklembowklienci
	 */
	public function setDzr($dzr) {
		$this->dzr = $dzr;
		
		return $this;
	}
	
	/**
	 * Get dzr
	 *
	 * @return string
	 */
	public function getDzr() {
		return $this->dzr;
	}
	
	/**
	 * Set zglo
	 *
	 * @param string $zglo        	
	 * @return Gramfoodklembowklienci
	 */
	public function setZglo($zglo) {
		$this->zglo = $zglo;
		
		return $this;
	}
	
	/**
	 * Get zglo
	 *
	 * @return string
	 */
	public function getZglo() {
		return $this->zglo;
	}
	
	/**
	 * Set lat
	 *
	 * @param float $lat        	
	 * @return Gramfoodklembowklienci
	 */
	public function setLat($lat) {
		$this->lat = $lat;
		
		return $this;
	}
	
	/**
	 * Get lat
	 *
	 * @return float
	 */
	public function getLat() {
		return $this->lat;
	}
	
	/**
	 * Set lon
	 *
	 * @param float $lon        	
	 * @return Gramfoodklembowklienci
	 */
	public function setLon($lon) {
		$this->lon = $lon;
		
		return $this;
	}
	
	/**
	 * Get lon
	 *
	 * @return float
	 */
	public function getLon() {
		return $this->lon;
	}
	
	/**
	 * Set te
	 *
	 * @param string $te        	
	 * @return Gramfoodklembowklienci
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
	 * Set akt
	 *
	 * @param string $akt        	
	 * @return Gramfoodklembowklienci
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
	 * @return Gramfoodklembowklienci
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
	 * @return Gramfoodklembowklienci
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
	 * Set tem
	 *
	 * @param string $tem        	
	 * @return Gramfoodklembowklienci
	 */
	public function setTem($tem) {
		$this->tem = $tem;
		
		return $this;
	}
	
	/**
	 * Get tem
	 *
	 * @return string
	 */
	public function getTem() {
		return $this->tem;
	}
	
	/**
	 * Set datal
	 *
	 * @param string $datal        	
	 * @return Gramfoodklembowklienci
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
	
	/**
	 * Set blok
	 *
	 * @param string $blok        	
	 * @return Gramfoodklembowklienci
	 */
	public function setBlok($blok) {
		$this->blok = $blok;
		
		return $this;
	}
	
	/**
	 * Get blok
	 *
	 * @return string
	 */
	public function getBlok() {
		return $this->blok;
	}
	
	/**
	 * Set kolo
	 *
	 * @param string $kolo        	
	 * @return Gramfoodklembowklienci
	 */
	public function setKolo($kolo) {
		$this->kolo = $kolo;
		
		return $this;
	}
	
	/**
	 * Get kolo
	 *
	 * @return string
	 */
	public function getKolo() {
		return $this->kolo;
	}
	
	/**
	 * Set kraj
	 *
	 * @param string $kraj        	
	 * @return Gramfoodklembowklienci
	 */
	public function setKraj($kraj) {
		$this->kraj = $kraj;
		
		return $this;
	}
	
	/**
	 * Get kraj
	 *
	 * @return string
	 */
	public function getKraj() {
		return $this->kraj;
	}
	
	/**
	 * Set ow
	 *
	 * @param string $ow        	
	 * @return Gramfoodklembowklienci
	 */
	public function setOw($ow) {
		$this->ow = $ow;
		
		return $this;
	}
	
	/**
	 * Get ow
	 *
	 * @return string
	 */
	public function getOw() {
		return $this->ow;
	}
	
	/**
	 * Set inet
	 *
	 * @param string $inet        	
	 * @return Gramfoodklembowklienci
	 */
	public function setInet($inet) {
		$this->inet = $inet;
		
		return $this;
	}
	
	/**
	 * Get inet
	 *
	 * @return string
	 */
	public function getInet() {
		return $this->inet;
	}
	
	/**
	 * Set nid
	 *
	 * @param integer $nid        	
	 * @return Gramfoodklembowklienci
	 */
	public function setNid($nid) {
		$this->nid = $nid;
		
		return $this;
	}
	
	/**
	 * Get nid
	 *
	 * @return integer
	 */
	public function getNid() {
		return $this->nid;
	}
	
	/**
	 * Set log
	 *
	 * @param string $log        	
	 * @return Gramfoodklembowklienci
	 */
	public function setLog($log) {
		$this->log = $log;
		
		return $this;
	}
	
	/**
	 * Get log
	 *
	 * @return string
	 */
	public function getLog() {
		return $this->log;
	}
	
	/**
	 * Set dp
	 *
	 * @param string $dp        	
	 * @return Gramfoodklembowklienci
	 */
	public function setDp($dp) {
		$this->dp = $dp;
		
		return $this;
	}
	
	/**
	 * Get dp
	 *
	 * @return string
	 */
	public function getDp() {
		return $this->dp;
	}
}
