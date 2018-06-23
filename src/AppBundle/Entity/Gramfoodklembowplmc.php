<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Gramfoodklembowplmc
 *
 * @ORM\Table(name="gramfoodklembowplmc")
 * @ORM\Entity
 */
class Gramfoodklembowplmc {
	/**
	 *
	 * @var string @ORM\Column(name="ID", type="string", length=50, nullable=false)
	 *      @ORM\Id
	 *      @ORM\GeneratedValue(strategy="IDENTITY")
	 */
	private $id;
	
	/**
	 *
	 * @var string @ORM\Column(name="UZ", type="string", length=50, nullable=true)
	 */
	private $uz;
	
	/**
	 *
	 * @var string @ORM\Column(name="IDk", type="string", length=50, nullable=true)
	 */
	private $idk;
	
	/**
	 *
	 * @var string @ORM\Column(name="IDp", type="string", length=50, nullable=true)
	 */
	private $idp;
	
	/**
	 *
	 * @var string @ORM\Column(name="IDw", type="string", length=50, nullable=true)
	 */
	private $idw;
	
	/**
	 *
	 * @var string @ORM\Column(name="Typ", type="string", length=1, nullable=true)
	 */
	private $typ;
	
	/**
	 *
	 * @var string @ORM\Column(name="Tgt", type="string", length=50, nullable=true)
	 */
	private $tgt;
	
	/**
	 *
	 * @var string @ORM\Column(name="Data", type="string", length=8, nullable=true)
	 */
	private $data;
	
	/**
	 *
	 * @var string @ORM\Column(name="Odgo", type="string", length=10, nullable=true)
	 */
	private $odgo;
	
	/**
	 *
	 * @var string @ORM\Column(name="Alias", type="string", length=50, nullable=true)
	 */
	private $alias;
	
	/**
	 *
	 * @var string @ORM\Column(name="NaIm", type="string", length=50, nullable=true)
	 */
	private $naim;
	
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
	 * @var string @ORM\Column(name="Prof", type="string", length=50, nullable=true)
	 */
	private $prof;
	
	/**
	 *
	 * @var string @ORM\Column(name="Notk", type="string", length=250, nullable=true)
	 */
	private $notk;
	
	/**
	 *
	 * @var string @ORM\Column(name="Ceg", type="string", length=50, nullable=true)
	 */
	private $ceg;
	
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
	 * @var string @ORM\Column(name="Datc", type="string", length=10, nullable=true)
	 */
	private $datc;
	
	/**
	 *
	 * @var string @ORM\Column(name="Tem", type="string", length=80, nullable=true)
	 */
	private $tem;
	
	/**
	 *
	 * @var string @ORM\Column(name="Profi", type="string", length=50, nullable=true)
	 */
	private $profi;
	
	/**
	 *
	 * @var string @ORM\Column(name="Os", type="string", length=50, nullable=true)
	 */
	private $os;
	
	/**
	 *
	 * @var string @ORM\Column(name="Kodp", type="string", length=10, nullable=true)
	 */
	private $kodp;
	
	/**
	 *
	 * @var string @ORM\Column(name="Nazw", type="string", length=150, nullable=true)
	 */
	private $nazw;
	
	/**
	 *
	 * @var string @ORM\Column(name="oss", type="text", length=16777215, nullable=true)
	 */
	private $oss;
	
	/**
	 * Get id
	 *
	 * @return string
	 */
	public function getId() {
		return $this->id;
	}
	
	/**
	 * Set uz
	 *
	 * @param string $uz        	
	 * @return Gramfoodklembowplmc
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
	 * Set idk
	 *
	 * @param string $idk        	
	 * @return Gramfoodklembowplmc
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
	 * Set idp
	 *
	 * @param string $idp        	
	 * @return Gramfoodklembowplmc
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
	
	/**
	 * Set idw
	 *
	 * @param string $idw        	
	 * @return Gramfoodklembowplmc
	 */
	public function setIdw($idw) {
		$this->idw = $idw;
		
		return $this;
	}
	
	/**
	 * Get idw
	 *
	 * @return string
	 */
	public function getIdw() {
		return $this->idw;
	}
	
	/**
	 * Set typ
	 *
	 * @param string $typ        	
	 * @return Gramfoodklembowplmc
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
	 * Set tgt
	 *
	 * @param string $tgt        	
	 * @return Gramfoodklembowplmc
	 */
	public function setTgt($tgt) {
		$this->tgt = $tgt;
		
		return $this;
	}
	
	/**
	 * Get tgt
	 *
	 * @return string
	 */
	public function getTgt() {
		return $this->tgt;
	}
	
	/**
	 * Set data
	 *
	 * @param string $data        	
	 * @return Gramfoodklembowplmc
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
	 * Set odgo
	 *
	 * @param string $odgo        	
	 * @return Gramfoodklembowplmc
	 */
	public function setOdgo($odgo) {
		$this->odgo = $odgo;
		
		return $this;
	}
	
	/**
	 * Get odgo
	 *
	 * @return string
	 */
	public function getOdgo() {
		return $this->odgo;
	}
	
	/**
	 * Set alias
	 *
	 * @param string $alias        	
	 * @return Gramfoodklembowplmc
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
	 * Set naim
	 *
	 * @param string $naim        	
	 * @return Gramfoodklembowplmc
	 */
	public function setNaim($naim) {
		$this->naim = $naim;
		
		return $this;
	}
	
	/**
	 * Get naim
	 *
	 * @return string
	 */
	public function getNaim() {
		return $this->naim;
	}
	
	/**
	 * Set mias
	 *
	 * @param string $mias        	
	 * @return Gramfoodklembowplmc
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
	 * @return Gramfoodklembowplmc
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
	 * Set prof
	 *
	 * @param string $prof        	
	 * @return Gramfoodklembowplmc
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
	 * Set notk
	 *
	 * @param string $notk        	
	 * @return Gramfoodklembowplmc
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
	 * Set ceg
	 *
	 * @param string $ceg        	
	 * @return Gramfoodklembowplmc
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
	 * Set akt
	 *
	 * @param string $akt        	
	 * @return Gramfoodklembowplmc
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
	 * @return Gramfoodklembowplmc
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
	 * @return Gramfoodklembowplmc
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
	 * Set datc
	 *
	 * @param string $datc        	
	 * @return Gramfoodklembowplmc
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
	 * Set tem
	 *
	 * @param string $tem        	
	 * @return Gramfoodklembowplmc
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
	 * Set profi
	 *
	 * @param string $profi        	
	 * @return Gramfoodklembowplmc
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
	 * Set os
	 *
	 * @param string $os        	
	 * @return Gramfoodklembowplmc
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
	 * Set kodp
	 *
	 * @param string $kodp        	
	 * @return Gramfoodklembowplmc
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
	 * Set nazw
	 *
	 * @param string $nazw        	
	 * @return Gramfoodklembowplmc
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
	 * Set oss
	 *
	 * @param string $oss        	
	 * @return Gramfoodklembowplmc
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
}
