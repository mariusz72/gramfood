<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Gramfoodklembowzams
 *
 * @ORM\Table(name="gramfoodklembowzams")
 * @ORM\Entity
 */
class Gramfoodklembowzams {
	/**
	 *
	 * @var string @ORM\Column(name="ID", type="string", length=50, nullable=false)
	 *      @ORM\Id
	 *      @ORM\GeneratedValue(strategy="IDENTITY")
	 */
	private $id;
	
	/**
	 *
	 * @var string @ORM\Column(name="Ro", type="string", length=1, nullable=true)
	 */
	private $ro;
	
	/**
	 *
	 * @var integer @ORM\Column(name="Stan", type="integer", nullable=true)
	 */
	private $stan;
	
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
	 * @var string @ORM\Column(name="NIP", type="string", length=50, nullable=true)
	 */
	private $nip;
	
	/**
	 *
	 * @var integer @ORM\Column(name="Nr", type="integer", nullable=true)
	 */
	private $nr;
	
	/**
	 *
	 * @var string @ORM\Column(name="Rej", type="string", length=50, nullable=true)
	 */
	private $rej;
	
	/**
	 *
	 * @var string @ORM\Column(name="Rok", type="string", length=50, nullable=true)
	 */
	private $rok;
	
	/**
	 *
	 * @var string @ORM\Column(name="Mc", type="string", length=20, nullable=true)
	 */
	private $mc;
	
	/**
	 *
	 * @var string @ORM\Column(name="NrR", type="string", length=50, nullable=true)
	 */
	private $nrr;
	
	/**
	 *
	 * @var string @ORM\Column(name="DWy", type="string", length=50, nullable=true)
	 */
	private $dwy;
	
	/**
	 *
	 * @var string @ORM\Column(name="Data", type="string", length=20, nullable=true)
	 */
	private $data;
	
	/**
	 *
	 * @var float @ORM\Column(name="N0", type="float", precision=10, scale=0, nullable=true)
	 */
	private $n0;
	
	/**
	 *
	 * @var float @ORM\Column(name="Wart", type="float", precision=10, scale=0, nullable=true)
	 */
	private $wart;
	
	/**
	 *
	 * @var string @ORM\Column(name="NB", type="string", length=1, nullable=true)
	 */
	private $nb;
	
	/**
	 *
	 * @var float @ORM\Column(name="WWart", type="float", precision=10, scale=0, nullable=true)
	 */
	private $wwart;
	
	/**
	 *
	 * @var string @ORM\Column(name="Wal", type="string", length=10, nullable=true)
	 */
	private $wal;
	
	/**
	 *
	 * @var float @ORM\Column(name="Kurs", type="float", precision=10, scale=0, nullable=true)
	 */
	private $kurs;
	
	/**
	 *
	 * @var integer @ORM\Column(name="przel", type="integer", nullable=true)
	 */
	private $przel;
	
	/**
	 *
	 * @var float @ORM\Column(name="N0r", type="float", precision=10, scale=0, nullable=true)
	 */
	private $n0r;
	
	/**
	 *
	 * @var float @ORM\Column(name="Wartr", type="float", precision=10, scale=0, nullable=true)
	 */
	private $wartr;
	
	/**
	 *
	 * @var string @ORM\Column(name="Os", type="string", length=50, nullable=true)
	 */
	private $os;
	
	/**
	 *
	 * @var string @ORM\Column(name="nazw", type="string", length=250, nullable=true)
	 */
	private $nazw;
	
	/**
	 *
	 * @var string @ORM\Column(name="Nazw2", type="string", length=240, nullable=true)
	 */
	private $nazw2;
	
	/**
	 *
	 * @var string @ORM\Column(name="KodP", type="string", length=50, nullable=true)
	 */
	private $kodp;
	
	/**
	 *
	 * @var string @ORM\Column(name="Mias", type="string", length=50, nullable=true)
	 */
	private $mias;
	
	/**
	 *
	 * @var string @ORM\Column(name="Ulic", type="string", length=50, nullable=true)
	 */
	private $ulic;
	
	/**
	 *
	 * @var string @ORM\Column(name="T1", type="string", length=50, nullable=true)
	 */
	private $t1;
	
	/**
	 *
	 * @var string @ORM\Column(name="Mail", type="string", length=100, nullable=true)
	 */
	private $mail;
	
	/**
	 *
	 * @var float @ORM\Column(name="PrRab", type="float", precision=10, scale=0, nullable=true)
	 */
	private $prrab;
	
	/**
	 *
	 * @var string @ORM\Column(name="Fak", type="string", length=40, nullable=true)
	 */
	private $fak;
	
	/**
	 *
	 * @var string @ORM\Column(name="Dfak", type="string", length=35, nullable=true)
	 */
	private $dfak;
	
	/**
	 *
	 * @var string @ORM\Column(name="FakZ", type="string", length=40, nullable=true)
	 */
	private $fakz;
	
	/**
	 *
	 * @var string @ORM\Column(name="DFakZ", type="string", length=20, nullable=true)
	 */
	private $dfakz;
	
	/**
	 *
	 * @var string @ORM\Column(name="Prz", type="string", length=150, nullable=true)
	 */
	private $prz;
	
	/**
	 *
	 * @var string @ORM\Column(name="Opis", type="text", length=16777215, nullable=true)
	 */
	private $opis;
	
	/**
	 *
	 * @var string @ORM\Column(name="Term", type="text", length=16777215, nullable=true)
	 */
	private $term;
	
	/**
	 *
	 * @var string @ORM\Column(name="Plat", type="text", length=16777215, nullable=true)
	 */
	private $plat;
	
	/**
	 *
	 * @var string @ORM\Column(name="Tekst", type="text", length=16777215, nullable=true)
	 */
	private $tekst;
	
	/**
	 *
	 * @var string @ORM\Column(name="Notk", type="text", length=16777215, nullable=true)
	 */
	private $notk;
	
	/**
	 *
	 * @var string @ORM\Column(name="UW", type="text", length=16777215, nullable=true)
	 */
	private $uw;
	
	/**
	 *
	 * @var string @ORM\Column(name="Zam", type="string", length=20, nullable=true)
	 */
	private $zam;
	
	/**
	 *
	 * @var string @ORM\Column(name="DZam", type="string", length=20, nullable=true)
	 */
	private $dzam;
	
	/**
	 *
	 * @var string @ORM\Column(name="Ceg", type="string", length=50, nullable=true)
	 */
	private $ceg;
	
	/**
	 *
	 * @var string @ORM\Column(name="Oswy", type="string", length=100, nullable=true)
	 */
	private $oswy;
	
	/**
	 *
	 * @var string @ORM\Column(name="OW", type="string", length=50, nullable=true)
	 */
	private $ow;
	
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
	 * @var float @ORM\Column(name="Zap", type="float", precision=10, scale=0, nullable=true)
	 */
	private $zap;
	
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
	 * @var string @ORM\Column(name="isV", type="string", length=50, nullable=true)
	 */
	private $isv;
	
	/**
	 *
	 * @var string @ORM\Column(name="WarDo", type="string", length=50, nullable=true)
	 */
	private $wardo;
	
	/**
	 *
	 * @var string @ORM\Column(name="AdrDo", type="string", length=250, nullable=true)
	 */
	private $adrdo;
	
	/**
	 *
	 * @var integer @ORM\Column(name="REGPES", type="integer", nullable=true)
	 */
	private $regpes;
	
	/**
	 *
	 * @var string @ORM\Column(name="DataL", type="string", length=50, nullable=true)
	 */
	private $datal;
	
	/**
	 *
	 * @var string @ORM\Column(name="NIPx", type="string", length=5, nullable=true)
	 */
	private $nipx;
	
	/**
	 *
	 * @var string @ORM\Column(name="Reg", type="string", length=20, nullable=true)
	 */
	private $reg;
	
	/**
	 *
	 * @var string @ORM\Column(name="kraj", type="string", length=50, nullable=true)
	 */
	private $kraj;
	
	/**
	 *
	 * @var string @ORM\Column(name="zID", type="string", length=50, nullable=true)
	 */
	private $zid;
	
	/**
	 *
	 * @var string @ORM\Column(name="Op1", type="string", length=50, nullable=true)
	 */
	private $op1;
	
	/**
	 *
	 * @var string @ORM\Column(name="Op2", type="string", length=50, nullable=true)
	 */
	private $op2;
	
	/**
	 *
	 * @var string @ORM\Column(name="Wa1", type="string", length=50, nullable=true)
	 */
	private $wa1;
	
	/**
	 *
	 * @var string @ORM\Column(name="Wa2", type="string", length=50, nullable=true)
	 */
	private $wa2;
	
	/**
	 *
	 * @var integer @ORM\Column(name="Statid", type="integer", nullable=true)
	 */
	private $statid;
	
	/**
	 *
	 * @var string @ORM\Column(name="StatNaz", type="string", length=50, nullable=true)
	 */
	private $statnaz;
	
	/**
	 *
	 * @var string @ORM\Column(name="zIDk", type="string", length=50, nullable=true)
	 */
	private $zidk;
	
	/**
	 *
	 * @var integer @ORM\Column(name="Defni", type="integer", nullable=true)
	 */
	private $defni;
	
	/**
	 *
	 * @var string @ORM\Column(name="defn", type="string", length=50, nullable=true)
	 */
	private $defn;
	
	/**
	 *
	 * @var string @ORM\Column(name="Dpl", type="string", length=20, nullable=true)
	 */
	private $dpl;
	
	/**
	 *
	 * @var float @ORM\Column(name="Waga", type="float", precision=10, scale=0, nullable=true)
	 */
	private $waga;
	
	/**
	 *
	 * @var float @ORM\Column(name="Rea", type="float", precision=10, scale=0, nullable=true)
	 */
	private $rea;
	
	/**
	 *
	 * @var string @ORM\Column(name="Te", type="text", length=16777215, nullable=true)
	 */
	private $te;
	
	/**
	 *
	 * @var string @ORM\Column(name="etap", type="string", length=50, nullable=true)
	 */
	private $etap;
	
	/**
	 *
	 * @var string @ORM\Column(name="RejLP", type="string", length=50, nullable=true)
	 */
	private $rejlp;
	
	/**
	 *
	 * @var string @ORM\Column(name="rep", type="string", length=50, nullable=true)
	 */
	private $rep;
	
	/**
	 *
	 * @var string @ORM\Column(name="DJ", type="string", length=50, nullable=true)
	 */
	private $dj;
	
	/**
	 *
	 * @var string @ORM\Column(name="RejPRO", type="string", length=50, nullable=true)
	 */
	private $rejpro;
	
	/**
	 *
	 * @var integer @ORM\Column(name="Nr2", type="integer", nullable=true)
	 */
	private $nr2;
	
	/**
	 *
	 * @var integer @ORM\Column(name="StanR", type="integer", nullable=true)
	 */
	private $stanr;
	
	/**
	 *
	 * @var string @ORM\Column(name="idP", type="string", length=50, nullable=true)
	 */
	private $idp;
	
	/**
	 * Get id
	 *
	 * @return string
	 */
	public function getId() {
		return $this->id;
	}
	
	/**
	 * Set ro
	 *
	 * @param string $ro        	
	 * @return Gramfoodklembowzams
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
	 * Set stan
	 *
	 * @param integer $stan        	
	 * @return Gramfoodklembowzams
	 */
	public function setStan($stan) {
		$this->stan = $stan;
		
		return $this;
	}
	
	/**
	 * Get stan
	 *
	 * @return integer
	 */
	public function getStan() {
		return $this->stan;
	}
	
	/**
	 * Set idk
	 *
	 * @param string $idk        	
	 * @return Gramfoodklembowzams
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
	 * @return Gramfoodklembowzams
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
	 * Set nip
	 *
	 * @param string $nip        	
	 * @return Gramfoodklembowzams
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
	 * Set nr
	 *
	 * @param integer $nr        	
	 * @return Gramfoodklembowzams
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
	 * Set rej
	 *
	 * @param string $rej        	
	 * @return Gramfoodklembowzams
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
	 * @return Gramfoodklembowzams
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
	 * Set mc
	 *
	 * @param string $mc        	
	 * @return Gramfoodklembowzams
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
	
	/**
	 * Set nrr
	 *
	 * @param string $nrr        	
	 * @return Gramfoodklembowzams
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
	 * Set dwy
	 *
	 * @param string $dwy        	
	 * @return Gramfoodklembowzams
	 */
	public function setDwy($dwy) {
		$this->dwy = $dwy;
		
		return $this;
	}
	
	/**
	 * Get dwy
	 *
	 * @return string
	 */
	public function getDwy() {
		return $this->dwy;
	}
	
	/**
	 * Set data
	 *
	 * @param string $data        	
	 * @return Gramfoodklembowzams
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
	 * Set n0
	 *
	 * @param float $n0        	
	 * @return Gramfoodklembowzams
	 */
	public function setN0($n0) {
		$this->n0 = $n0;
		
		return $this;
	}
	
	/**
	 * Get n0
	 *
	 * @return float
	 */
	public function getN0() {
		return $this->n0;
	}
	
	/**
	 * Set wart
	 *
	 * @param float $wart        	
	 * @return Gramfoodklembowzams
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
	 * Set nb
	 *
	 * @param string $nb        	
	 * @return Gramfoodklembowzams
	 */
	public function setNb($nb) {
		$this->nb = $nb;
		
		return $this;
	}
	
	/**
	 * Get nb
	 *
	 * @return string
	 */
	public function getNb() {
		return $this->nb;
	}
	
	/**
	 * Set wwart
	 *
	 * @param float $wwart        	
	 * @return Gramfoodklembowzams
	 */
	public function setWwart($wwart) {
		$this->wwart = $wwart;
		
		return $this;
	}
	
	/**
	 * Get wwart
	 *
	 * @return float
	 */
	public function getWwart() {
		return $this->wwart;
	}
	
	/**
	 * Set wal
	 *
	 * @param string $wal        	
	 * @return Gramfoodklembowzams
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
	 * Set kurs
	 *
	 * @param float $kurs        	
	 * @return Gramfoodklembowzams
	 */
	public function setKurs($kurs) {
		$this->kurs = $kurs;
		
		return $this;
	}
	
	/**
	 * Get kurs
	 *
	 * @return float
	 */
	public function getKurs() {
		return $this->kurs;
	}
	
	/**
	 * Set przel
	 *
	 * @param integer $przel        	
	 * @return Gramfoodklembowzams
	 */
	public function setPrzel($przel) {
		$this->przel = $przel;
		
		return $this;
	}
	
	/**
	 * Get przel
	 *
	 * @return integer
	 */
	public function getPrzel() {
		return $this->przel;
	}
	
	/**
	 * Set n0r
	 *
	 * @param float $n0r        	
	 * @return Gramfoodklembowzams
	 */
	public function setN0r($n0r) {
		$this->n0r = $n0r;
		
		return $this;
	}
	
	/**
	 * Get n0r
	 *
	 * @return float
	 */
	public function getN0r() {
		return $this->n0r;
	}
	
	/**
	 * Set wartr
	 *
	 * @param float $wartr        	
	 * @return Gramfoodklembowzams
	 */
	public function setWartr($wartr) {
		$this->wartr = $wartr;
		
		return $this;
	}
	
	/**
	 * Get wartr
	 *
	 * @return float
	 */
	public function getWartr() {
		return $this->wartr;
	}
	
	/**
	 * Set os
	 *
	 * @param string $os        	
	 * @return Gramfoodklembowzams
	 */
	public function setOs($os) {
		$this->os = $os;
		
		return $this;
	}
	
	/**
	 * Get os
	 *
	 * @return string
	 */
	public function getOs() {
		return $this->os;
	}
	
	/**
	 * Set nazw
	 *
	 * @param string $nazw        	
	 * @return Gramfoodklembowzams
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
	 * @return Gramfoodklembowzams
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
	 * Set kodp
	 *
	 * @param string $kodp        	
	 * @return Gramfoodklembowzams
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
	 * @return Gramfoodklembowzams
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
	 * Set ulic
	 *
	 * @param string $ulic        	
	 * @return Gramfoodklembowzams
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
	 * Set t1
	 *
	 * @param string $t1        	
	 * @return Gramfoodklembowzams
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
	 * Set mail
	 *
	 * @param string $mail        	
	 * @return Gramfoodklembowzams
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
	 * Set prrab
	 *
	 * @param float $prrab        	
	 * @return Gramfoodklembowzams
	 */
	public function setPrrab($prrab) {
		$this->prrab = $prrab;
		
		return $this;
	}
	
	/**
	 * Get prrab
	 *
	 * @return float
	 */
	public function getPrrab() {
		return $this->prrab;
	}
	
	/**
	 * Set fak
	 *
	 * @param string $fak        	
	 * @return Gramfoodklembowzams
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
	 * Set dfak
	 *
	 * @param string $dfak        	
	 * @return Gramfoodklembowzams
	 */
	public function setDfak($dfak) {
		$this->dfak = $dfak;
		
		return $this;
	}
	
	/**
	 * Get dfak
	 *
	 * @return string
	 */
	public function getDfak() {
		return $this->dfak;
	}
	
	/**
	 * Set fakz
	 *
	 * @param string $fakz        	
	 * @return Gramfoodklembowzams
	 */
	public function setFakz($fakz) {
		$this->fakz = $fakz;
		
		return $this;
	}
	
	/**
	 * Get fakz
	 *
	 * @return string
	 */
	public function getFakz() {
		return $this->fakz;
	}
	
	/**
	 * Set dfakz
	 *
	 * @param string $dfakz        	
	 * @return Gramfoodklembowzams
	 */
	public function setDfakz($dfakz) {
		$this->dfakz = $dfakz;
		
		return $this;
	}
	
	/**
	 * Get dfakz
	 *
	 * @return string
	 */
	public function getDfakz() {
		return $this->dfakz;
	}
	
	/**
	 * Set prz
	 *
	 * @param string $prz        	
	 * @return Gramfoodklembowzams
	 */
	public function setPrz($prz) {
		$this->prz = $prz;
		
		return $this;
	}
	
	/**
	 * Get prz
	 *
	 * @return string
	 */
	public function getPrz() {
		return $this->prz;
	}
	
	/**
	 * Set opis
	 *
	 * @param string $opis        	
	 * @return Gramfoodklembowzams
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
	 * Set term
	 *
	 * @param string $term        	
	 * @return Gramfoodklembowzams
	 */
	public function setTerm($term) {
		$this->term = $term;
		
		return $this;
	}
	
	/**
	 * Get term
	 *
	 * @return string
	 */
	public function getTerm() {
		return $this->term;
	}
	
	/**
	 * Set plat
	 *
	 * @param string $plat        	
	 * @return Gramfoodklembowzams
	 */
	public function setPlat($plat) {
		$this->plat = $plat;
		
		return $this;
	}
	
	/**
	 * Get plat
	 *
	 * @return string
	 */
	public function getPlat() {
		return $this->plat;
	}
	
	/**
	 * Set tekst
	 *
	 * @param string $tekst        	
	 * @return Gramfoodklembowzams
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
	 * Set notk
	 *
	 * @param string $notk        	
	 * @return Gramfoodklembowzams
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
	 * Set uw
	 *
	 * @param string $uw        	
	 * @return Gramfoodklembowzams
	 */
	public function setUw($uw) {
		$this->uw = $uw;
		
		return $this;
	}
	
	/**
	 * Get uw
	 *
	 * @return string
	 */
	public function getUw() {
		return $this->uw;
	}
	
	/**
	 * Set zam
	 *
	 * @param string $zam        	
	 * @return Gramfoodklembowzams
	 */
	public function setZam($zam) {
		$this->zam = $zam;
		
		return $this;
	}
	
	/**
	 * Get zam
	 *
	 * @return string
	 */
	public function getZam() {
		return $this->zam;
	}
	
	/**
	 * Set dzam
	 *
	 * @param string $dzam        	
	 * @return Gramfoodklembowzams
	 */
	public function setDzam($dzam) {
		$this->dzam = $dzam;
		
		return $this;
	}
	
	/**
	 * Get dzam
	 *
	 * @return string
	 */
	public function getDzam() {
		return $this->dzam;
	}
	
	/**
	 * Set ceg
	 *
	 * @param string $ceg        	
	 * @return Gramfoodklembowzams
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
	 * Set oswy
	 *
	 * @param string $oswy        	
	 * @return Gramfoodklembowzams
	 */
	public function setOswy($oswy) {
		$this->oswy = $oswy;
		
		return $this;
	}
	
	/**
	 * Get oswy
	 *
	 * @return string
	 */
	public function getOswy() {
		return $this->oswy;
	}
	
	/**
	 * Set ow
	 *
	 * @param string $ow        	
	 * @return Gramfoodklembowzams
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
	 * Set uz
	 *
	 * @param string $uz        	
	 * @return Gramfoodklembowzams
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
	 * @return Gramfoodklembowzams
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
	 * Set zap
	 *
	 * @param float $zap        	
	 * @return Gramfoodklembowzams
	 */
	public function setZap($zap) {
		$this->zap = $zap;
		
		return $this;
	}
	
	/**
	 * Get zap
	 *
	 * @return float
	 */
	public function getZap() {
		return $this->zap;
	}
	
	/**
	 * Set akt
	 *
	 * @param string $akt        	
	 * @return Gramfoodklembowzams
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
	 * @return Gramfoodklembowzams
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
	 * @return Gramfoodklembowzams
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
	 * Set isv
	 *
	 * @param string $isv        	
	 * @return Gramfoodklembowzams
	 */
	public function setIsv($isv) {
		$this->isv = $isv;
		
		return $this;
	}
	
	/**
	 * Get isv
	 *
	 * @return string
	 */
	public function getIsv() {
		return $this->isv;
	}
	
	/**
	 * Set wardo
	 *
	 * @param string $wardo        	
	 * @return Gramfoodklembowzams
	 */
	public function setWardo($wardo) {
		$this->wardo = $wardo;
		
		return $this;
	}
	
	/**
	 * Get wardo
	 *
	 * @return string
	 */
	public function getWardo() {
		return $this->wardo;
	}
	
	/**
	 * Set adrdo
	 *
	 * @param string $adrdo        	
	 * @return Gramfoodklembowzams
	 */
	public function setAdrdo($adrdo) {
		$this->adrdo = $adrdo;
		
		return $this;
	}
	
	/**
	 * Get adrdo
	 *
	 * @return string
	 */
	public function getAdrdo() {
		return $this->adrdo;
	}
	
	/**
	 * Set regpes
	 *
	 * @param integer $regpes        	
	 * @return Gramfoodklembowzams
	 */
	public function setRegpes($regpes) {
		$this->regpes = $regpes;
		
		return $this;
	}
	
	/**
	 * Get regpes
	 *
	 * @return integer
	 */
	public function getRegpes() {
		return $this->regpes;
	}
	
	/**
	 * Set datal
	 *
	 * @param string $datal        	
	 * @return Gramfoodklembowzams
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
	 * Set nipx
	 *
	 * @param string $nipx        	
	 * @return Gramfoodklembowzams
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
	 * Set reg
	 *
	 * @param string $reg        	
	 * @return Gramfoodklembowzams
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
	 * Set kraj
	 *
	 * @param string $kraj        	
	 * @return Gramfoodklembowzams
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
	 * Set zid
	 *
	 * @param string $zid        	
	 * @return Gramfoodklembowzams
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
	 * Set op1
	 *
	 * @param string $op1        	
	 * @return Gramfoodklembowzams
	 */
	public function setOp1($op1) {
		$this->op1 = $op1;
		
		return $this;
	}
	
	/**
	 * Get op1
	 *
	 * @return string
	 */
	public function getOp1() {
		return $this->op1;
	}
	
	/**
	 * Set op2
	 *
	 * @param string $op2        	
	 * @return Gramfoodklembowzams
	 */
	public function setOp2($op2) {
		$this->op2 = $op2;
		
		return $this;
	}
	
	/**
	 * Get op2
	 *
	 * @return string
	 */
	public function getOp2() {
		return $this->op2;
	}
	
	/**
	 * Set wa1
	 *
	 * @param string $wa1        	
	 * @return Gramfoodklembowzams
	 */
	public function setWa1($wa1) {
		$this->wa1 = $wa1;
		
		return $this;
	}
	
	/**
	 * Get wa1
	 *
	 * @return string
	 */
	public function getWa1() {
		return $this->wa1;
	}
	
	/**
	 * Set wa2
	 *
	 * @param string $wa2        	
	 * @return Gramfoodklembowzams
	 */
	public function setWa2($wa2) {
		$this->wa2 = $wa2;
		
		return $this;
	}
	
	/**
	 * Get wa2
	 *
	 * @return string
	 */
	public function getWa2() {
		return $this->wa2;
	}
	
	/**
	 * Set statid
	 *
	 * @param integer $statid        	
	 * @return Gramfoodklembowzams
	 */
	public function setStatid($statid) {
		$this->statid = $statid;
		
		return $this;
	}
	
	/**
	 * Get statid
	 *
	 * @return integer
	 */
	public function getStatid() {
		return $this->statid;
	}
	
	/**
	 * Set statnaz
	 *
	 * @param string $statnaz        	
	 * @return Gramfoodklembowzams
	 */
	public function setStatnaz($statnaz) {
		$this->statnaz = $statnaz;
		
		return $this;
	}
	
	/**
	 * Get statnaz
	 *
	 * @return string
	 */
	public function getStatnaz() {
		return $this->statnaz;
	}
	
	/**
	 * Set zidk
	 *
	 * @param string $zidk        	
	 * @return Gramfoodklembowzams
	 */
	public function setZidk($zidk) {
		$this->zidk = $zidk;
		
		return $this;
	}
	
	/**
	 * Get zidk
	 *
	 * @return string
	 */
	public function getZidk() {
		return $this->zidk;
	}
	
	/**
	 * Set defni
	 *
	 * @param integer $defni        	
	 * @return Gramfoodklembowzams
	 */
	public function setDefni($defni) {
		$this->defni = $defni;
		
		return $this;
	}
	
	/**
	 * Get defni
	 *
	 * @return integer
	 */
	public function getDefni() {
		return $this->defni;
	}
	
	/**
	 * Set defn
	 *
	 * @param string $defn        	
	 * @return Gramfoodklembowzams
	 */
	public function setDefn($defn) {
		$this->defn = $defn;
		
		return $this;
	}
	
	/**
	 * Get defn
	 *
	 * @return string
	 */
	public function getDefn() {
		return $this->defn;
	}
	
	/**
	 * Set dpl
	 *
	 * @param string $dpl        	
	 * @return Gramfoodklembowzams
	 */
	public function setDpl($dpl) {
		$this->dpl = $dpl;
		
		return $this;
	}
	
	/**
	 * Get dpl
	 *
	 * @return string
	 */
	public function getDpl() {
		return $this->dpl;
	}
	
	/**
	 * Set waga
	 *
	 * @param float $waga        	
	 * @return Gramfoodklembowzams
	 */
	public function setWaga($waga) {
		$this->waga = $waga;
		
		return $this;
	}
	
	/**
	 * Get waga
	 *
	 * @return float
	 */
	public function getWaga() {
		return $this->waga;
	}
	
	/**
	 * Set rea
	 *
	 * @param float $rea        	
	 * @return Gramfoodklembowzams
	 */
	public function setRea($rea) {
		$this->rea = $rea;
		
		return $this;
	}
	
	/**
	 * Get rea
	 *
	 * @return float
	 */
	public function getRea() {
		return $this->rea;
	}
	
	/**
	 * Set te
	 *
	 * @param string $te        	
	 * @return Gramfoodklembowzams
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
	 * Set etap
	 *
	 * @param string $etap        	
	 * @return Gramfoodklembowzams
	 */
	public function setEtap($etap) {
		$this->etap = $etap;
		
		return $this;
	}
	
	/**
	 * Get etap
	 *
	 * @return string
	 */
	public function getEtap() {
		return $this->etap;
	}
	
	/**
	 * Set rejlp
	 *
	 * @param string $rejlp        	
	 * @return Gramfoodklembowzams
	 */
	public function setRejlp($rejlp) {
		$this->rejlp = $rejlp;
		
		return $this;
	}
	
	/**
	 * Get rejlp
	 *
	 * @return string
	 */
	public function getRejlp() {
		return $this->rejlp;
	}
	
	/**
	 * Set rep
	 *
	 * @param string $rep        	
	 * @return Gramfoodklembowzams
	 */
	public function setRep($rep) {
		$this->rep = $rep;
		
		return $this;
	}
	
	/**
	 * Get rep
	 *
	 * @return string
	 */
	public function getRep() {
		return $this->rep;
	}
	
	/**
	 * Set dj
	 *
	 * @param string $dj        	
	 * @return Gramfoodklembowzams
	 */
	public function setDj($dj) {
		$this->dj = $dj;
		
		return $this;
	}
	
	/**
	 * Get dj
	 *
	 * @return string
	 */
	public function getDj() {
		return $this->dj;
	}
	
	/**
	 * Set rejpro
	 *
	 * @param string $rejpro        	
	 * @return Gramfoodklembowzams
	 */
	public function setRejpro($rejpro) {
		$this->rejpro = $rejpro;
		
		return $this;
	}
	
	/**
	 * Get rejpro
	 *
	 * @return string
	 */
	public function getRejpro() {
		return $this->rejpro;
	}
	
	/**
	 * Set nr2
	 *
	 * @param integer $nr2        	
	 * @return Gramfoodklembowzams
	 */
	public function setNr2($nr2) {
		$this->nr2 = $nr2;
		
		return $this;
	}
	
	/**
	 * Get nr2
	 *
	 * @return integer
	 */
	public function getNr2() {
		return $this->nr2;
	}
	
	/**
	 * Set stanr
	 *
	 * @param integer $stanr        	
	 * @return Gramfoodklembowzams
	 */
	public function setStanr($stanr) {
		$this->stanr = $stanr;
		
		return $this;
	}
	
	/**
	 * Get stanr
	 *
	 * @return integer
	 */
	public function getStanr() {
		return $this->stanr;
	}
	
	/**
	 * Set idp
	 *
	 * @param string $idp        	
	 * @return Gramfoodklembowzams
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
}
