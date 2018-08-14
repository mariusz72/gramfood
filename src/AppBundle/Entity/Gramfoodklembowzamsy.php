<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Gramfoodklembowzamsy
 *
 * @ORM\Table(name="gramfoodklembowzamsy")
 * @ORM\Entity
 */
class Gramfoodklembowzamsy {
	/**
	 *
	 * @var string @ORM\Column(name="ID", type="string", length=50, nullable=false)
	 *      @ORM\Id
	 *      @ORM\GeneratedValue(strategy="IDENTITY")
	 */
	private $id;
	
	/**
	 *
	 * @var string @ORM\Column(name="IDf", type="string", length=50, nullable=true)
	 */
	private $idf;
	
	/**
	 *
	 * @var string @ORM\Column(name="NrR", type="string", length=50, nullable=true)
	 */
	private $nrr;
	
	/**
	 *
	 * @var integer @ORM\Column(name="Poz", type="integer", nullable=true)
	 */
	private $poz;
	
	/**
	 *
	 * @var string @ORM\Column(name="Ro", type="string", length=1, nullable=true)
	 */
	private $ro;
	
	/**
	 *
	 * @var string @ORM\Column(name="Rodz", type="string", length=1, nullable=true)
	 */
	private $rodz;
	
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
	 * @var string @ORM\Column(name="Nazw", type="text", length=16777215, nullable=true)
	 */
	private $nazw;
	
	/**
	 *
	 * @var float @ORM\Column(name="il", type="float", precision=10, scale=0, nullable=true)
	 */
	private $il;
	
	/**
	 *
	 * @var string @ORM\Column(name="jm", type="string", length=10, nullable=true)
	 */
	private $jm;
	
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
	 * @var string @ORM\Column(name="NVat", type="string", length=10, nullable=true)
	 */
	private $nvat;
	
	/**
	 *
	 * @var integer @ORM\Column(name="VAT", type="integer", nullable=true)
	 */
	private $vat;
	
	/**
	 *
	 * @var float @ORM\Column(name="Cz", type="float", precision=10, scale=0, nullable=true)
	 */
	private $cz;
	
	/**
	 *
	 * @var float @ORM\Column(name="Cena", type="float", precision=10, scale=0, nullable=true)
	 */
	private $cena;
	
	/**
	 *
	 * @var string @ORM\Column(name="NB", type="string", length=1, nullable=true)
	 */
	private $nb;
	
	/**
	 *
	 * @var float @ORM\Column(name="PrRab", type="float", precision=10, scale=0, nullable=true)
	 */
	private $prrab;
	
	/**
	 *
	 * @var string @ORM\Column(name="Opis", type="text", length=16777215, nullable=true)
	 */
	private $opis;
	
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
	 * @var string @ORM\Column(name="DataL", type="string", length=50, nullable=true)
	 */
	private $datal;
	
	/**
	 *
	 * @var string @ORM\Column(name="zID", type="string", length=50, nullable=true)
	 */
	private $zid;
	
	/**
	 *
	 * @var float @ORM\Column(name="Kurs", type="float", precision=10, scale=0, nullable=true)
	 */
	private $kurs;
	
	/**
	 *
	 * @var string @ORM\Column(name="Wal", type="string", length=10, nullable=true)
	 */
	private $wal;
	
	/**
	 *
	 * @var string @ORM\Column(name="Zd", type="string", length=50, nullable=true)
	 */
	private $zd;
	
	/**
	 *
	 * @var string @ORM\Column(name="kat", type="string", length=50, nullable=true)
	 */
	private $kat;
	
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
	 * @var string @ORM\Column(name="Alias", type="string", length=50, nullable=true)
	 */
	private $alias;
	
	/**
	 *
	 * @var string @ORM\Column(name="RejZZ", type="string", length=50, nullable=true)
	 */
	private $rejzz;
	
	/**
	 *
	 * @var string @ORM\Column(name="RejZS", type="string", length=50, nullable=true)
	 */
	private $rejzs;
	
	/**
	 *
	 * @var string @ORM\Column(name="idZS", type="string", length=50, nullable=true)
	 */
	private $idzs;
	
	/**
	 *
	 * @var float @ORM\Column(name="Rea", type="float", precision=10, scale=0, nullable=true)
	 */
	private $rea;
	
	/**
	 *
	 * @var string @ORM\Column(name="etap", type="string", length=50, nullable=true)
	 */
	private $etap;
	
	/**
	 *
	 * @var string @ORM\Column(name="Pr", type="string", length=50, nullable=true)
	 */
	private $pr;
	
	/**
	 *
	 * @var string @ORM\Column(name="OW", type="string", length=50, nullable=true)
	 */
	private $ow;
	
	/**
	 *
	 * @var integer @ORM\Column(name="Stan", type="integer", nullable=true)
	 */
	private $stan;
	
	/**
	 *
	 * @var string @ORM\Column(name="idZZ", type="string", length=50, nullable=true)
	 */
	private $idzz;
	
	/**
	 *
	 * @var string @ORM\Column(name="idZA", type="string", length=50, nullable=true)
	 */
	private $idza;
	
	/**
	 *
	 * @var string @ORM\Column(name="RejZA", type="string", length=50, nullable=true)
	 */
	private $rejza;
	
	/**
	 *
	 * @var string @ORM\Column(name="idSP", type="string", length=50, nullable=true)
	 */
	private $idsp;
	
	/**
	 *
	 * @var string @ORM\Column(name="RejSP", type="string", length=50, nullable=true)
	 */
	private $rejsp;
	
	/**
	 *
	 * @var float @ORM\Column(name="cenab", type="float", precision=10, scale=0, nullable=true)
	 */
	private $cenab;
	
	/**
	 *
	 * @var string @ORM\Column(name="Doid", type="string", length=50, nullable=true)
	 */
	private $doid;
	
	/**
	 *
	 * @var integer @ORM\Column(name="StanR", type="integer", nullable=true)
	 */
	private $stanr;
	
	/**
	 *
	 * @var string @ORM\Column(name="DataR", type="string", length=20, nullable=true)
	 */
	private $datar;
	
	/**
	 * Get id
	 *
	 * @return string
	 */
	public function getId() {
		return $this->id;
	}
	
	/**
	 * Set idf
	 *
	 * @param string $idf        	
	 * @return Gramfoodklembowzamsy
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
	 * Set nrr
	 *
	 * @param string $nrr        	
	 * @return Gramfoodklembowzamsy
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
	 * Set poz
	 *
	 * @param integer $poz        	
	 * @return Gramfoodklembowzamsy
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
	 * Set ro
	 *
	 * @param string $ro        	
	 * @return Gramfoodklembowzamsy
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
	 * Set rodz
	 *
	 * @param string $rodz        	
	 * @return Gramfoodklembowzamsy
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
	 * Set mag
	 *
	 * @param string $mag        	
	 * @return Gramfoodklembowzamsy
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
	 * @return Gramfoodklembowzamsy
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
	 * @return Gramfoodklembowzamsy
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
	 * Set il
	 *
	 * @param float $il        	
	 * @return Gramfoodklembowzamsy
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
	 * Set jm
	 *
	 * @param string $jm        	
	 * @return Gramfoodklembowzamsy
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
	 * Set cn
	 *
	 * @param float $cn        	
	 * @return Gramfoodklembowzamsy
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
	 * @return Gramfoodklembowzamsy
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
	 * Set nvat
	 *
	 * @param string $nvat        	
	 * @return Gramfoodklembowzamsy
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
	 * @param integer $vat        	
	 * @return Gramfoodklembowzamsy
	 */
	public function setVat($vat) {
		$this->vat = $vat;
		
		return $this;
	}
	
	/**
	 * Get vat
	 *
	 * @return integer
	 */
	public function getVat() {
		return $this->vat;
	}
	
	/**
	 * Set cz
	 *
	 * @param float $cz        	
	 * @return Gramfoodklembowzamsy
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
	 * Set cena
	 *
	 * @param float $cena        	
	 * @return Gramfoodklembowzamsy
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
	 * Set nb
	 *
	 * @param string $nb        	
	 * @return Gramfoodklembowzamsy
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
	 * Set prrab
	 *
	 * @param float $prrab        	
	 * @return Gramfoodklembowzamsy
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
	 * Set opis
	 *
	 * @param string $opis        	
	 * @return Gramfoodklembowzamsy
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
	 * Set lok
	 *
	 * @param integer $lok        	
	 * @return Gramfoodklembowzamsy
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
	 * @return Gramfoodklembowzamsy
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
	 * Set akt
	 *
	 * @param string $akt        	
	 * @return Gramfoodklembowzamsy
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
	 * @return Gramfoodklembowzamsy
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
	 * @return Gramfoodklembowzamsy
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
	 * Set datal
	 *
	 * @param string $datal        	
	 * @return Gramfoodklembowzamsy
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
	 * Set zid
	 *
	 * @param string $zid        	
	 * @return Gramfoodklembowzamsy
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
	 * Set kurs
	 *
	 * @param float $kurs        	
	 * @return Gramfoodklembowzamsy
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
	 * Set wal
	 *
	 * @param string $wal        	
	 * @return Gramfoodklembowzamsy
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
	 * Set zd
	 *
	 * @param string $zd        	
	 * @return Gramfoodklembowzamsy
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
	 * Set kat
	 *
	 * @param string $kat        	
	 * @return Gramfoodklembowzamsy
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
	 * Set waga
	 *
	 * @param float $waga        	
	 * @return Gramfoodklembowzamsy
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
	 * @return Gramfoodklembowzamsy
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
	 * Set wa2
	 *
	 * @param string $wa2        	
	 * @return Gramfoodklembowzamsy
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
	 * @return Gramfoodklembowzamsy
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
	 * Set alias
	 *
	 * @param string $alias        	
	 * @return Gramfoodklembowzamsy
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
	 * Set rejzz
	 *
	 * @param string $rejzz        	
	 * @return Gramfoodklembowzamsy
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
	 * Set rejzs
	 *
	 * @param string $rejzs        	
	 * @return Gramfoodklembowzamsy
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
	 * Set idzs
	 *
	 * @param string $idzs        	
	 * @return Gramfoodklembowzamsy
	 */
	public function setIdzs($idzs) {
		$this->idzs = $idzs;
		
		return $this;
	}
	
	/**
	 * Get idzs
	 *
	 * @return string
	 */
	public function getIdzs() {
		return $this->idzs;
	}
	
	/**
	 * Set rea
	 *
	 * @param float $rea        	
	 * @return Gramfoodklembowzamsy
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
	 * Set etap
	 *
	 * @param string $etap        	
	 * @return Gramfoodklembowzamsy
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
	 * Set pr
	 *
	 * @param string $pr        	
	 * @return Gramfoodklembowzamsy
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
	 * Set ow
	 *
	 * @param string $ow        	
	 * @return Gramfoodklembowzamsy
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
	 * Set stan
	 *
	 * @param integer $stan        	
	 * @return Gramfoodklembowzamsy
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
	 * Set idzz
	 *
	 * @param string $idzz        	
	 * @return Gramfoodklembowzamsy
	 */
	public function setIdzz($idzz) {
		$this->idzz = $idzz;
		
		return $this;
	}
	
	/**
	 * Get idzz
	 *
	 * @return string
	 */
	public function getIdzz() {
		return $this->idzz;
	}
	
	/**
	 * Set idza
	 *
	 * @param string $idza        	
	 * @return Gramfoodklembowzamsy
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
	 * @return Gramfoodklembowzamsy
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
	 * Set idsp
	 *
	 * @param string $idsp        	
	 * @return Gramfoodklembowzamsy
	 */
	public function setIdsp($idsp) {
		$this->idsp = $idsp;
		
		return $this;
	}
	
	/**
	 * Get idsp
	 *
	 * @return string
	 */
	public function getIdsp() {
		return $this->idsp;
	}
	
	/**
	 * Set rejsp
	 *
	 * @param string $rejsp        	
	 * @return Gramfoodklembowzamsy
	 */
	public function setRejsp($rejsp) {
		$this->rejsp = $rejsp;
		
		return $this;
	}
	
	/**
	 * Get rejsp
	 *
	 * @return string
	 */
	public function getRejsp() {
		return $this->rejsp;
	}
	
	/**
	 * Set cenab
	 *
	 * @param float $cenab        	
	 * @return Gramfoodklembowzamsy
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
	 * Set doid
	 *
	 * @param string $doid        	
	 * @return Gramfoodklembowzamsy
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
	 * Set stanr
	 *
	 * @param integer $stanr        	
	 * @return Gramfoodklembowzamsy
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
	 * Set datar
	 *
	 * @param string $datar        	
	 * @return Gramfoodklembowzamsy
	 */
	public function setDatar($datar) {
		$this->datar = $datar;
		
		return $this;
	}
	
	/**
	 * Get datar
	 *
	 * @return string
	 */
	public function getDatar() {
		return $this->datar;
	}
}
