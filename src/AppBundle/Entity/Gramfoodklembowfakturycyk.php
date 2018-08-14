<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Gramfoodklembowfakturycyk
 *
 * @ORM\Table(name="gramfoodklembowfakturycyk")
 * @ORM\Entity
 */
class Gramfoodklembowfakturycyk {
	/**
	 *
	 * @var string @ORM\Column(name="ID", type="string", length=50, nullable=false)
	 *      @ORM\Id
	 *      @ORM\GeneratedValue(strategy="IDENTITY")
	 */
	private $id;
	
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
	 * @var string @ORM\Column(name="RejPAR", type="string", length=50, nullable=true)
	 */
	private $rejpar;
	
	/**
	 *
	 * @var string @ORM\Column(name="RejWZ", type="string", length=50, nullable=true)
	 */
	private $rejwz;
	
	/**
	 *
	 * @var string @ORM\Column(name="RejBOK", type="string", length=50, nullable=true)
	 */
	private $rejbok;
	
	/**
	 *
	 * @var string @ORM\Column(name="RejOF", type="string", length=50, nullable=true)
	 */
	private $rejof;
	
	/**
	 *
	 * @var string @ORM\Column(name="RejZS", type="string", length=50, nullable=true)
	 */
	private $rejzs;
	
	/**
	 *
	 * @var string @ORM\Column(name="RejPRO", type="string", length=50, nullable=true)
	 */
	private $rejpro;
	
	/**
	 *
	 * @var string @ORM\Column(name="Alias", type="string", length=50, nullable=true)
	 */
	private $alias;
	
	/**
	 *
	 * @var string @ORM\Column(name="Alodb", type="string", length=50, nullable=true)
	 */
	private $alodb;
	
	/**
	 *
	 * @var string @ORM\Column(name="Odb", type="string", length=250, nullable=true)
	 */
	private $odb;
	
	/**
	 *
	 * @var string @ORM\Column(name="os", type="string", length=50, nullable=true)
	 */
	private $os;
	
	/**
	 *
	 * @var string @ORM\Column(name="Gr", type="string", length=50, nullable=true)
	 */
	private $gr;
	
	/**
	 *
	 * @var integer @ORM\Column(name="Nr", type="integer", nullable=true)
	 */
	private $nr;
	
	/**
	 *
	 * @var string @ORM\Column(name="Rej", type="string", length=20, nullable=true)
	 */
	private $rej;
	
	/**
	 *
	 * @var string @ORM\Column(name="Rok", type="string", length=10, nullable=true)
	 */
	private $rok;
	
	/**
	 *
	 * @var string @ORM\Column(name="Mc", type="string", length=10, nullable=true)
	 */
	private $mc;
	
	/**
	 *
	 * @var string @ORM\Column(name="NrR", type="string", length=50, nullable=true)
	 */
	private $nrr;
	
	/**
	 *
	 * @var string @ORM\Column(name="DWy", type="string", length=20, nullable=true)
	 */
	private $dwy;
	
	/**
	 *
	 * @var string @ORM\Column(name="DSp", type="string", length=20, nullable=true)
	 */
	private $dsp;
	
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
	 * @var string @ORM\Column(name="Tpl", type="string", length=20, nullable=true)
	 */
	private $tpl;
	
	/**
	 *
	 * @var string @ORM\Column(name="Dpl", type="string", length=20, nullable=true)
	 */
	private $dpl;
	
	/**
	 *
	 * @var float @ORM\Column(name="N0", type="float", precision=10, scale=0, nullable=true)
	 */
	private $n0;
	
	/**
	 *
	 * @var float @ORM\Column(name="N1", type="float", precision=10, scale=0, nullable=true)
	 */
	private $n1;
	
	/**
	 *
	 * @var float @ORM\Column(name="N2", type="float", precision=10, scale=0, nullable=true)
	 */
	private $n2;
	
	/**
	 *
	 * @var float @ORM\Column(name="N3", type="float", precision=10, scale=0, nullable=true)
	 */
	private $n3;
	
	/**
	 *
	 * @var float @ORM\Column(name="N4", type="float", precision=10, scale=0, nullable=true)
	 */
	private $n4;
	
	/**
	 *
	 * @var float @ORM\Column(name="V1", type="float", precision=10, scale=0, nullable=true)
	 */
	private $v1;
	
	/**
	 *
	 * @var float @ORM\Column(name="V2", type="float", precision=10, scale=0, nullable=true)
	 */
	private $v2;
	
	/**
	 *
	 * @var float @ORM\Column(name="V4", type="float", precision=10, scale=0, nullable=true)
	 */
	private $v4;
	
	/**
	 *
	 * @var float @ORM\Column(name="Wart", type="float", precision=10, scale=0, nullable=true)
	 */
	private $wart;
	
	/**
	 *
	 * @var float @ORM\Column(name="Zap", type="float", precision=10, scale=0, nullable=true)
	 */
	private $zap;
	
	/**
	 *
	 * @var float @ORM\Column(name="Przedp", type="float", precision=10, scale=0, nullable=true)
	 */
	private $przedp;
	
	/**
	 *
	 * @var float @ORM\Column(name="Koszt", type="float", precision=10, scale=0, nullable=true)
	 */
	private $koszt;
	
	/**
	 *
	 * @var string @ORM\Column(name="NB", type="string", length=1, nullable=true)
	 */
	private $nb;
	
	/**
	 *
	 * @var float @ORM\Column(name="Rab", type="float", precision=10, scale=0, nullable=true)
	 */
	private $rab;
	
	/**
	 *
	 * @var float @ORM\Column(name="PrRab", type="float", precision=10, scale=0, nullable=true)
	 */
	private $prrab;
	
	/**
	 *
	 * @var string @ORM\Column(name="status", type="string", length=50, nullable=true)
	 */
	private $status;
	
	/**
	 *
	 * @var string @ORM\Column(name="Bank", type="string", length=100, nullable=true)
	 */
	private $bank;
	
	/**
	 *
	 * @var string @ORM\Column(name="BankN", type="string", length=100, nullable=true)
	 */
	private $bankn;
	
	/**
	 *
	 * @var string @ORM\Column(name="BankS", type="string", length=20, nullable=true)
	 */
	private $banks;
	
	/**
	 *
	 * @var string @ORM\Column(name="NrK", type="string", length=50, nullable=true)
	 */
	private $nrk;
	
	/**
	 *
	 * @var string @ORM\Column(name="DWyK", type="string", length=20, nullable=true)
	 */
	private $dwyk;
	
	/**
	 *
	 * @var string @ORM\Column(name="WSK", type="string", length=20, nullable=true)
	 */
	private $wsk;
	
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
	 * @var string @ORM\Column(name="Nazw", type="string", length=250, nullable=true)
	 */
	private $nazw;
	
	/**
	 *
	 * @var string @ORM\Column(name="Nazw2", type="string", length=150, nullable=true)
	 */
	private $nazw2;
	
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
	 * @var string @ORM\Column(name="Ulic", type="string", length=50, nullable=true)
	 */
	private $ulic;
	
	/**
	 *
	 * @var string @ORM\Column(name="AdrK", type="string", length=1, nullable=true)
	 */
	private $adrk;
	
	/**
	 *
	 * @var string @ORM\Column(name="Dnext", type="string", length=20, nullable=true)
	 */
	private $dnext;
	
	/**
	 *
	 * @var integer @ORM\Column(name="Cen", type="integer", nullable=true)
	 */
	private $cen;
	
	/**
	 *
	 * @var string @ORM\Column(name="WarDo", type="string", length=50, nullable=true)
	 */
	private $wardo;
	
	/**
	 *
	 * @var string @ORM\Column(name="AdrDo", type="string", length=200, nullable=true)
	 */
	private $adrdo;
	
	/**
	 *
	 * @var string @ORM\Column(name="Defn", type="string", length=50, nullable=true)
	 */
	private $defn;
	
	/**
	 *
	 * @var integer @ORM\Column(name="Defni", type="integer", nullable=true)
	 */
	private $defni;
	
	/**
	 *
	 * @var string @ORM\Column(name="Drozl", type="string", length=40, nullable=true)
	 */
	private $drozl;
	
	/**
	 *
	 * @var string @ORM\Column(name="zasob", type="string", length=50, nullable=true)
	 */
	private $zasob;
	
	/**
	 *
	 * @var float @ORM\Column(name="kwzat", type="float", precision=10, scale=0, nullable=true)
	 */
	private $kwzat;
	
	/**
	 *
	 * @var string @ORM\Column(name="Inf", type="text", length=16777215, nullable=true)
	 */
	private $inf;
	
	/**
	 *
	 * @var string @ORM\Column(name="Notk", type="text", length=16777215, nullable=true)
	 */
	private $notk;
	
	/**
	 *
	 * @var string @ORM\Column(name="OsWy", type="string", length=50, nullable=true)
	 */
	private $oswy;
	
	/**
	 *
	 * @var string @ORM\Column(name="OsOd", type="string", length=50, nullable=true)
	 */
	private $osod;
	
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
	 * @var string @ORM\Column(name="Te", type="text", length=16777215, nullable=true)
	 */
	private $te;
	
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
	 * Set typ
	 *
	 * @param string $typ        	
	 * @return Gramfoodklembowfakturycyk
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
	 * @return Gramfoodklembowfakturycyk
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
	 * Set rejpar
	 *
	 * @param string $rejpar        	
	 * @return Gramfoodklembowfakturycyk
	 */
	public function setRejpar($rejpar) {
		$this->rejpar = $rejpar;
		
		return $this;
	}
	
	/**
	 * Get rejpar
	 *
	 * @return string
	 */
	public function getRejpar() {
		return $this->rejpar;
	}
	
	/**
	 * Set rejwz
	 *
	 * @param string $rejwz        	
	 * @return Gramfoodklembowfakturycyk
	 */
	public function setRejwz($rejwz) {
		$this->rejwz = $rejwz;
		
		return $this;
	}
	
	/**
	 * Get rejwz
	 *
	 * @return string
	 */
	public function getRejwz() {
		return $this->rejwz;
	}
	
	/**
	 * Set rejbok
	 *
	 * @param string $rejbok        	
	 * @return Gramfoodklembowfakturycyk
	 */
	public function setRejbok($rejbok) {
		$this->rejbok = $rejbok;
		
		return $this;
	}
	
	/**
	 * Get rejbok
	 *
	 * @return string
	 */
	public function getRejbok() {
		return $this->rejbok;
	}
	
	/**
	 * Set rejof
	 *
	 * @param string $rejof        	
	 * @return Gramfoodklembowfakturycyk
	 */
	public function setRejof($rejof) {
		$this->rejof = $rejof;
		
		return $this;
	}
	
	/**
	 * Get rejof
	 *
	 * @return string
	 */
	public function getRejof() {
		return $this->rejof;
	}
	
	/**
	 * Set rejzs
	 *
	 * @param string $rejzs        	
	 * @return Gramfoodklembowfakturycyk
	 */
	public function setRejzs($rejzs) {
		$this->rejzs = $rejzs;
		
		return $this;
	}
	
	/**
	 * Get rejzs
	 *
	 * @return string
	 */
	public function getRejzs() {
		return $this->rejzs;
	}
	
	/**
	 * Set rejpro
	 *
	 * @param string $rejpro        	
	 * @return Gramfoodklembowfakturycyk
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
	 * Set alias
	 *
	 * @param string $alias        	
	 * @return Gramfoodklembowfakturycyk
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
	 * Set alodb
	 *
	 * @param string $alodb        	
	 * @return Gramfoodklembowfakturycyk
	 */
	public function setAlodb($alodb) {
		$this->alodb = $alodb;
		
		return $this;
	}
	
	/**
	 * Get alodb
	 *
	 * @return string
	 */
	public function getAlodb() {
		return $this->alodb;
	}
	
	/**
	 * Set odb
	 *
	 * @param string $odb        	
	 * @return Gramfoodklembowfakturycyk
	 */
	public function setOdb($odb) {
		$this->odb = $odb;
		
		return $this;
	}
	
	/**
	 * Get odb
	 *
	 * @return string
	 */
	public function getOdb() {
		return $this->odb;
	}
	
	/**
	 * Set os
	 *
	 * @param string $os        	
	 * @return Gramfoodklembowfakturycyk
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
	 * Set gr
	 *
	 * @param string $gr        	
	 * @return Gramfoodklembowfakturycyk
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
	 * Set nr
	 *
	 * @param integer $nr        	
	 * @return Gramfoodklembowfakturycyk
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
	 * @return Gramfoodklembowfakturycyk
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
	 * @return Gramfoodklembowfakturycyk
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
	 * @return Gramfoodklembowfakturycyk
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
	 * @return Gramfoodklembowfakturycyk
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
	 * @return Gramfoodklembowfakturycyk
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
	 * Set dsp
	 *
	 * @param string $dsp        	
	 * @return Gramfoodklembowfakturycyk
	 */
	public function setDsp($dsp) {
		$this->dsp = $dsp;
		
		return $this;
	}
	
	/**
	 * Get dsp
	 *
	 * @return string
	 */
	public function getDsp() {
		return $this->dsp;
	}
	
	/**
	 * Set fp
	 *
	 * @param string $fp        	
	 * @return Gramfoodklembowfakturycyk
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
	 * @return Gramfoodklembowfakturycyk
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
	 * Set tpl
	 *
	 * @param string $tpl        	
	 * @return Gramfoodklembowfakturycyk
	 */
	public function setTpl($tpl) {
		$this->tpl = $tpl;
		
		return $this;
	}
	
	/**
	 * Get tpl
	 *
	 * @return string
	 */
	public function getTpl() {
		return $this->tpl;
	}
	
	/**
	 * Set dpl
	 *
	 * @param string $dpl        	
	 * @return Gramfoodklembowfakturycyk
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
	 * Set n0
	 *
	 * @param float $n0        	
	 * @return Gramfoodklembowfakturycyk
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
	 * Set n1
	 *
	 * @param float $n1        	
	 * @return Gramfoodklembowfakturycyk
	 */
	public function setN1($n1) {
		$this->n1 = $n1;
		
		return $this;
	}
	
	/**
	 * Get n1
	 *
	 * @return float
	 */
	public function getN1() {
		return $this->n1;
	}
	
	/**
	 * Set n2
	 *
	 * @param float $n2        	
	 * @return Gramfoodklembowfakturycyk
	 */
	public function setN2($n2) {
		$this->n2 = $n2;
		
		return $this;
	}
	
	/**
	 * Get n2
	 *
	 * @return float
	 */
	public function getN2() {
		return $this->n2;
	}
	
	/**
	 * Set n3
	 *
	 * @param float $n3        	
	 * @return Gramfoodklembowfakturycyk
	 */
	public function setN3($n3) {
		$this->n3 = $n3;
		
		return $this;
	}
	
	/**
	 * Get n3
	 *
	 * @return float
	 */
	public function getN3() {
		return $this->n3;
	}
	
	/**
	 * Set n4
	 *
	 * @param float $n4        	
	 * @return Gramfoodklembowfakturycyk
	 */
	public function setN4($n4) {
		$this->n4 = $n4;
		
		return $this;
	}
	
	/**
	 * Get n4
	 *
	 * @return float
	 */
	public function getN4() {
		return $this->n4;
	}
	
	/**
	 * Set v1
	 *
	 * @param float $v1        	
	 * @return Gramfoodklembowfakturycyk
	 */
	public function setV1($v1) {
		$this->v1 = $v1;
		
		return $this;
	}
	
	/**
	 * Get v1
	 *
	 * @return float
	 */
	public function getV1() {
		return $this->v1;
	}
	
	/**
	 * Set v2
	 *
	 * @param float $v2        	
	 * @return Gramfoodklembowfakturycyk
	 */
	public function setV2($v2) {
		$this->v2 = $v2;
		
		return $this;
	}
	
	/**
	 * Get v2
	 *
	 * @return float
	 */
	public function getV2() {
		return $this->v2;
	}
	
	/**
	 * Set v4
	 *
	 * @param float $v4        	
	 * @return Gramfoodklembowfakturycyk
	 */
	public function setV4($v4) {
		$this->v4 = $v4;
		
		return $this;
	}
	
	/**
	 * Get v4
	 *
	 * @return float
	 */
	public function getV4() {
		return $this->v4;
	}
	
	/**
	 * Set wart
	 *
	 * @param float $wart        	
	 * @return Gramfoodklembowfakturycyk
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
	 * Set zap
	 *
	 * @param float $zap        	
	 * @return Gramfoodklembowfakturycyk
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
	 * Set przedp
	 *
	 * @param float $przedp        	
	 * @return Gramfoodklembowfakturycyk
	 */
	public function setPrzedp($przedp) {
		$this->przedp = $przedp;
		
		return $this;
	}
	
	/**
	 * Get przedp
	 *
	 * @return float
	 */
	public function getPrzedp() {
		return $this->przedp;
	}
	
	/**
	 * Set koszt
	 *
	 * @param float $koszt        	
	 * @return Gramfoodklembowfakturycyk
	 */
	public function setKoszt($koszt) {
		$this->koszt = $koszt;
		
		return $this;
	}
	
	/**
	 * Get koszt
	 *
	 * @return float
	 */
	public function getKoszt() {
		return $this->koszt;
	}
	
	/**
	 * Set nb
	 *
	 * @param string $nb        	
	 * @return Gramfoodklembowfakturycyk
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
	 * Set rab
	 *
	 * @param float $rab        	
	 * @return Gramfoodklembowfakturycyk
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
	 * Set prrab
	 *
	 * @param float $prrab        	
	 * @return Gramfoodklembowfakturycyk
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
	 * Set status
	 *
	 * @param string $status        	
	 * @return Gramfoodklembowfakturycyk
	 */
	public function setStatus($status) {
		$this->status = $status;
		
		return $this;
	}
	
	/**
	 * Get status
	 *
	 * @return string
	 */
	public function getStatus() {
		return $this->status;
	}
	
	/**
	 * Set bank
	 *
	 * @param string $bank        	
	 * @return Gramfoodklembowfakturycyk
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
	 * @return Gramfoodklembowfakturycyk
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
	 * Set banks
	 *
	 * @param string $banks        	
	 * @return Gramfoodklembowfakturycyk
	 */
	public function setBanks($banks) {
		$this->banks = $banks;
		
		return $this;
	}
	
	/**
	 * Get banks
	 *
	 * @return string
	 */
	public function getBanks() {
		return $this->banks;
	}
	
	/**
	 * Set nrk
	 *
	 * @param string $nrk        	
	 * @return Gramfoodklembowfakturycyk
	 */
	public function setNrk($nrk) {
		$this->nrk = $nrk;
		
		return $this;
	}
	
	/**
	 * Get nrk
	 *
	 * @return string
	 */
	public function getNrk() {
		return $this->nrk;
	}
	
	/**
	 * Set dwyk
	 *
	 * @param string $dwyk        	
	 * @return Gramfoodklembowfakturycyk
	 */
	public function setDwyk($dwyk) {
		$this->dwyk = $dwyk;
		
		return $this;
	}
	
	/**
	 * Get dwyk
	 *
	 * @return string
	 */
	public function getDwyk() {
		return $this->dwyk;
	}
	
	/**
	 * Set wsk
	 *
	 * @param string $wsk        	
	 * @return Gramfoodklembowfakturycyk
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
	 * Set wwart
	 *
	 * @param float $wwart        	
	 * @return Gramfoodklembowfakturycyk
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
	 * @return Gramfoodklembowfakturycyk
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
	 * @return Gramfoodklembowfakturycyk
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
	 * @return Gramfoodklembowfakturycyk
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
	 * Set nipx
	 *
	 * @param string $nipx        	
	 * @return Gramfoodklembowfakturycyk
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
	 * @return Gramfoodklembowfakturycyk
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
	 * @return Gramfoodklembowfakturycyk
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
	 * Set nazw
	 *
	 * @param string $nazw        	
	 * @return Gramfoodklembowfakturycyk
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
	 * @return Gramfoodklembowfakturycyk
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
	 * @return Gramfoodklembowfakturycyk
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
	 * @return Gramfoodklembowfakturycyk
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
	 * @return Gramfoodklembowfakturycyk
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
	 * Set adrk
	 *
	 * @param string $adrk        	
	 * @return Gramfoodklembowfakturycyk
	 */
	public function setAdrk($adrk) {
		$this->adrk = $adrk;
		
		return $this;
	}
	
	/**
	 * Get adrk
	 *
	 * @return string
	 */
	public function getAdrk() {
		return $this->adrk;
	}
	
	/**
	 * Set dnext
	 *
	 * @param string $dnext        	
	 * @return Gramfoodklembowfakturycyk
	 */
	public function setDnext($dnext) {
		$this->dnext = $dnext;
		
		return $this;
	}
	
	/**
	 * Get dnext
	 *
	 * @return string
	 */
	public function getDnext() {
		return $this->dnext;
	}
	
	/**
	 * Set cen
	 *
	 * @param integer $cen        	
	 * @return Gramfoodklembowfakturycyk
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
	 * Set wardo
	 *
	 * @param string $wardo        	
	 * @return Gramfoodklembowfakturycyk
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
	 * @return Gramfoodklembowfakturycyk
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
	 * Set defn
	 *
	 * @param string $defn        	
	 * @return Gramfoodklembowfakturycyk
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
	 * Set defni
	 *
	 * @param integer $defni        	
	 * @return Gramfoodklembowfakturycyk
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
	 * Set drozl
	 *
	 * @param string $drozl        	
	 * @return Gramfoodklembowfakturycyk
	 */
	public function setDrozl($drozl) {
		$this->drozl = $drozl;
		
		return $this;
	}
	
	/**
	 * Get drozl
	 *
	 * @return string
	 */
	public function getDrozl() {
		return $this->drozl;
	}
	
	/**
	 * Set zasob
	 *
	 * @param string $zasob        	
	 * @return Gramfoodklembowfakturycyk
	 */
	public function setZasob($zasob) {
		$this->zasob = $zasob;
		
		return $this;
	}
	
	/**
	 * Get zasob
	 *
	 * @return string
	 */
	public function getZasob() {
		return $this->zasob;
	}
	
	/**
	 * Set kwzat
	 *
	 * @param float $kwzat        	
	 * @return Gramfoodklembowfakturycyk
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
	 * Set inf
	 *
	 * @param string $inf        	
	 * @return Gramfoodklembowfakturycyk
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
	 * Set notk
	 *
	 * @param string $notk        	
	 * @return Gramfoodklembowfakturycyk
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
	 * Set oswy
	 *
	 * @param string $oswy        	
	 * @return Gramfoodklembowfakturycyk
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
	 * Set osod
	 *
	 * @param string $osod        	
	 * @return Gramfoodklembowfakturycyk
	 */
	public function setOsod($osod) {
		$this->osod = $osod;
		
		return $this;
	}
	
	/**
	 * Get osod
	 *
	 * @return string
	 */
	public function getOsod() {
		return $this->osod;
	}
	
	/**
	 * Set ow
	 *
	 * @param string $ow        	
	 * @return Gramfoodklembowfakturycyk
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
	 * @return Gramfoodklembowfakturycyk
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
	 * Set te
	 *
	 * @param string $te        	
	 * @return Gramfoodklembowfakturycyk
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
	 * Set lat
	 *
	 * @param float $lat        	
	 * @return Gramfoodklembowfakturycyk
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
	 * @return Gramfoodklembowfakturycyk
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
	 * Set lok
	 *
	 * @param integer $lok        	
	 * @return Gramfoodklembowfakturycyk
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
	 * @return Gramfoodklembowfakturycyk
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
	 * @return Gramfoodklembowfakturycyk
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
	 * @return Gramfoodklembowfakturycyk
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
