<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Gramfoodklembowzakupy
 *
 * @ORM\Table(name="gramfoodklembowzakupy")
 * @ORM\Entity
 */
class Gramfoodklembowzakupy {
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
	 * @var string @ORM\Column(name="KI", type="string", length=10, nullable=true)
	 */
	private $ki;
	
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
	 * @var string @ORM\Column(name="Dwy", type="string", length=20, nullable=true)
	 */
	private $dwy;
	
	/**
	 *
	 * @var string @ORM\Column(name="fak", type="string", length=50, nullable=true)
	 */
	private $fak;
	
	/**
	 *
	 * @var string @ORM\Column(name="Dfa", type="string", length=20, nullable=true)
	 */
	private $dfa;
	
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
	 * @var string @ORM\Column(name="NB", type="string", length=1, nullable=true)
	 */
	private $nb;
	
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
	 * @var float @ORM\Column(name="V3", type="float", precision=10, scale=0, nullable=true)
	 */
	private $v3;
	
	/**
	 *
	 * @var string @ORM\Column(name="NVAT3", type="string", length=10, nullable=true)
	 */
	private $nvat3;
	
	/**
	 *
	 * @var float @ORM\Column(name="VAT3", type="float", precision=10, scale=0, nullable=true)
	 */
	private $vat3;
	
	/**
	 *
	 * @var float @ORM\Column(name="Clo", type="float", precision=10, scale=0, nullable=true)
	 */
	private $clo;
	
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
	 * @var float @ORM\Column(name="Rozl", type="float", precision=10, scale=0, nullable=true)
	 */
	private $rozl;
	
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
	 * @var string @ORM\Column(name="Dkurs", type="string", length=20, nullable=true)
	 */
	private $dkurs;
	
	/**
	 *
	 * @var float @ORM\Column(name="KursD", type="float", precision=10, scale=0, nullable=true)
	 */
	private $kursd;
	
	/**
	 *
	 * @var string @ORM\Column(name="DkursD", type="string", length=50, nullable=true)
	 */
	private $dkursd;
	
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
	 * @var string @ORM\Column(name="RejBOK", type="string", length=50, nullable=true)
	 */
	private $rejbok;
	
	/**
	 *
	 * @var string @ORM\Column(name="RejZZ", type="string", length=50, nullable=true)
	 */
	private $rejzz;
	
	/**
	 *
	 * @var string @ORM\Column(name="RejVWE", type="string", length=50, nullable=true)
	 */
	private $rejvwe;
	
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
	 * @var string @ORM\Column(name="Kodp", type="string", length=20, nullable=true)
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
	 * @var string @ORM\Column(name="Notk", type="text", length=16777215, nullable=true)
	 */
	private $notk;
	
	/**
	 *
	 * @var string @ORM\Column(name="kosz", type="string", length=50, nullable=true)
	 */
	private $kosz;
	
	/**
	 *
	 * @var string @ORM\Column(name="OW", type="string", length=50, nullable=true)
	 */
	private $ow;
	
	/**
	 *
	 * @var string @ORM\Column(name="Dsp", type="string", length=8, nullable=true)
	 */
	private $dsp;
	
	/**
	 *
	 * @var string @ORM\Column(name="Rejko", type="string", length=50, nullable=true)
	 */
	private $rejko;
	
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
	 *
	 * @var string @ORM\Column(name="Mail", type="string", length=50, nullable=true)
	 */
	private $mail;
	
	/**
	 *
	 * @var string @ORM\Column(name="kraj", type="string", length=50, nullable=true)
	 */
	private $kraj;
	
	/**
	 *
	 * @var string @ORM\Column(name="IDno", type="string", length=50, nullable=true)
	 */
	private $idno;
	
	/**
	 *
	 * @var string @ORM\Column(name="RM", type="string", length=6, nullable=true)
	 */
	private $rm;
	
	/**
	 *
	 * @var string @ORM\Column(name="zID", type="string", length=50, nullable=true)
	 */
	private $zid;
	
	/**
	 *
	 * @var string @ORM\Column(name="Te", type="text", length=16777215, nullable=true)
	 */
	private $te;
	
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
	 * @return Gramfoodklembowzakupy
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
	 * Set ki
	 *
	 * @param string $ki        	
	 * @return Gramfoodklembowzakupy
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
	 * Set idk
	 *
	 * @param string $idk        	
	 * @return Gramfoodklembowzakupy
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
	 * @return Gramfoodklembowzakupy
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
	 * Set nr
	 *
	 * @param integer $nr        	
	 * @return Gramfoodklembowzakupy
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
	 * @return Gramfoodklembowzakupy
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
	 * @return Gramfoodklembowzakupy
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
	 * @return Gramfoodklembowzakupy
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
	 * @return Gramfoodklembowzakupy
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
	 * @return Gramfoodklembowzakupy
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
	 * Set fak
	 *
	 * @param string $fak        	
	 * @return Gramfoodklembowzakupy
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
	 * Set dfa
	 *
	 * @param string $dfa        	
	 * @return Gramfoodklembowzakupy
	 */
	public function setDfa($dfa) {
		$this->dfa = $dfa;
		
		return $this;
	}
	
	/**
	 * Get dfa
	 *
	 * @return string
	 */
	public function getDfa() {
		return $this->dfa;
	}
	
	/**
	 * Set tpl
	 *
	 * @param string $tpl        	
	 * @return Gramfoodklembowzakupy
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
	 * @return Gramfoodklembowzakupy
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
	 * Set nb
	 *
	 * @param string $nb        	
	 * @return Gramfoodklembowzakupy
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
	 * Set n0
	 *
	 * @param float $n0        	
	 * @return Gramfoodklembowzakupy
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
	 * @return Gramfoodklembowzakupy
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
	 * @return Gramfoodklembowzakupy
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
	 * @return Gramfoodklembowzakupy
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
	 * Set v1
	 *
	 * @param float $v1        	
	 * @return Gramfoodklembowzakupy
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
	 * @return Gramfoodklembowzakupy
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
	 * Set v3
	 *
	 * @param float $v3        	
	 * @return Gramfoodklembowzakupy
	 */
	public function setV3($v3) {
		$this->v3 = $v3;
		
		return $this;
	}
	
	/**
	 * Get v3
	 *
	 * @return float
	 */
	public function getV3() {
		return $this->v3;
	}
	
	/**
	 * Set nvat3
	 *
	 * @param string $nvat3        	
	 * @return Gramfoodklembowzakupy
	 */
	public function setNvat3($nvat3) {
		$this->nvat3 = $nvat3;
		
		return $this;
	}
	
	/**
	 * Get nvat3
	 *
	 * @return string
	 */
	public function getNvat3() {
		return $this->nvat3;
	}
	
	/**
	 * Set vat3
	 *
	 * @param float $vat3        	
	 * @return Gramfoodklembowzakupy
	 */
	public function setVat3($vat3) {
		$this->vat3 = $vat3;
		
		return $this;
	}
	
	/**
	 * Get vat3
	 *
	 * @return float
	 */
	public function getVat3() {
		return $this->vat3;
	}
	
	/**
	 * Set clo
	 *
	 * @param float $clo        	
	 * @return Gramfoodklembowzakupy
	 */
	public function setClo($clo) {
		$this->clo = $clo;
		
		return $this;
	}
	
	/**
	 * Get clo
	 *
	 * @return float
	 */
	public function getClo() {
		return $this->clo;
	}
	
	/**
	 * Set wart
	 *
	 * @param float $wart        	
	 * @return Gramfoodklembowzakupy
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
	 * @return Gramfoodklembowzakupy
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
	 * Set rozl
	 *
	 * @param float $rozl        	
	 * @return Gramfoodklembowzakupy
	 */
	public function setRozl($rozl) {
		$this->rozl = $rozl;
		
		return $this;
	}
	
	/**
	 * Get rozl
	 *
	 * @return float
	 */
	public function getRozl() {
		return $this->rozl;
	}
	
	/**
	 * Set wal
	 *
	 * @param string $wal        	
	 * @return Gramfoodklembowzakupy
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
	 * @return Gramfoodklembowzakupy
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
	 * Set dkurs
	 *
	 * @param string $dkurs        	
	 * @return Gramfoodklembowzakupy
	 */
	public function setDkurs($dkurs) {
		$this->dkurs = $dkurs;
		
		return $this;
	}
	
	/**
	 * Get dkurs
	 *
	 * @return string
	 */
	public function getDkurs() {
		return $this->dkurs;
	}
	
	/**
	 * Set kursd
	 *
	 * @param float $kursd        	
	 * @return Gramfoodklembowzakupy
	 */
	public function setKursd($kursd) {
		$this->kursd = $kursd;
		
		return $this;
	}
	
	/**
	 * Get kursd
	 *
	 * @return float
	 */
	public function getKursd() {
		return $this->kursd;
	}
	
	/**
	 * Set dkursd
	 *
	 * @param string $dkursd        	
	 * @return Gramfoodklembowzakupy
	 */
	public function setDkursd($dkursd) {
		$this->dkursd = $dkursd;
		
		return $this;
	}
	
	/**
	 * Get dkursd
	 *
	 * @return string
	 */
	public function getDkursd() {
		return $this->dkursd;
	}
	
	/**
	 * Set nrk
	 *
	 * @param string $nrk        	
	 * @return Gramfoodklembowzakupy
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
	 * @return Gramfoodklembowzakupy
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
	 * Set rejbok
	 *
	 * @param string $rejbok        	
	 * @return Gramfoodklembowzakupy
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
	 * Set rejzz
	 *
	 * @param string $rejzz        	
	 * @return Gramfoodklembowzakupy
	 */
	public function setRejzz($rejzz) {
		$this->rejzz = $rejzz;
		
		return $this;
	}
	
	/**
	 * Get rejzz
	 *
	 * @return string
	 */
	public function getRejzz() {
		return $this->rejzz;
	}
	
	/**
	 * Set rejvwe
	 *
	 * @param string $rejvwe        	
	 * @return Gramfoodklembowzakupy
	 */
	public function setRejvwe($rejvwe) {
		$this->rejvwe = $rejvwe;
		
		return $this;
	}
	
	/**
	 * Get rejvwe
	 *
	 * @return string
	 */
	public function getRejvwe() {
		return $this->rejvwe;
	}
	
	/**
	 * Set nipx
	 *
	 * @param string $nipx        	
	 * @return Gramfoodklembowzakupy
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
	 * @return Gramfoodklembowzakupy
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
	 * Set nazw
	 *
	 * @param string $nazw        	
	 * @return Gramfoodklembowzakupy
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
	 * @return Gramfoodklembowzakupy
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
	 * @return Gramfoodklembowzakupy
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
	 * @return Gramfoodklembowzakupy
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
	 * @return Gramfoodklembowzakupy
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
	 * @return Gramfoodklembowzakupy
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
	 * Set defn
	 *
	 * @param string $defn        	
	 * @return Gramfoodklembowzakupy
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
	 * @return Gramfoodklembowzakupy
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
	 * Set notk
	 *
	 * @param string $notk        	
	 * @return Gramfoodklembowzakupy
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
	 * Set kosz
	 *
	 * @param string $kosz        	
	 * @return Gramfoodklembowzakupy
	 */
	public function setKosz($kosz) {
		$this->kosz = $kosz;
		
		return $this;
	}
	
	/**
	 * Get kosz
	 *
	 * @return string
	 */
	public function getKosz() {
		return $this->kosz;
	}
	
	/**
	 * Set ow
	 *
	 * @param string $ow        	
	 * @return Gramfoodklembowzakupy
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
	 * Set dsp
	 *
	 * @param string $dsp        	
	 * @return Gramfoodklembowzakupy
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
	 * Set rejko
	 *
	 * @param string $rejko        	
	 * @return Gramfoodklembowzakupy
	 */
	public function setRejko($rejko) {
		$this->rejko = $rejko;
		
		return $this;
	}
	
	/**
	 * Get rejko
	 *
	 * @return string
	 */
	public function getRejko() {
		return $this->rejko;
	}
	
	/**
	 * Set uz
	 *
	 * @param string $uz        	
	 * @return Gramfoodklembowzakupy
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
	 * @return Gramfoodklembowzakupy
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
	 * @return Gramfoodklembowzakupy
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
	 * @return Gramfoodklembowzakupy
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
	 * @return Gramfoodklembowzakupy
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
	 * Set mail
	 *
	 * @param string $mail        	
	 * @return Gramfoodklembowzakupy
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
	 * Set kraj
	 *
	 * @param string $kraj        	
	 * @return Gramfoodklembowzakupy
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
	 * Set idno
	 *
	 * @param string $idno        	
	 * @return Gramfoodklembowzakupy
	 */
	public function setIdno($idno) {
		$this->idno = $idno;
		
		return $this;
	}
	
	/**
	 * Get idno
	 *
	 * @return string
	 */
	public function getIdno() {
		return $this->idno;
	}
	
	/**
	 * Set rm
	 *
	 * @param string $rm        	
	 * @return Gramfoodklembowzakupy
	 */
	public function setRm($rm) {
		$this->rm = $rm;
		
		return $this;
	}
	
	/**
	 * Get rm
	 *
	 * @return string
	 */
	public function getRm() {
		return $this->rm;
	}
	
	/**
	 * Set zid
	 *
	 * @param string $zid        	
	 * @return Gramfoodklembowzakupy
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
	 * Set te
	 *
	 * @param string $te        	
	 * @return Gramfoodklembowzakupy
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
}
