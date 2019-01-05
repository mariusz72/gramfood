<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Gramfoodklembowspec
 *
 * @ORM\Table(name="viewgramfoodklembowspecil")
 * @ORM\Entity
 */
class Viewgramfoodklembowspecil {
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
	 * @var string @ORM\Column(name="TU", type="string", length=10, nullable=true)
	 */
	private $tu;
	
	/**
	 *
	 * @var string @ORM\Column(name="PR", type="string", length=1, nullable=true)
	 */
	private $pr;
	
	/**
	 *
	 * @var integer @ORM\Column(name="Poz", type="integer", nullable=true)
	 */
	private $poz;
	
	/**
	 *
	 * @var string @ORM\Column(name="NrR", type="string", length=50, nullable=true)
	 */
	private $nrr;
	
	/**
	 *
	 * @var string @ORM\Column(name="IDf", type="string", length=50, nullable=true)
	 */
	private $idf;
	
	/**
	 *
	 * @var string @ORM\Column(name="IDwz", type="string", length=50, nullable=true)
	 */
	private $idwz;
	
	/**
	 *
	 * @var string @ORM\Column(name="IDpar", type="string", length=50, nullable=true)
	 */
	private $idpar;
	
	/**
	 *
	 * @var string @ORM\Column(name="IDzl", type="string", length=50, nullable=true)
	 */
	private $idzl;
	
	/**
	 *
	 * @var string @ORM\Column(name="IDpz", type="string", length=50, nullable=true)
	 */
	private $idpz;
	
	/**
	 *
	 * @var string @ORM\Column(name="Data", type="string", length=50, nullable=true)
	 */
	private $data;
	
	/**
	 *
	 * @var string @ORM\Column(name="Alias", type="string", length=50, nullable=true)
	 */
	private $alias;
	
	/**
	 *
	 * @var string @ORM\Column(name="Mag", type="string", length=50, nullable=true)
	 */
	private $mag;
	
	/**
	 *
	 * @var string @ORM\Column(name="Kod", type="string", length=50, nullable=true)
	 */
	private $kod;
	
	/**
	 *
	 * @var string @ORM\Column(name="Nazw", type="text", length=16777215, nullable=true)
	 */
	private $nazw;
	
	/**
	 *
	 * @var string @ORM\Column(name="JM", type="string", length=20, nullable=true)
	 */
	private $jm;
	
	/**
	 *
	 * @var float @ORM\Column(name="il", type="float", precision=10, scale=0, nullable=true)
	 */
	private $il;
	
	/**
	 *
	 * @var float @ORM\Column(name="sumk", type="float", precision=10, scale=0, nullable=true)
	 */
	private $sumk;
	
	/**
	 *
	 * @var float @ORM\Column(name="sumwz", type="float", precision=10, scale=0, nullable=true)
	 */
	private $sumwz;
	
	/**
	 *
	 * @var float @ORM\Column(name="CN", type="float", precision=10, scale=0, nullable=true)
	 */
	private $cn;
	
	/**
	 *
	 * @var float @ORM\Column(name="CB", type="float", precision=10, scale=0, nullable=true)
	 */
	private $cb;
	
	/**
	 *
	 * @var float @ORM\Column(name="Cena", type="float", precision=10, scale=0, nullable=true)
	 */
	private $cena;
	
	/**
	 *
	 * @var float @ORM\Column(name="Cz", type="float", precision=10, scale=0, nullable=true)
	 */
	private $cz;
	
	/**
	 *
	 * @var string @ORM\Column(name="NB", type="string", length=1, nullable=true)
	 */
	private $nb;
	
	/**
	 *
	 * @var string @ORM\Column(name="NVat", type="string", length=20, nullable=true)
	 */
	private $nvat;
	
	/**
	 *
	 * @var float @ORM\Column(name="VAT", type="float", precision=10, scale=0, nullable=true)
	 */
	private $vat;
	
	/**
	 *
	 * @var integer @ORM\Column(name="stVAT", type="integer", nullable=true)
	 */
	private $stvat;
	
	/**
	 *
	 * @var float @ORM\Column(name="PrRab", type="float", precision=10, scale=0, nullable=true)
	 */
	private $prrab;
	
	/**
	 *
	 * @var string @ORM\Column(name="PKW", type="string", length=100, nullable=true)
	 */
	private $pkw;
	
	/**
	 *
	 * @var string @ORM\Column(name="Kat", type="string", length=50, nullable=true)
	 */
	private $kat;
	
	/**
	 *
	 * @var string @ORM\Column(name="Gr", type="string", length=50, nullable=true)
	 */
	private $gr;
	
	/**
	 *
	 * @var string @ORM\Column(name="Wal", type="string", length=10, nullable=true)
	 */
	private $wal;
	
	/**
	 *
	 * @var float @ORM\Column(name="kurs", type="float", precision=10, scale=0, nullable=true)
	 */
	private $kurs;
	
	/**
	 *
	 * @var integer @ORM\Column(name="przel", type="integer", nullable=true)
	 */
	private $przel;
	
	/**
	 *
	 * @var string @ORM\Column(name="KA", type="string", length=1, nullable=true)
	 */
	private $ka;
	
	/**
	 *
	 * @var float @ORM\Column(name="Waga", type="float", precision=10, scale=0, nullable=true)
	 */
	private $waga;
	
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
	 * @var string @ORM\Column(name="Te", type="text", length=16777215, nullable=true)
	 */
	private $te;
	
	/**
	 *
	 * @var integer @ORM\Column(name="LOK", type="integer", nullable=true)
	 */
	private $lok;
	
	/**
	 *
	 * @var string @ORM\Column(name="UZ", type="string", length=50, nullable=true)
	 */
	private $uz;
	
	/**
	 *
	 * @var string @ORM\Column(name="RejKo", type="string", length=50, nullable=true)
	 */
	private $rejko;
	
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
	 * @var string @ORM\Column(name="dwaz", type="string", length=50, nullable=true)
	 */
	private $dwaz;
	
	/**
	 *
	 * @var string @ORM\Column(name="sn", type="text", length=16777215, nullable=true)
	 */
	private $sn;
	
	/**
	 *
	 * @var string @ORM\Column(name="IDt", type="string", length=50, nullable=true)
	 */
	private $idt;
	
	/**
	 *
	 * @var string @ORM\Column(name="Nazwk", type="string", length=80, nullable=true)
	 */
	private $nazwk;
	
	/**
	 *
	 * @var float @ORM\Column(name="ro", type="float", precision=10, scale=0, nullable=true)
	 */
	private $ro;
	
	/**
	 *
	 * @var string @ORM\Column(name="rejpz", type="string", length=50, nullable=true)
	 */
	private $rejpz;
	
	/**
	 *
	 * @var string @ORM\Column(name="zpz", type="string", length=50, nullable=true)
	 */
	private $zpz;
	
	/**
	 *
	 * @var float @ORM\Column(name="cenab", type="float", precision=10, scale=0, nullable=true)
	 */
	private $cenab;
	
	/**
	 *
	 * @var string @ORM\Column(name="dsp", type="string", length=8, nullable=true)
	 */
	private $dsp;
	
	/**
     * @return float
     */
    public function getSumk()
    {
        return $this->sumk;
    }

    /**
     * @return float
     */
    public function getSumwz()
    {
        return $this->sumwz;
    }

    /**
     * @param float $sumk
     */
    public function setSumk($sumk)
    {
        $this->sumk = $sumk;
    }

    /**
     * @param float $sumwz
     */
    public function setSumwz($sumwz)
    {
        $this->sumwz = $sumwz;
    }

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
	 * @return Viewgramfoodklembowspecil
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
	 * Set tu
	 *
	 * @param string $tu        	
	 * @return Viewgramfoodklembowspecil
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
	 * Set pr
	 *
	 * @param string $pr        	
	 * @return Viewgramfoodklembowspecil
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
	 * Set poz
	 *
	 * @param integer $poz        	
	 * @return Viewgramfoodklembowspecil
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
	 * Set nrr
	 *
	 * @param string $nrr        	
	 * @return Viewgramfoodklembowspecil
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
	 * Set idf
	 *
	 * @param string $idf        	
	 * @return Viewgramfoodklembowspecil
	 */
	public function setIdf($idf) {
		$this->idf = $idf;
		
		return $this;
	}
	
	/**
	 * Get idf
	 *
	 * @return string
	 */
	public function getIdf() {
		return $this->idf;
	}
	
	/**
	 * Set idwz
	 *
	 * @param string $idwz        	
	 * @return Viewgramfoodklembowspecil
	 */
	public function setIdwz($idwz) {
		$this->idwz = $idwz;
		
		return $this;
	}
	
	/**
	 * Get idwz
	 *
	 * @return string
	 */
	public function getIdwz() {
		return $this->idwz;
	}
	
	/**
	 * Set idpar
	 *
	 * @param string $idpar        	
	 * @return Viewgramfoodklembowspecil
	 */
	public function setIdpar($idpar) {
		$this->idpar = $idpar;
		
		return $this;
	}
	
	/**
	 * Get idpar
	 *
	 * @return string
	 */
	public function getIdpar() {
		return $this->idpar;
	}
	
	/**
	 * Set idzl
	 *
	 * @param string $idzl        	
	 * @return Viewgramfoodklembowspecil
	 */
	public function setIdzl($idzl) {
		$this->idzl = $idzl;
		
		return $this;
	}
	
	/**
	 * Get idzl
	 *
	 * @return string
	 */
	public function getIdzl() {
		return $this->idzl;
	}
	
	/**
	 * Set idpz
	 *
	 * @param string $idpz        	
	 * @return Viewgramfoodklembowspecil
	 */
	public function setIdpz($idpz) {
		$this->idpz = $idpz;
		
		return $this;
	}
	
	/**
	 * Get idpz
	 *
	 * @return string
	 */
	public function getIdpz() {
		return $this->idpz;
	}
	
	/**
	 * Set data
	 *
	 * @param string $data        	
	 * @return Viewgramfoodklembowspecil
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
	 * Set alias
	 *
	 * @param string $alias        	
	 * @return Viewgramfoodklembowspecil
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
	 * Set mag
	 *
	 * @param string $mag        	
	 * @return Viewgramfoodklembowspecil
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
	 * @return Viewgramfoodklembowspecil
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
	 * @return Viewgramfoodklembowspecil
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
	 * @return Viewgramfoodklembowspecil
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
	 * Set il
	 *
	 * @param float $il        	
	 * @return Viewgramfoodklembowspecil
	 */
	public function setIl($il) {
		$this->il = $il;
		
		return $this;
	}
	
	/**
	 * Get il
	 *
	 * @return float
	 */
	public function getIl() {
		return $this->il;
	}
	
	/**
	 * Set cn
	 *
	 * @param float $cn        	
	 * @return Viewgramfoodklembowspecil
	 */
	public function setCn($cn) {
		$this->cn = $cn;
		
		return $this;
	}
	
	/**
	 * Get cn
	 *
	 * @return float
	 */
	public function getCn() {
		return $this->cn;
	}
	
	/**
	 * Set cb
	 *
	 * @param float $cb        	
	 * @return Gramfoodklembowspec
	 */
	public function setCb($cb) {
		$this->cb = $cb;
		
		return $this;
	}
	
	/**
	 * Get cb
	 *
	 * @return float
	 */
	public function getCb() {
		return $this->cb;
	}
	
	/**
	 * Set cena
	 *
	 * @param float $cena        	
	 * @return 
	 */
	public function setCena($cena) {
		$this->cena = $cena;
		
		return $this;
	}
	
	/**
	 * Get cena
	 *
	 * @return float
	 */
	public function getCena() {
		return $this->cena;
	}
	
	/**
	 * Set cz
	 *
	 * @param float $cz        	
	 * @return 
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
	 * Set nb
	 *
	 * @param string $nb        	
	 * @return 
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
	 * Set nvat
	 *
	 * @param string $nvat        	
	 * @return 
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
	 * Set vat
	 *
	 * @param float $vat        	
	 * @return 
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
	 * Set stvat
	 *
	 * @param integer $stvat        	
	 * @return 
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
	 * Set prrab
	 *
	 * @param float $prrab        	
	 * @return 
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
	 * Set pkw
	 *
	 * @param string $pkw        	
	 * @return 
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
	 * @return 
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
	 * Set gr
	 *
	 * @param string $gr        	
	 * @return 
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
	 * Set wal
	 *
	 * @param string $wal        	
	 * @return 
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
	 * @return 
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
	 * @return 
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
	 * Set ka
	 *
	 * @param string $ka        	
	 * @return 
	 */
	public function setKa($ka) {
		$this->ka = $ka;
		
		return $this;
	}
	
	/**
	 * Get ka
	 *
	 * @return string
	 */
	public function getKa() {
		return $this->ka;
	}
	
	/**
	 * Set waga
	 *
	 * @param float $waga        	
	 * @return 
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
	 * Set op1
	 *
	 * @param string $op1        	
	 * @return 
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
	 * @return 
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
	 * @return 
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
	 * @return 
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
	 * Set te
	 *
	 * @param string $te        	
	 * @return 
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
	 * Set lok
	 *
	 * @param integer $lok        	
	 * @return 
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
	 * Set uz
	 *
	 * @param string $uz        	
	 * @return 
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
	 * Set rejko
	 *
	 * @param string $rejko        	
	 * @return 
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
	 * Set akt
	 *
	 * @param string $akt        	
	 * @return 
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
	 * @return 
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
	 * @return 
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
	 * Set dwaz
	 *
	 * @param string $dwaz        	
	 * @return 
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
	 * Set sn
	 *
	 * @param string $sn        	
	 * @return 
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
	 * Set idt
	 *
	 * @param string $idt        	
	 * @return 
	 */
	public function setIdt($idt) {
		$this->idt = $idt;
		
		return $this;
	}
	
	/**
	 * Get idt
	 *
	 * @return string
	 */
	public function getIdt() {
		return $this->idt;
	}
	
	/**
	 * Set nazwk
	 *
	 * @param string $nazwk        	
	 * @return 
	 */
	public function setNazwk($nazwk) {
		$this->nazwk = $nazwk;
		
		return $this;
	}
	
	/**
	 * Get nazwk
	 *
	 * @return string
	 */
	public function getNazwk() {
		return $this->nazwk;
	}
	
	/**
	 * Set ro
	 *
	 * @param float $ro        	
	 * @return 
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
	 * Set rejpz
	 *
	 * @param string $rejpz        	
	 * @return 
	 */
	public function setRejpz($rejpz) {
		$this->rejpz = $rejpz;
		
		return $this;
	}
	
	/**
	 * Get rejpz
	 *
	 * @return string
	 */
	public function getRejpz() {
		return $this->rejpz;
	}
	
	/**
	 * Set zpz
	 *
	 * @param string $zpz        	
	 * @return 
	 */
	public function setZpz($zpz) {
		$this->zpz = $zpz;
		
		return $this;
	}
	
	/**
	 * Get zpz
	 *
	 * @return string
	 */
	public function getZpz() {
		return $this->zpz;
	}
	
	/**
	 * Set cenab
	 *
	 * @param float $cenab        	
	 * @return 
	 */
	public function setCenab($cenab) {
		$this->cenab = $cenab;
		
		return $this;
	}
	
	/**
	 * Get cenab
	 *
	 * @return float
	 */
	public function getCenab() {
		return $this->cenab;
	}
	
	/**
	 * Set dsp
	 *
	 * @param string $dsp        	
	 * @return 
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
}
