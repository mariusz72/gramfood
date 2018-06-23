<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Gramfoodklembowbok
 *
 * @ORM\Table(name="gramfoodklembowbok")
 * @ORM\Entity
 */
class Gramfoodklembowbok {
	/**
	 *
	 * @var string @ORM\Column(name="id", type="string", length=50, nullable=false)
	 *      @ORM\Id
	 *      @ORM\GeneratedValue(strategy="IDENTITY")
	 */
	private $id;
	
	/**
	 *
	 * @var string @ORM\Column(name="doid", type="string", length=50, nullable=true)
	 */
	private $doid;
	
	/**
	 *
	 * @var string @ORM\Column(name="id2", type="string", length=50, nullable=true)
	 */
	private $id2;
	
	/**
	 *
	 * @var string @ORM\Column(name="Ro", type="string", length=5, nullable=true)
	 */
	private $ro;
	
	/**
	 *
	 * @var string @ORM\Column(name="alias", type="string", length=50, nullable=true)
	 */
	private $alias;
	
	/**
	 *
	 * @var string @ORM\Column(name="data", type="string", length=20, nullable=true)
	 */
	private $data;
	
	/**
	 *
	 * @var string @ORM\Column(name="Tem", type="string", length=80, nullable=true)
	 */
	private $tem;
	
	/**
	 *
	 * @var string @ORM\Column(name="nrr", type="string", length=50, nullable=true)
	 */
	private $nrr;
	
	/**
	 *
	 * @var string @ORM\Column(name="rej", type="string", length=10, nullable=true)
	 */
	private $rej;
	
	/**
	 *
	 * @var integer @ORM\Column(name="nr", type="integer", nullable=true)
	 */
	private $nr;
	
	/**
	 *
	 * @var string @ORM\Column(name="rok", type="string", length=4, nullable=true)
	 */
	private $rok;
	
	/**
	 *
	 * @var string @ORM\Column(name="mc", type="string", length=2, nullable=true)
	 */
	private $mc;
	
	/**
	 *
	 * @var string @ORM\Column(name="stat", type="string", length=50, nullable=true)
	 */
	private $stat;
	
	/**
	 *
	 * @var string @ORM\Column(name="wyk", type="string", length=3, nullable=true)
	 */
	private $wyk;
	
	/**
	 *
	 * @var string @ORM\Column(name="wazn", type="string", length=3, nullable=true)
	 */
	private $wazn;
	
	/**
	 *
	 * @var string @ORM\Column(name="RF", type="string", length=10, nullable=true)
	 */
	private $rf;
	
	/**
	 *
	 * @var string @ORM\Column(name="RejDok", type="string", length=50, nullable=true)
	 */
	private $rejdok;
	
	/**
	 *
	 * @var string @ORM\Column(name="IdDok", type="string", length=50, nullable=true)
	 */
	private $iddok;
	
	/**
	 *
	 * @var string @ORM\Column(name="Datd", type="string", length=20, nullable=true)
	 */
	private $datd;
	
	/**
	 *
	 * @var string @ORM\Column(name="datazp", type="string", length=20, nullable=true)
	 */
	private $datazp;
	
	/**
	 *
	 * @var string @ORM\Column(name="dataz", type="string", length=20, nullable=true)
	 */
	private $dataz;
	
	/**
	 *
	 * @var string @ORM\Column(name="opis", type="text", length=16777215, nullable=true)
	 */
	private $opis;
	
	/**
	 *
	 * @var string @ORM\Column(name="rea", type="text", length=16777215, nullable=true)
	 */
	private $rea;
	
	/**
	 *
	 * @var string @ORM\Column(name="dla", type="string", length=50, nullable=true)
	 */
	private $dla;
	
	/**
	 *
	 * @var string @ORM\Column(name="os", type="string", length=50, nullable=true)
	 */
	private $os;
	
	/**
	 *
	 * @var string @ORM\Column(name="refer", type="string", length=50, nullable=true)
	 */
	private $refer;
	
	/**
	 *
	 * @var string @ORM\Column(name="IDk", type="string", length=50, nullable=true)
	 */
	private $idk;
	
	/**
	 *
	 * @var string @ORM\Column(name="NIP", type="string", length=20, nullable=true)
	 */
	private $nip;
	
	/**
	 *
	 * @var string @ORM\Column(name="nazw", type="string", length=200, nullable=true)
	 */
	private $nazw;
	
	/**
	 *
	 * @var string @ORM\Column(name="nazw2", type="string", length=150, nullable=true)
	 */
	private $nazw2;
	
	/**
	 *
	 * @var string @ORM\Column(name="mias", type="string", length=50, nullable=true)
	 */
	private $mias;
	
	/**
	 *
	 * @var string @ORM\Column(name="ulic", type="string", length=50, nullable=true)
	 */
	private $ulic;
	
	/**
	 *
	 * @var string @ORM\Column(name="kodp", type="string", length=10, nullable=true)
	 */
	private $kodp;
	
	/**
	 *
	 * @var string @ORM\Column(name="T1", type="string", length=60, nullable=true)
	 */
	private $t1;
	
	/**
	 *
	 * @var string @ORM\Column(name="mail", type="string", length=80, nullable=true)
	 */
	private $mail;
	
	/**
	 *
	 * @var string @ORM\Column(name="ceg", type="string", length=50, nullable=true)
	 */
	private $ceg;
	
	/**
	 *
	 * @var string @ORM\Column(name="IDpl", type="string", length=50, nullable=true)
	 */
	private $idpl;
	
	/**
	 *
	 * @var string @ORM\Column(name="Profi", type="string", length=50, nullable=true)
	 */
	private $profi;
	
	/**
	 *
	 * @var integer @ORM\Column(name="lok", type="integer", nullable=true)
	 */
	private $lok;
	
	/**
	 *
	 * @var integer @ORM\Column(name="N1", type="integer", nullable=true)
	 */
	private $n1;
	
	/**
	 *
	 * @var string @ORM\Column(name="uz", type="string", length=50, nullable=true)
	 */
	private $uz;
	
	/**
	 *
	 * @var string @ORM\Column(name="Datc", type="string", length=10, nullable=true)
	 */
	private $datc;
	
	/**
	 *
	 * @var string @ORM\Column(name="akt", type="string", length=1, nullable=true)
	 */
	private $akt;
	
	/**
	 *
	 * @var string @ORM\Column(name="anul", type="string", length=1, nullable=true)
	 */
	private $anul;
	
	/**
	 *
	 * @var integer @ORM\Column(name="wers", type="integer", nullable=true)
	 */
	private $wers;
	
	/**
	 *
	 * @var string @ORM\Column(name="oss", type="text", length=16777215, nullable=true)
	 */
	private $oss;
	
	/**
	 *
	 * @var string @ORM\Column(name="s1", type="string", length=50, nullable=true)
	 */
	private $s1;
	
	/**
	 *
	 * @var string @ORM\Column(name="s1s", type="text", length=16777215, nullable=true)
	 */
	private $s1s;
	
	/**
	 *
	 * @var string @ORM\Column(name="s2", type="string", length=50, nullable=true)
	 */
	private $s2;
	
	/**
	 *
	 * @var string @ORM\Column(name="s2s", type="text", length=16777215, nullable=true)
	 */
	private $s2s;
	
	/**
	 *
	 * @var string @ORM\Column(name="s3", type="string", length=50, nullable=true)
	 */
	private $s3;
	
	/**
	 *
	 * @var string @ORM\Column(name="s3s", type="text", length=16777215, nullable=true)
	 */
	private $s3s;
	
	/**
	 *
	 * @var string @ORM\Column(name="datnw", type="string", length=20, nullable=true)
	 */
	private $datnw;
	
	/**
	 *
	 * @var string @ORM\Column(name="kol", type="string", length=80, nullable=true)
	 */
	private $kol;
	
	/**
	 *
	 * @var string @ORM\Column(name="etap", type="string", length=50, nullable=true)
	 */
	private $etap;
	
	/**
	 *
	 * @var string @ORM\Column(name="kat", type="string", length=50, nullable=true)
	 */
	private $kat;
	
	/**
	 *
	 * @var string @ORM\Column(name="T1o", type="string", length=20, nullable=true)
	 */
	private $t1o;
	
	/**
	 *
	 * @var string @ORM\Column(name="Mailo", type="string", length=50, nullable=true)
	 */
	private $mailo;
	
	/**
	 *
	 * @var string @ORM\Column(name="DataP", type="string", length=20, nullable=true)
	 */
	private $datap;
	
	/**
	 *
	 * @var string @ORM\Column(name="DatEd", type="string", length=20, nullable=true)
	 */
	private $dated;
	
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
	 * @return Gramfoodklembowbok
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
	 * Set id2
	 *
	 * @param string $id2        	
	 * @return Gramfoodklembowbok
	 */
	public function setId2($id2) {
		$this->id2 = $id2;
		
		return $this;
	}
	
	/**
	 * Get id2
	 *
	 * @return string
	 */
	public function getId2() {
		return $this->id2;
	}
	
	/**
	 * Set ro
	 *
	 * @param string $ro        	
	 * @return Gramfoodklembowbok
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
	 * Set alias
	 *
	 * @param string $alias        	
	 * @return Gramfoodklembowbok
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
	 * Set data
	 *
	 * @param string $data        	
	 * @return Gramfoodklembowbok
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
	 * Set tem
	 *
	 * @param string $tem        	
	 * @return Gramfoodklembowbok
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
	 * Set nrr
	 *
	 * @param string $nrr        	
	 * @return Gramfoodklembowbok
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
	 * @return Gramfoodklembowbok
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
	 * Set nr
	 *
	 * @param integer $nr        	
	 * @return Gramfoodklembowbok
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
	 * Set rok
	 *
	 * @param string $rok        	
	 * @return Gramfoodklembowbok
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
	 * @return Gramfoodklembowbok
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
	 * Set stat
	 *
	 * @param string $stat        	
	 * @return Gramfoodklembowbok
	 */
	public function setStat($stat) {
		$this->stat = $stat;
		
		return $this;
	}
	
	/**
	 * Get stat
	 *
	 * @return string
	 */
	public function getStat() {
		return $this->stat;
	}
	
	/**
	 * Set wyk
	 *
	 * @param string $wyk        	
	 * @return Gramfoodklembowbok
	 */
	public function setWyk($wyk) {
		$this->wyk = $wyk;
		
		return $this;
	}
	
	/**
	 * Get wyk
	 *
	 * @return string
	 */
	public function getWyk() {
		return $this->wyk;
	}
	
	/**
	 * Set wazn
	 *
	 * @param string $wazn        	
	 * @return Gramfoodklembowbok
	 */
	public function setWazn($wazn) {
		$this->wazn = $wazn;
		
		return $this;
	}
	
	/**
	 * Get wazn
	 *
	 * @return string
	 */
	public function getWazn() {
		return $this->wazn;
	}
	
	/**
	 * Set rf
	 *
	 * @param string $rf        	
	 * @return Gramfoodklembowbok
	 */
	public function setRf($rf) {
		$this->rf = $rf;
		
		return $this;
	}
	
	/**
	 * Get rf
	 *
	 * @return string
	 */
	public function getRf() {
		return $this->rf;
	}
	
	/**
	 * Set rejdok
	 *
	 * @param string $rejdok        	
	 * @return Gramfoodklembowbok
	 */
	public function setRejdok($rejdok) {
		$this->rejdok = $rejdok;
		
		return $this;
	}
	
	/**
	 * Get rejdok
	 *
	 * @return string
	 */
	public function getRejdok() {
		return $this->rejdok;
	}
	
	/**
	 * Set iddok
	 *
	 * @param string $iddok        	
	 * @return Gramfoodklembowbok
	 */
	public function setIddok($iddok) {
		$this->iddok = $iddok;
		
		return $this;
	}
	
	/**
	 * Get iddok
	 *
	 * @return string
	 */
	public function getIddok() {
		return $this->iddok;
	}
	
	/**
	 * Set datd
	 *
	 * @param string $datd        	
	 * @return Gramfoodklembowbok
	 */
	public function setDatd($datd) {
		$this->datd = $datd;
		
		return $this;
	}
	
	/**
	 * Get datd
	 *
	 * @return string
	 */
	public function getDatd() {
		return $this->datd;
	}
	
	/**
	 * Set datazp
	 *
	 * @param string $datazp        	
	 * @return Gramfoodklembowbok
	 */
	public function setDatazp($datazp) {
		$this->datazp = $datazp;
		
		return $this;
	}
	
	/**
	 * Get datazp
	 *
	 * @return string
	 */
	public function getDatazp() {
		return $this->datazp;
	}
	
	/**
	 * Set dataz
	 *
	 * @param string $dataz        	
	 * @return Gramfoodklembowbok
	 */
	public function setDataz($dataz) {
		$this->dataz = $dataz;
		
		return $this;
	}
	
	/**
	 * Get dataz
	 *
	 * @return string
	 */
	public function getDataz() {
		return $this->dataz;
	}
	
	/**
	 * Set opis
	 *
	 * @param string $opis        	
	 * @return Gramfoodklembowbok
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
	 * Set rea
	 *
	 * @param string $rea        	
	 * @return Gramfoodklembowbok
	 */
	public function setRea($rea) {
		$this->rea = $rea;
		
		return $this;
	}
	
	/**
	 * Get rea
	 *
	 * @return string
	 */
	public function getRea() {
		return $this->rea;
	}
	
	/**
	 * Set dla
	 *
	 * @param string $dla        	
	 * @return Gramfoodklembowbok
	 */
	public function setDla($dla) {
		$this->dla = $dla;
		
		return $this;
	}
	
	/**
	 * Get dla
	 *
	 * @return string
	 */
	public function getDla() {
		return $this->dla;
	}
	
	/**
	 * Set os
	 *
	 * @param string $os        	
	 * @return Gramfoodklembowbok
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
	 * Set refer
	 *
	 * @param string $refer        	
	 * @return Gramfoodklembowbok
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
	 * Set idk
	 *
	 * @param string $idk        	
	 * @return Gramfoodklembowbok
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
	 * Set nip
	 *
	 * @param string $nip        	
	 * @return Gramfoodklembowbok
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
	 * @return Gramfoodklembowbok
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
	 * @return Gramfoodklembowbok
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
	 * @return Gramfoodklembowbok
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
	 * @return Gramfoodklembowbok
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
	 * @return Gramfoodklembowbok
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
	 * Set t1
	 *
	 * @param string $t1        	
	 * @return Gramfoodklembowbok
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
	 * @return Gramfoodklembowbok
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
	 * Set ceg
	 *
	 * @param string $ceg        	
	 * @return Gramfoodklembowbok
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
	 * Set idpl
	 *
	 * @param string $idpl        	
	 * @return Gramfoodklembowbok
	 */
	public function setIdpl($idpl) {
		$this->idpl = $idpl;
		
		return $this;
	}
	
	/**
	 * Get idpl
	 *
	 * @return string
	 */
	public function getIdpl() {
		return $this->idpl;
	}
	
	/**
	 * Set profi
	 *
	 * @param string $profi        	
	 * @return Gramfoodklembowbok
	 */
	public function setProfi($profi) {
		$this->profi = $profi;
		
		return $this;
	}
	
	/**
	 * Get profi
	 *
	 * @return string
	 */
	public function getProfi() {
		return $this->profi;
	}
	
	/**
	 * Set lok
	 *
	 * @param integer $lok        	
	 * @return Gramfoodklembowbok
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
	 * Set n1
	 *
	 * @param integer $n1        	
	 * @return Gramfoodklembowbok
	 */
	public function setN1($n1) {
		$this->n1 = $n1;
		
		return $this;
	}
	
	/**
	 * Get n1
	 *
	 * @return integer
	 */
	public function getN1() {
		return $this->n1;
	}
	
	/**
	 * Set uz
	 *
	 * @param string $uz        	
	 * @return Gramfoodklembowbok
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
	 * Set datc
	 *
	 * @param string $datc        	
	 * @return Gramfoodklembowbok
	 */
	public function setDatc($datc) {
		$this->datc = $datc;
		
		return $this;
	}
	
	/**
	 * Get datc
	 *
	 * @return string
	 */
	public function getDatc() {
		return $this->datc;
	}
	
	/**
	 * Set akt
	 *
	 * @param string $akt        	
	 * @return Gramfoodklembowbok
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
	 * @return Gramfoodklembowbok
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
	 * @return Gramfoodklembowbok
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
	 * Set oss
	 *
	 * @param string $oss        	
	 * @return Gramfoodklembowbok
	 */
	public function setOss($oss) {
		$this->oss = $oss;
		
		return $this;
	}
	
	/**
	 * Get oss
	 *
	 * @return string
	 */
	public function getOss() {
		return $this->oss;
	}
	
	/**
	 * Set s1
	 *
	 * @param string $s1        	
	 * @return Gramfoodklembowbok
	 */
	public function setS1($s1) {
		$this->s1 = $s1;
		
		return $this;
	}
	
	/**
	 * Get s1
	 *
	 * @return string
	 */
	public function getS1() {
		return $this->s1;
	}
	
	/**
	 * Set s1s
	 *
	 * @param string $s1s        	
	 * @return Gramfoodklembowbok
	 */
	public function setS1s($s1s) {
		$this->s1s = $s1s;
		
		return $this;
	}
	
	/**
	 * Get s1s
	 *
	 * @return string
	 */
	public function getS1s() {
		return $this->s1s;
	}
	
	/**
	 * Set s2
	 *
	 * @param string $s2        	
	 * @return Gramfoodklembowbok
	 */
	public function setS2($s2) {
		$this->s2 = $s2;
		
		return $this;
	}
	
	/**
	 * Get s2
	 *
	 * @return string
	 */
	public function getS2() {
		return $this->s2;
	}
	
	/**
	 * Set s2s
	 *
	 * @param string $s2s        	
	 * @return Gramfoodklembowbok
	 */
	public function setS2s($s2s) {
		$this->s2s = $s2s;
		
		return $this;
	}
	
	/**
	 * Get s2s
	 *
	 * @return string
	 */
	public function getS2s() {
		return $this->s2s;
	}
	
	/**
	 * Set s3
	 *
	 * @param string $s3        	
	 * @return Gramfoodklembowbok
	 */
	public function setS3($s3) {
		$this->s3 = $s3;
		
		return $this;
	}
	
	/**
	 * Get s3
	 *
	 * @return string
	 */
	public function getS3() {
		return $this->s3;
	}
	
	/**
	 * Set s3s
	 *
	 * @param string $s3s        	
	 * @return Gramfoodklembowbok
	 */
	public function setS3s($s3s) {
		$this->s3s = $s3s;
		
		return $this;
	}
	
	/**
	 * Get s3s
	 *
	 * @return string
	 */
	public function getS3s() {
		return $this->s3s;
	}
	
	/**
	 * Set datnw
	 *
	 * @param string $datnw        	
	 * @return Gramfoodklembowbok
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
	 * Set kol
	 *
	 * @param string $kol        	
	 * @return Gramfoodklembowbok
	 */
	public function setKol($kol) {
		$this->kol = $kol;
		
		return $this;
	}
	
	/**
	 * Get kol
	 *
	 * @return string
	 */
	public function getKol() {
		return $this->kol;
	}
	
	/**
	 * Set etap
	 *
	 * @param string $etap        	
	 * @return Gramfoodklembowbok
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
	 * Set kat
	 *
	 * @param string $kat        	
	 * @return Gramfoodklembowbok
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
	 * Set t1o
	 *
	 * @param string $t1o        	
	 * @return Gramfoodklembowbok
	 */
	public function setT1o($t1o) {
		$this->t1o = $t1o;
		
		return $this;
	}
	
	/**
	 * Get t1o
	 *
	 * @return string
	 */
	public function getT1o() {
		return $this->t1o;
	}
	
	/**
	 * Set mailo
	 *
	 * @param string $mailo        	
	 * @return Gramfoodklembowbok
	 */
	public function setMailo($mailo) {
		$this->mailo = $mailo;
		
		return $this;
	}
	
	/**
	 * Get mailo
	 *
	 * @return string
	 */
	public function getMailo() {
		return $this->mailo;
	}
	
	/**
	 * Set datap
	 *
	 * @param string $datap        	
	 * @return Gramfoodklembowbok
	 */
	public function setDatap($datap) {
		$this->datap = $datap;
		
		return $this;
	}
	
	/**
	 * Get datap
	 *
	 * @return string
	 */
	public function getDatap() {
		return $this->datap;
	}
	
	/**
	 * Set dated
	 *
	 * @param string $dated        	
	 * @return Gramfoodklembowbok
	 */
	public function setDated($dated) {
		$this->dated = $dated;
		
		return $this;
	}
	
	/**
	 * Get dated
	 *
	 * @return string
	 */
	public function getDated() {
		return $this->dated;
	}
	
	/**
	 * Set lat
	 *
	 * @param float $lat        	
	 * @return Gramfoodklembowbok
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
	 * @return Gramfoodklembowbok
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
}
