<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Gramfoodklembowwind
 *
 * @ORM\Table(name="gramfoodklembowwind")
 * @ORM\Entity
 */
class Gramfoodklembowwind {
	/**
	 *
	 * @var string @ORM\Column(name="ID", type="string", length=50, nullable=false)
	 *      @ORM\Id
	 *      @ORM\GeneratedValue(strategy="IDENTITY")
	 */
	private $id;
	
	/**
	 *
	 * @var string @ORM\Column(name="DoID", type="string", length=50, nullable=true)
	 */
	private $doid;
	
	/**
	 *
	 * @var string @ORM\Column(name="Ro", type="string", length=1, nullable=true)
	 */
	private $ro;
	
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
	 * @var integer @ORM\Column(name="jez", type="integer", nullable=true)
	 */
	private $jez;
	
	/**
	 *
	 * @var string @ORM\Column(name="Data", type="string", length=8, nullable=true)
	 */
	private $data;
	
	/**
	 *
	 * @var string @ORM\Column(name="IDf", type="string", length=50, nullable=true)
	 */
	private $idf;
	
	/**
	 *
	 * @var string @ORM\Column(name="Fak", type="string", length=50, nullable=true)
	 */
	private $fak;
	
	/**
	 *
	 * @var string @ORM\Column(name="DFak", type="string", length=8, nullable=true)
	 */
	private $dfak;
	
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
	 * @var string @ORM\Column(name="Nazw", type="string", length=200, nullable=true)
	 */
	private $nazw;
	
	/**
	 *
	 * @var string @ORM\Column(name="Nazw2", type="string", length=150, nullable=true)
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
	 * @var float @ORM\Column(name="Wart", type="float", precision=10, scale=0, nullable=true)
	 */
	private $wart;
	
	/**
	 *
	 * @var float @ORM\Column(name="Ods", type="float", precision=10, scale=0, nullable=true)
	 */
	private $ods;
	
	/**
	 *
	 * @var integer @ORM\Column(name="Dni", type="integer", nullable=true)
	 */
	private $dni;
	
	/**
	 *
	 * @var string @ORM\Column(name="Wal", type="string", length=10, nullable=true)
	 */
	private $wal;
	
	/**
	 *
	 * @var string @ORM\Column(name="Opis", type="string", length=250, nullable=true)
	 */
	private $opis;
	
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
	 * @var string @ORM\Column(name="Tpl", type="string", length=20, nullable=true)
	 */
	private $tpl;
	
	/**
	 *
	 * @var float @ORM\Column(name="Zap", type="float", precision=10, scale=0, nullable=true)
	 */
	private $zap;
	
	/**
	 *
	 * @var string @ORM\Column(name="AdrDo", type="string", length=250, nullable=true)
	 */
	private $adrdo;
	
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
	 * @return Gramfoodklembowwind
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
	 * Set ro
	 *
	 * @param string $ro        	
	 * @return Gramfoodklembowwind
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
	 * Set nrr
	 *
	 * @param string $nrr        	
	 * @return Gramfoodklembowwind
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
	 * @return Gramfoodklembowwind
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
	 * @return Gramfoodklembowwind
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
	 * @return Gramfoodklembowwind
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
	 * Set jez
	 *
	 * @param integer $jez        	
	 * @return Gramfoodklembowwind
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
	 * Set data
	 *
	 * @param string $data        	
	 * @return Gramfoodklembowwind
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
	 * Set idf
	 *
	 * @param string $idf        	
	 * @return Gramfoodklembowwind
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
	 * Set fak
	 *
	 * @param string $fak        	
	 * @return Gramfoodklembowwind
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
	 * @return Gramfoodklembowwind
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
	 * Set idk
	 *
	 * @param string $idk        	
	 * @return Gramfoodklembowwind
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
	 * @return Gramfoodklembowwind
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
	 * @return Gramfoodklembowwind
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
	 * @return Gramfoodklembowwind
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
	 * @return Gramfoodklembowwind
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
	 * @return Gramfoodklembowwind
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
	 * @return Gramfoodklembowwind
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
	 * Set wart
	 *
	 * @param float $wart        	
	 * @return Gramfoodklembowwind
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
	 * Set ods
	 *
	 * @param float $ods        	
	 * @return Gramfoodklembowwind
	 */
	public function setOds($ods) {
		$this->ods = $ods;
		
		return $this;
	}
	
	/**
	 * Get ods
	 *
	 * @return float
	 */
	public function getOds() {
		return $this->ods;
	}
	
	/**
	 * Set dni
	 *
	 * @param integer $dni        	
	 * @return Gramfoodklembowwind
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
	 * Set wal
	 *
	 * @param string $wal        	
	 * @return Gramfoodklembowwind
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
	 * Set opis
	 *
	 * @param string $opis        	
	 * @return Gramfoodklembowwind
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
	 * Set uz
	 *
	 * @param string $uz        	
	 * @return Gramfoodklembowwind
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
	 * @return Gramfoodklembowwind
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
	 * @return Gramfoodklembowwind
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
	 * @return Gramfoodklembowwind
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
	 * Set tpl
	 *
	 * @param string $tpl        	
	 * @return Gramfoodklembowwind
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
	 * Set zap
	 *
	 * @param float $zap        	
	 * @return Gramfoodklembowwind
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
	 * Set adrdo
	 *
	 * @param string $adrdo        	
	 * @return Gramfoodklembowwind
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
}
