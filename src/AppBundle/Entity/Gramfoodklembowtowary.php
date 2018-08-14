<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Gramfoodklembowtowary
 *
 * @ORM\Table(name="gramfoodklembowtowary")
 * @ORM\Entity
 */
class Gramfoodklembowtowary {
	/**
	 *
	 * @var string @ORM\Column(name="ID", type="string", length=50, nullable=false)
	 *      @ORM\Id
	 *      @ORM\GeneratedValue(strategy="IDENTITY")
	 */
	private $id;
	
	/**
	 *
	 * @var string @ORM\Column(name="MAG", type="string", length=20, nullable=true)
	 */
	private $mag;
	
	/**
	 *
	 * @var string @ORM\Column(name="Kod", type="string", length=50, nullable=true)
	 */
	private $kod;
	
	/**
	 *
	 * @var string @ORM\Column(name="nazw", type="string", length=250, nullable=true)
	 */
	private $nazw;
	
	/**
	 *
	 * @var string @ORM\Column(name="TU", type="string", length=1, nullable=true)
	 */
	private $tu;
	
	/**
	 *
	 * @var float @ORM\Column(name="Vat", type="float", precision=10, scale=0, nullable=true)
	 */
	private $vat;
	
	/**
	 *
	 * @var string @ORM\Column(name="NVat", type="string", length=20, nullable=true)
	 */
	private $nvat;
	
	/**
	 *
	 * @var integer @ORM\Column(name="stVAT", type="integer", nullable=true)
	 */
	private $stvat;
	
	/**
	 *
	 * @var string @ORM\Column(name="JM", type="string", length=10, nullable=true)
	 */
	private $jm;
	
	/**
	 *
	 * @var string @ORM\Column(name="Alias", type="string", length=50, nullable=true)
	 */
	private $alias;
	
	/**
	 *
	 * @var string @ORM\Column(name="NB", type="string", length=1, nullable=true)
	 */
	private $nb;
	
	/**
	 *
	 * @var string @ORM\Column(name="RoCN", type="string", length=10, nullable=true)
	 */
	private $rocn;
	
	/**
	 *
	 * @var float @ORM\Column(name="Cz", type="float", precision=10, scale=0, nullable=true)
	 */
	private $cz;
	
	/**
	 *
	 * @var float @ORM\Column(name="CzB", type="float", precision=10, scale=0, nullable=true)
	 */
	private $czb;
	
	/**
	 *
	 * @var float @ORM\Column(name="Cd", type="float", precision=10, scale=0, nullable=true)
	 */
	private $cd;
	
	/**
	 *
	 * @var float @ORM\Column(name="CN1", type="float", precision=10, scale=0, nullable=true)
	 */
	private $cn1;
	
	/**
	 *
	 * @var float @ORM\Column(name="CN2", type="float", precision=10, scale=0, nullable=true)
	 */
	private $cn2;
	
	/**
	 *
	 * @var float @ORM\Column(name="CN3", type="float", precision=10, scale=0, nullable=true)
	 */
	private $cn3;
	
	/**
	 *
	 * @var float @ORM\Column(name="CN4", type="float", precision=10, scale=0, nullable=true)
	 */
	private $cn4;
	
	/**
	 *
	 * @var float @ORM\Column(name="CB1", type="float", precision=10, scale=0, nullable=true)
	 */
	private $cb1;
	
	/**
	 *
	 * @var float @ORM\Column(name="CB2", type="float", precision=10, scale=0, nullable=true)
	 */
	private $cb2;
	
	/**
	 *
	 * @var float @ORM\Column(name="CB3", type="float", precision=10, scale=0, nullable=true)
	 */
	private $cb3;
	
	/**
	 *
	 * @var float @ORM\Column(name="CB4", type="float", precision=10, scale=0, nullable=true)
	 */
	private $cb4;
	
	/**
	 *
	 * @var float @ORM\Column(name="na1", type="float", precision=10, scale=0, nullable=true)
	 */
	private $na1;
	
	/**
	 *
	 * @var float @ORM\Column(name="na2", type="float", precision=10, scale=0, nullable=true)
	 */
	private $na2;
	
	/**
	 *
	 * @var float @ORM\Column(name="na3", type="float", precision=10, scale=0, nullable=true)
	 */
	private $na3;
	
	/**
	 *
	 * @var float @ORM\Column(name="na4", type="float", precision=10, scale=0, nullable=true)
	 */
	private $na4;
	
	/**
	 *
	 * @var string @ORM\Column(name="Pkw", type="string", length=50, nullable=true)
	 */
	private $pkw;
	
	/**
	 *
	 * @var string @ORM\Column(name="Kat", type="string", length=50, nullable=true)
	 */
	private $kat;
	
	/**
	 *
	 * @var string @ORM\Column(name="Pr", type="string", length=50, nullable=true)
	 */
	private $pr;
	
	/**
	 *
	 * @var string @ORM\Column(name="Gr", type="string", length=50, nullable=true)
	 */
	private $gr;
	
	/**
	 *
	 * @var string @ORM\Column(name="WG", type="string", length=1, nullable=true)
	 */
	private $wg;
	
	/**
	 *
	 * @var string @ORM\Column(name="NA", type="string", length=1, nullable=true)
	 */
	private $na;
	
	/**
	 *
	 * @var string @ORM\Column(name="Wal", type="string", length=10, nullable=true)
	 */
	private $wal;
	
	/**
	 *
	 * @var string @ORM\Column(name="Walw", type="string", length=10, nullable=true)
	 */
	private $walw;
	
	/**
	 *
	 * @var float @ORM\Column(name="BO", type="float", precision=10, scale=0, nullable=true)
	 */
	private $bo;
	
	/**
	 *
	 * @var float @ORM\Column(name="PZ", type="float", precision=10, scale=0, nullable=true)
	 */
	private $pz;
	
	/**
	 *
	 * @var float @ORM\Column(name="RO", type="float", precision=10, scale=0, nullable=true)
	 */
	private $ro;
	
	/**
	 *
	 * @var float @ORM\Column(name="STAN", type="float", precision=10, scale=0, nullable=true)
	 */
	private $stan;
	
	/**
	 *
	 * @var float @ORM\Column(name="Rez", type="float", precision=10, scale=0, nullable=true)
	 */
	private $rez;
	
	/**
	 *
	 * @var string @ORM\Column(name="OstR", type="string", length=8, nullable=true)
	 */
	private $ostr;
	
	/**
	 *
	 * @var string @ORM\Column(name="iNET", type="string", length=1, nullable=true)
	 */
	private $inet;
	
	/**
	 *
	 * @var float @ORM\Column(name="Obr", type="float", precision=10, scale=0, nullable=true)
	 */
	private $obr;
	
	/**
	 *
	 * @var float @ORM\Column(name="smin", type="float", precision=10, scale=0, nullable=true)
	 */
	private $smin;
	
	/**
	 *
	 * @var float @ORM\Column(name="smax", type="float", precision=10, scale=0, nullable=true)
	 */
	private $smax;
	
	/**
	 *
	 * @var float @ORM\Column(name="Waga", type="float", precision=10, scale=0, nullable=true)
	 */
	private $waga;
	
	/**
	 *
	 * @var float @ORM\Column(name="WagaB", type="float", precision=10, scale=0, nullable=true)
	 */
	private $wagab;
	
	/**
	 *
	 * @var string @ORM\Column(name="Dwaz", type="string", length=50, nullable=true)
	 */
	private $dwaz;
	
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
	 * @var string @ORM\Column(name="zID", type="string", length=50, nullable=true)
	 */
	private $zid;
	
	/**
	 *
	 * @var string @ORM\Column(name="Opis", type="text", length=16777215, nullable=true)
	 */
	private $opis;
	
	/**
	 *
	 * @var string @ORM\Column(name="Zd", type="string", length=250, nullable=true)
	 */
	private $zd;
	
	/**
	 *
	 * @var string @ORM\Column(name="AktZd", type="string", length=1, nullable=true)
	 */
	private $aktzd;
	
	/**
	 *
	 * @var integer @ORM\Column(name="pkt", type="integer", nullable=true)
	 */
	private $pkt;
	
	/**
	 *
	 * @var string @ORM\Column(name="DW", type="string", length=20, nullable=true)
	 */
	private $dw;
	
	/**
	 *
	 * @var string @ORM\Column(name="DZ", type="string", length=20, nullable=true)
	 */
	private $dz;
	
	/**
	 *
	 * @var string @ORM\Column(name="UZ", type="string", length=50, nullable=true)
	 */
	private $uz;
	
	/**
	 *
	 * @var string @ORM\Column(name="nazd", type="string", length=250, nullable=true)
	 */
	private $nazd;
	
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
	 * @var string @ORM\Column(name="sn", type="string", length=250, nullable=true)
	 */
	private $sn;
	
	/**
	 *
	 * @var string @ORM\Column(name="DataL", type="string", length=50, nullable=true)
	 */
	private $datal;
	
	/**
	 *
	 * @var string @ORM\Column(name="IDzam", type="string", length=50, nullable=true)
	 */
	private $idzam;
	
	/**
	 *
	 * @var float @ORM\Column(name="CzBO", type="float", precision=10, scale=0, nullable=true)
	 */
	private $czbo;
	
	/**
	 *
	 * @var string @ORM\Column(name="lokm", type="string", length=50, nullable=true)
	 */
	private $lokm;
	
	/**
	 *
	 * @var string @ORM\Column(name="JM2", type="string", length=50, nullable=true)
	 */
	private $jm2;
	
	/**
	 *
	 * @var string @ORM\Column(name="Nazw2", type="string", length=250, nullable=true)
	 */
	private $nazw2;
	
	/**
	 *
	 * @var integer @ORM\Column(name="nID", type="integer", nullable=true)
	 */
	private $nid;
	
	/**
	 *
	 * @var string @ORM\Column(name="NRy", type="string", length=10, nullable=true)
	 */
	private $nry;
	
	/**
	 *
	 * @var string @ORM\Column(name="kk", type="string", length=250, nullable=true)
	 */
	private $kk;
	
	/**
	 *
	 * @var string @ORM\Column(name="Notk", type="string", length=50, nullable=true)
	 */
	private $notk;
	
	/**
	 *
	 * @var string @ORM\Column(name="Te", type="text", length=16777215, nullable=true)
	 */
	private $te;
	
	/**
	 *
	 * @var float @ORM\Column(name="roBO", type="float", precision=10, scale=0, nullable=true)
	 */
	private $robo;
	
	/**
	 * Get id
	 *
	 * @return string
	 */
	public function getId() {
		return $this->id;
	}
	
	/**
	 * Set mag
	 *
	 * @param string $mag        	
	 * @return Gramfoodklembowtowary
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
	 * @return Gramfoodklembowtowary
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
	 * @return Gramfoodklembowtowary
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
	 * Set tu
	 *
	 * @param string $tu        	
	 * @return Gramfoodklembowtowary
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
	 * Set vat
	 *
	 * @param float $vat        	
	 * @return Gramfoodklembowtowary
	 */
	public function setVat($vat) {
		$this->vat = $vat;
		
		return $this;
	}
	
	/**
	 * Get vat
	 *
	 * @return float
	 */
	public function getVat() {
		return $this->vat;
	}
	
	/**
	 * Set nvat
	 *
	 * @param string $nvat        	
	 * @return Gramfoodklembowtowary
	 */
	public function setNvat($nvat) {
		$this->nvat = $nvat;
		
		return $this;
	}
	
	/**
	 * Get nvat
	 *
	 * @return string
	 */
	public function getNvat() {
		return $this->nvat;
	}
	
	/**
	 * Set stvat
	 *
	 * @param integer $stvat        	
	 * @return Gramfoodklembowtowary
	 */
	public function setStvat($stvat) {
		$this->stvat = $stvat;
		
		return $this;
	}
	
	/**
	 * Get stvat
	 *
	 * @return integer
	 */
	public function getStvat() {
		return $this->stvat;
	}
	
	/**
	 * Set jm
	 *
	 * @param string $jm        	
	 * @return Gramfoodklembowtowary
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
	 * Set alias
	 *
	 * @param string $alias        	
	 * @return Gramfoodklembowtowary
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
	 * Set nb
	 *
	 * @param string $nb        	
	 * @return Gramfoodklembowtowary
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
	 * Set rocn
	 *
	 * @param string $rocn        	
	 * @return Gramfoodklembowtowary
	 */
	public function setRocn($rocn) {
		$this->rocn = $rocn;
		
		return $this;
	}
	
	/**
	 * Get rocn
	 *
	 * @return string
	 */
	public function getRocn() {
		return $this->rocn;
	}
	
	/**
	 * Set cz
	 *
	 * @param float $cz        	
	 * @return Gramfoodklembowtowary
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
	 * Set czb
	 *
	 * @param float $czb        	
	 * @return Gramfoodklembowtowary
	 */
	public function setCzb($czb) {
		$this->czb = $czb;
		
		return $this;
	}
	
	/**
	 * Get czb
	 *
	 * @return float
	 */
	public function getCzb() {
		return $this->czb;
	}
	
	/**
	 * Set cd
	 *
	 * @param float $cd        	
	 * @return Gramfoodklembowtowary
	 */
	public function setCd($cd) {
		$this->cd = $cd;
		
		return $this;
	}
	
	/**
	 * Get cd
	 *
	 * @return float
	 */
	public function getCd() {
		return $this->cd;
	}
	
	/**
	 * Set cn1
	 *
	 * @param float $cn1        	
	 * @return Gramfoodklembowtowary
	 */
	public function setCn1($cn1) {
		$this->cn1 = $cn1;
		
		return $this;
	}
	
	/**
	 * Get cn1
	 *
	 * @return float
	 */
	public function getCn1() {
		return $this->cn1;
	}
	
	/**
	 * Set cn2
	 *
	 * @param float $cn2        	
	 * @return Gramfoodklembowtowary
	 */
	public function setCn2($cn2) {
		$this->cn2 = $cn2;
		
		return $this;
	}
	
	/**
	 * Get cn2
	 *
	 * @return float
	 */
	public function getCn2() {
		return $this->cn2;
	}
	
	/**
	 * Set cn3
	 *
	 * @param float $cn3        	
	 * @return Gramfoodklembowtowary
	 */
	public function setCn3($cn3) {
		$this->cn3 = $cn3;
		
		return $this;
	}
	
	/**
	 * Get cn3
	 *
	 * @return float
	 */
	public function getCn3() {
		return $this->cn3;
	}
	
	/**
	 * Set cn4
	 *
	 * @param float $cn4        	
	 * @return Gramfoodklembowtowary
	 */
	public function setCn4($cn4) {
		$this->cn4 = $cn4;
		
		return $this;
	}
	
	/**
	 * Get cn4
	 *
	 * @return float
	 */
	public function getCn4() {
		return $this->cn4;
	}
	
	/**
	 * Set cb1
	 *
	 * @param float $cb1        	
	 * @return Gramfoodklembowtowary
	 */
	public function setCb1($cb1) {
		$this->cb1 = $cb1;
		
		return $this;
	}
	
	/**
	 * Get cb1
	 *
	 * @return float
	 */
	public function getCb1() {
		return $this->cb1;
	}
	
	/**
	 * Set cb2
	 *
	 * @param float $cb2        	
	 * @return Gramfoodklembowtowary
	 */
	public function setCb2($cb2) {
		$this->cb2 = $cb2;
		
		return $this;
	}
	
	/**
	 * Get cb2
	 *
	 * @return float
	 */
	public function getCb2() {
		return $this->cb2;
	}
	
	/**
	 * Set cb3
	 *
	 * @param float $cb3        	
	 * @return Gramfoodklembowtowary
	 */
	public function setCb3($cb3) {
		$this->cb3 = $cb3;
		
		return $this;
	}
	
	/**
	 * Get cb3
	 *
	 * @return float
	 */
	public function getCb3() {
		return $this->cb3;
	}
	
	/**
	 * Set cb4
	 *
	 * @param float $cb4        	
	 * @return Gramfoodklembowtowary
	 */
	public function setCb4($cb4) {
		$this->cb4 = $cb4;
		
		return $this;
	}
	
	/**
	 * Get cb4
	 *
	 * @return float
	 */
	public function getCb4() {
		return $this->cb4;
	}
	
	/**
	 * Set na1
	 *
	 * @param float $na1        	
	 * @return Gramfoodklembowtowary
	 */
	public function setNa1($na1) {
		$this->na1 = $na1;
		
		return $this;
	}
	
	/**
	 * Get na1
	 *
	 * @return float
	 */
	public function getNa1() {
		return $this->na1;
	}
	
	/**
	 * Set na2
	 *
	 * @param float $na2        	
	 * @return Gramfoodklembowtowary
	 */
	public function setNa2($na2) {
		$this->na2 = $na2;
		
		return $this;
	}
	
	/**
	 * Get na2
	 *
	 * @return float
	 */
	public function getNa2() {
		return $this->na2;
	}
	
	/**
	 * Set na3
	 *
	 * @param float $na3        	
	 * @return Gramfoodklembowtowary
	 */
	public function setNa3($na3) {
		$this->na3 = $na3;
		
		return $this;
	}
	
	/**
	 * Get na3
	 *
	 * @return float
	 */
	public function getNa3() {
		return $this->na3;
	}
	
	/**
	 * Set na4
	 *
	 * @param float $na4        	
	 * @return Gramfoodklembowtowary
	 */
	public function setNa4($na4) {
		$this->na4 = $na4;
		
		return $this;
	}
	
	/**
	 * Get na4
	 *
	 * @return float
	 */
	public function getNa4() {
		return $this->na4;
	}
	
	/**
	 * Set pkw
	 *
	 * @param string $pkw        	
	 * @return Gramfoodklembowtowary
	 */
	public function setPkw($pkw) {
		$this->pkw = $pkw;
		
		return $this;
	}
	
	/**
	 * Get pkw
	 *
	 * @return string
	 */
	public function getPkw() {
		return $this->pkw;
	}
	
	/**
	 * Set kat
	 *
	 * @param string $kat        	
	 * @return Gramfoodklembowtowary
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
	 * Set pr
	 *
	 * @param string $pr        	
	 * @return Gramfoodklembowtowary
	 */
	public function setPr($pr) {
		$this->pr = $pr;
		
		return $this;
	}
	
	/**
	 * Get pr
	 *
	 * @return string
	 */
	public function getPr() {
		return $this->pr;
	}
	
	/**
	 * Set gr
	 *
	 * @param string $gr        	
	 * @return Gramfoodklembowtowary
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
	 * Set wg
	 *
	 * @param string $wg        	
	 * @return Gramfoodklembowtowary
	 */
	public function setWg($wg) {
		$this->wg = $wg;
		
		return $this;
	}
	
	/**
	 * Get wg
	 *
	 * @return string
	 */
	public function getWg() {
		return $this->wg;
	}
	
	/**
	 * Set na
	 *
	 * @param string $na        	
	 * @return Gramfoodklembowtowary
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
	 * Set wal
	 *
	 * @param string $wal        	
	 * @return Gramfoodklembowtowary
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
	 * Set walw
	 *
	 * @param string $walw        	
	 * @return Gramfoodklembowtowary
	 */
	public function setWalw($walw) {
		$this->walw = $walw;
		
		return $this;
	}
	
	/**
	 * Get walw
	 *
	 * @return string
	 */
	public function getWalw() {
		return $this->walw;
	}
	
	/**
	 * Set bo
	 *
	 * @param float $bo        	
	 * @return Gramfoodklembowtowary
	 */
	public function setBo($bo) {
		$this->bo = $bo;
		
		return $this;
	}
	
	/**
	 * Get bo
	 *
	 * @return float
	 */
	public function getBo() {
		return $this->bo;
	}
	
	/**
	 * Set pz
	 *
	 * @param float $pz        	
	 * @return Gramfoodklembowtowary
	 */
	public function setPz($pz) {
		$this->pz = $pz;
		
		return $this;
	}
	
	/**
	 * Get pz
	 *
	 * @return float
	 */
	public function getPz() {
		return $this->pz;
	}
	
	/**
	 * Set ro
	 *
	 * @param float $ro        	
	 * @return Gramfoodklembowtowary
	 */
	public function setRo($ro) {
		$this->ro = $ro;
		
		return $this;
	}
	
	/**
	 * Get ro
	 *
	 * @return float
	 */
	public function getRo() {
		return $this->ro;
	}
	
	/**
	 * Set stan
	 *
	 * @param float $stan        	
	 * @return Gramfoodklembowtowary
	 */
	public function setStan($stan) {
		$this->stan = $stan;
		
		return $this;
	}
	
	/**
	 * Get stan
	 *
	 * @return float
	 */
	public function getStan() {
		return $this->stan;
	}
	
	/**
	 * Set rez
	 *
	 * @param float $rez        	
	 * @return Gramfoodklembowtowary
	 */
	public function setRez($rez) {
		$this->rez = $rez;
		
		return $this;
	}
	
	/**
	 * Get rez
	 *
	 * @return float
	 */
	public function getRez() {
		return $this->rez;
	}
	
	/**
	 * Set ostr
	 *
	 * @param string $ostr        	
	 * @return Gramfoodklembowtowary
	 */
	public function setOstr($ostr) {
		$this->ostr = $ostr;
		
		return $this;
	}
	
	/**
	 * Get ostr
	 *
	 * @return string
	 */
	public function getOstr() {
		return $this->ostr;
	}
	
	/**
	 * Set inet
	 *
	 * @param string $inet        	
	 * @return Gramfoodklembowtowary
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
	 * Set obr
	 *
	 * @param float $obr        	
	 * @return Gramfoodklembowtowary
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
	 * Set smin
	 *
	 * @param float $smin        	
	 * @return Gramfoodklembowtowary
	 */
	public function setSmin($smin) {
		$this->smin = $smin;
		
		return $this;
	}
	
	/**
	 * Get smin
	 *
	 * @return float
	 */
	public function getSmin() {
		return $this->smin;
	}
	
	/**
	 * Set smax
	 *
	 * @param float $smax        	
	 * @return Gramfoodklembowtowary
	 */
	public function setSmax($smax) {
		$this->smax = $smax;
		
		return $this;
	}
	
	/**
	 * Get smax
	 *
	 * @return float
	 */
	public function getSmax() {
		return $this->smax;
	}
	
	/**
	 * Set waga
	 *
	 * @param float $waga        	
	 * @return Gramfoodklembowtowary
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
	 * Set wagab
	 *
	 * @param float $wagab        	
	 * @return Gramfoodklembowtowary
	 */
	public function setWagab($wagab) {
		$this->wagab = $wagab;
		
		return $this;
	}
	
	/**
	 * Get wagab
	 *
	 * @return float
	 */
	public function getWagab() {
		return $this->wagab;
	}
	
	/**
	 * Set dwaz
	 *
	 * @param string $dwaz        	
	 * @return Gramfoodklembowtowary
	 */
	public function setDwaz($dwaz) {
		$this->dwaz = $dwaz;
		
		return $this;
	}
	
	/**
	 * Get dwaz
	 *
	 * @return string
	 */
	public function getDwaz() {
		return $this->dwaz;
	}
	
	/**
	 * Set op1
	 *
	 * @param string $op1        	
	 * @return Gramfoodklembowtowary
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
	 * @return Gramfoodklembowtowary
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
	 * @return Gramfoodklembowtowary
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
	 * @return Gramfoodklembowtowary
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
	 * Set zid
	 *
	 * @param string $zid        	
	 * @return Gramfoodklembowtowary
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
	 * Set opis
	 *
	 * @param string $opis        	
	 * @return Gramfoodklembowtowary
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
	 * Set zd
	 *
	 * @param string $zd        	
	 * @return Gramfoodklembowtowary
	 */
	public function setZd($zd) {
		$this->zd = $zd;
		
		return $this;
	}
	
	/**
	 * Get zd
	 *
	 * @return string
	 */
	public function getZd() {
		return $this->zd;
	}
	
	/**
	 * Set aktzd
	 *
	 * @param string $aktzd        	
	 * @return Gramfoodklembowtowary
	 */
	public function setAktzd($aktzd) {
		$this->aktzd = $aktzd;
		
		return $this;
	}
	
	/**
	 * Get aktzd
	 *
	 * @return string
	 */
	public function getAktzd() {
		return $this->aktzd;
	}
	
	/**
	 * Set pkt
	 *
	 * @param integer $pkt        	
	 * @return Gramfoodklembowtowary
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
	 * Set dw
	 *
	 * @param string $dw        	
	 * @return Gramfoodklembowtowary
	 */
	public function setDw($dw) {
		$this->dw = $dw;
		
		return $this;
	}
	
	/**
	 * Get dw
	 *
	 * @return string
	 */
	public function getDw() {
		return $this->dw;
	}
	
	/**
	 * Set dz
	 *
	 * @param string $dz        	
	 * @return Gramfoodklembowtowary
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
	 * Set uz
	 *
	 * @param string $uz        	
	 * @return Gramfoodklembowtowary
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
	 * Set nazd
	 *
	 * @param string $nazd        	
	 * @return Gramfoodklembowtowary
	 */
	public function setNazd($nazd) {
		$this->nazd = $nazd;
		
		return $this;
	}
	
	/**
	 * Get nazd
	 *
	 * @return string
	 */
	public function getNazd() {
		return $this->nazd;
	}
	
	/**
	 * Set akt
	 *
	 * @param string $akt        	
	 * @return Gramfoodklembowtowary
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
	 * @return Gramfoodklembowtowary
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
	 * @return Gramfoodklembowtowary
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
	 * Set sn
	 *
	 * @param string $sn        	
	 * @return Gramfoodklembowtowary
	 */
	public function setSn($sn) {
		$this->sn = $sn;
		
		return $this;
	}
	
	/**
	 * Get sn
	 *
	 * @return string
	 */
	public function getSn() {
		return $this->sn;
	}
	
	/**
	 * Set datal
	 *
	 * @param string $datal        	
	 * @return Gramfoodklembowtowary
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
	 * Set idzam
	 *
	 * @param string $idzam        	
	 * @return Gramfoodklembowtowary
	 */
	public function setIdzam($idzam) {
		$this->idzam = $idzam;
		
		return $this;
	}
	
	/**
	 * Get idzam
	 *
	 * @return string
	 */
	public function getIdzam() {
		return $this->idzam;
	}
	
	/**
	 * Set czbo
	 *
	 * @param float $czbo        	
	 * @return Gramfoodklembowtowary
	 */
	public function setCzbo($czbo) {
		$this->czbo = $czbo;
		
		return $this;
	}
	
	/**
	 * Get czbo
	 *
	 * @return float
	 */
	public function getCzbo() {
		return $this->czbo;
	}
	
	/**
	 * Set lokm
	 *
	 * @param string $lokm        	
	 * @return Gramfoodklembowtowary
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
	
	/**
	 * Set jm2
	 *
	 * @param string $jm2        	
	 * @return Gramfoodklembowtowary
	 */
	public function setJm2($jm2) {
		$this->jm2 = $jm2;
		
		return $this;
	}
	
	/**
	 * Get jm2
	 *
	 * @return string
	 */
	public function getJm2() {
		return $this->jm2;
	}
	
	/**
	 * Set nazw2
	 *
	 * @param string $nazw2        	
	 * @return Gramfoodklembowtowary
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
	 * Set nid
	 *
	 * @param integer $nid        	
	 * @return Gramfoodklembowtowary
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
	 * Set nry
	 *
	 * @param string $nry        	
	 * @return Gramfoodklembowtowary
	 */
	public function setNry($nry) {
		$this->nry = $nry;
		
		return $this;
	}
	
	/**
	 * Get nry
	 *
	 * @return string
	 */
	public function getNry() {
		return $this->nry;
	}
	
	/**
	 * Set kk
	 *
	 * @param string $kk        	
	 * @return Gramfoodklembowtowary
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
	 * Set notk
	 *
	 * @param string $notk        	
	 * @return Gramfoodklembowtowary
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
	 * Set te
	 *
	 * @param string $te        	
	 * @return Gramfoodklembowtowary
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
	 * Set robo
	 *
	 * @param float $robo        	
	 * @return Gramfoodklembowtowary
	 */
	public function setRobo($robo) {
		$this->robo = $robo;
		
		return $this;
	}
	
	/**
	 * Get robo
	 *
	 * @return float
	 */
	public function getRobo() {
		return $this->robo;
	}
}
