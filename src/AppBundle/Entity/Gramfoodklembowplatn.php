<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Gramfoodklembowplatn
 *
 * @ORM\Table(name="gramfoodklembowplatn")
 * @ORM\Entity
 */
class Gramfoodklembowplatn {
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
	 * @var string @ORM\Column(name="Ki", type="string", length=1, nullable=true)
	 */
	private $ki;
	
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
	 * @var string @ORM\Column(name="Fak", type="string", length=50, nullable=true)
	 */
	private $fak;
	
	/**
	 *
	 * @var string @ORM\Column(name="RFza", type="string", length=5, nullable=true)
	 */
	private $rfza;
	
	/**
	 *
	 * @var string @ORM\Column(name="IDza", type="string", length=50, nullable=true)
	 */
	private $idza;
	
	/**
	 *
	 * @var string @ORM\Column(name="Rejza", type="string", length=50, nullable=true)
	 */
	private $rejza;
	
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
	 * @var string @ORM\Column(name="kBank", type="string", length=50, nullable=true)
	 */
	private $kbank;
	
	/**
	 *
	 * @var string @ORM\Column(name="kBankN", type="string", length=50, nullable=true)
	 */
	private $kbankn;
	
	/**
	 *
	 * @var string @ORM\Column(name="Alias", type="string", length=50, nullable=true)
	 */
	private $alias;
	
	/**
	 *
	 * @var string @ORM\Column(name="Nazw", type="string", length=150, nullable=true)
	 */
	private $nazw;
	
	/**
	 *
	 * @var string @ORM\Column(name="Nazw2", type="string", length=200, nullable=true)
	 */
	private $nazw2;
	
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
	 * @var string @ORM\Column(name="KodP", type="string", length=10, nullable=true)
	 */
	private $kodp;
	
	/**
	 *
	 * @var string @ORM\Column(name="RapK", type="string", length=50, nullable=true)
	 */
	private $rapk;
	
	/**
	 *
	 * @var string @ORM\Column(name="WP", type="string", length=1, nullable=true)
	 */
	private $wp;
	
	/**
	 *
	 * @var float @ORM\Column(name="Wart", type="float", precision=10, scale=0, nullable=true)
	 */
	private $wart;
	
	/**
	 *
	 * @var string @ORM\Column(name="Tytul", type="string", length=100, nullable=true)
	 */
	private $tytul;
	
	/**
	 *
	 * @var string @ORM\Column(name="Opis", type="string", length=250, nullable=true)
	 */
	private $opis;
	
	/**
	 *
	 * @var string @ORM\Column(name="Inf", type="text", length=16777215, nullable=true)
	 */
	private $inf;
	
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
	 * @var string @ORM\Column(name="IDk", type="string", length=50, nullable=true)
	 */
	private $idk;
	
	/**
	 *
	 * @var string @ORM\Column(name="Wal", type="string", length=10, nullable=true)
	 */
	private $wal;
	
	/**
	 *
	 * @var string @ORM\Column(name="Mc", type="string", length=10, nullable=true)
	 */
	private $mc;
	
	/**
	 *
	 * @var integer @ORM\Column(name="Defni", type="integer", nullable=true)
	 */
	private $defni;
	
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
	 * @return Gramfoodklembowplatn
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
	 * Set ki
	 *
	 * @param string $ki        	
	 * @return Gramfoodklembowplatn
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
	
	/**
	 * Set nrr
	 *
	 * @param string $nrr        	
	 * @return Gramfoodklembowplatn
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
	 * @return Gramfoodklembowplatn
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
	 * @return Gramfoodklembowplatn
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
	 * @return Gramfoodklembowplatn
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
	 * @return Gramfoodklembowplatn
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
	 * @return Gramfoodklembowplatn
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
	 * @return Gramfoodklembowplatn
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
	 * @return Gramfoodklembowplatn
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
	 * Set fak
	 *
	 * @param string $fak        	
	 * @return Gramfoodklembowplatn
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
	 * Set rfza
	 *
	 * @param string $rfza        	
	 * @return Gramfoodklembowplatn
	 */
	public function setRfza($rfza) {
		$this->rfza = $rfza;
		
		return $this;
	}
	
	/**
	 * Get rfza
	 *
	 * @return string
	 */
	public function getRfza() {
		return $this->rfza;
	}
	
	/**
	 * Set idza
	 *
	 * @param string $idza        	
	 * @return Gramfoodklembowplatn
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
	 * Set rejza
	 *
	 * @param string $rejza        	
	 * @return Gramfoodklembowplatn
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
	 * Set bank
	 *
	 * @param string $bank        	
	 * @return Gramfoodklembowplatn
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
	 * @return Gramfoodklembowplatn
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
	 * Set kbank
	 *
	 * @param string $kbank        	
	 * @return Gramfoodklembowplatn
	 */
	public function setKbank($kbank) {
		$this->kbank = $kbank;
		
		return $this;
	}
	
	/**
	 * Get kbank
	 *
	 * @return string
	 */
	public function getKbank() {
		return $this->kbank;
	}
	
	/**
	 * Set kbankn
	 *
	 * @param string $kbankn        	
	 * @return Gramfoodklembowplatn
	 */
	public function setKbankn($kbankn) {
		$this->kbankn = $kbankn;
		
		return $this;
	}
	
	/**
	 * Get kbankn
	 *
	 * @return string
	 */
	public function getKbankn() {
		return $this->kbankn;
	}
	
	/**
	 * Set alias
	 *
	 * @param string $alias        	
	 * @return Gramfoodklembowplatn
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
	 * Set nazw
	 *
	 * @param string $nazw        	
	 * @return Gramfoodklembowplatn
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
	 * @return Gramfoodklembowplatn
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
	 * Set mias
	 *
	 * @param string $mias        	
	 * @return Gramfoodklembowplatn
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
	 * @return Gramfoodklembowplatn
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
	 * @return Gramfoodklembowplatn
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
	 * Set rapk
	 *
	 * @param string $rapk        	
	 * @return Gramfoodklembowplatn
	 */
	public function setRapk($rapk) {
		$this->rapk = $rapk;
		
		return $this;
	}
	
	/**
	 * Get rapk
	 *
	 * @return string
	 */
	public function getRapk() {
		return $this->rapk;
	}
	
	/**
	 * Set wp
	 *
	 * @param string $wp        	
	 * @return Gramfoodklembowplatn
	 */
	public function setWp($wp) {
		$this->wp = $wp;
		
		return $this;
	}
	
	/**
	 * Get wp
	 *
	 * @return string
	 */
	public function getWp() {
		return $this->wp;
	}
	
	/**
	 * Set wart
	 *
	 * @param float $wart        	
	 * @return Gramfoodklembowplatn
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
	 * Set tytul
	 *
	 * @param string $tytul        	
	 * @return Gramfoodklembowplatn
	 */
	public function setTytul($tytul) {
		$this->tytul = $tytul;
		
		return $this;
	}
	
	/**
	 * Get tytul
	 *
	 * @return string
	 */
	public function getTytul() {
		return $this->tytul;
	}
	
	/**
	 * Set opis
	 *
	 * @param string $opis        	
	 * @return Gramfoodklembowplatn
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
	 * Set inf
	 *
	 * @param string $inf        	
	 * @return Gramfoodklembowplatn
	 */
	public function setInf($inf) {
		$this->inf = $inf;
		
		return $this;
	}
	
	/**
	 * Get inf
	 *
	 * @return string
	 */
	public function getInf() {
		return $this->inf;
	}
	
	/**
	 * Set uz
	 *
	 * @param string $uz        	
	 * @return Gramfoodklembowplatn
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
	 * @return Gramfoodklembowplatn
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
	 * @return Gramfoodklembowplatn
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
	 * @return Gramfoodklembowplatn
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
	 * @return Gramfoodklembowplatn
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
	 * Set idk
	 *
	 * @param string $idk        	
	 * @return Gramfoodklembowplatn
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
	 * Set wal
	 *
	 * @param string $wal        	
	 * @return Gramfoodklembowplatn
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
	 * Set mc
	 *
	 * @param string $mc        	
	 * @return Gramfoodklembowplatn
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
	 * Set defni
	 *
	 * @param integer $defni        	
	 * @return Gramfoodklembowplatn
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
}
