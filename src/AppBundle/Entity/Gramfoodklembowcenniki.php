<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Gramfoodklembowcenniki
 *
 * @ORM\Table(name="gramfoodklembowcenniki")
 * @ORM\Entity
 */
class Gramfoodklembowcenniki {
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
	 * @var string @ORM\Column(name="typ", type="string", length=5, nullable=true)
	 */
	private $typ;
	
	/**
	 *
	 * @var integer @ORM\Column(name="nr", type="integer", nullable=true)
	 */
	private $nr;
	
	/**
	 *
	 * @var string @ORM\Column(name="alias", type="string", length=50, nullable=true)
	 */
	private $alias;
	
	/**
	 *
	 * @var string @ORM\Column(name="gr", type="string", length=50, nullable=true)
	 */
	private $gr;
	
	/**
	 *
	 * @var string @ORM\Column(name="kod", type="string", length=50, nullable=true)
	 */
	private $kod;
	
	/**
	 *
	 * @var string @ORM\Column(name="gp", type="string", length=10, nullable=true)
	 */
	private $gp;
	
	/**
	 *
	 * @var string @ORM\Column(name="NB", type="string", length=10, nullable=true)
	 */
	private $nb;
	
	/**
	 *
	 * @var string @ORM\Column(name="nazw", type="string", length=250, nullable=true)
	 */
	private $nazw;
	
	/**
	 *
	 * @var string @ORM\Column(name="nvat", type="string", length=10, nullable=true)
	 */
	private $nvat;
	
	/**
	 *
	 * @var float @ORM\Column(name="vat", type="float", precision=10, scale=0, nullable=true)
	 */
	private $vat;
	
	/**
	 *
	 * @var string @ORM\Column(name="jm", type="string", length=10, nullable=true)
	 */
	private $jm;
	
	/**
	 *
	 * @var float @ORM\Column(name="cd", type="float", precision=10, scale=0, nullable=true)
	 */
	private $cd;
	
	/**
	 *
	 * @var float @ORM\Column(name="pcd", type="float", precision=10, scale=0, nullable=true)
	 */
	private $pcd;
	
	/**
	 *
	 * @var string @ORM\Column(name="wal", type="string", length=10, nullable=true)
	 */
	private $wal;
	
	/**
	 *
	 * @var float @ORM\Column(name="c1", type="float", precision=10, scale=0, nullable=true)
	 */
	private $c1;
	
	/**
	 *
	 * @var float @ORM\Column(name="pc1", type="float", precision=10, scale=0, nullable=true)
	 */
	private $pc1;
	
	/**
	 *
	 * @var float @ORM\Column(name="c2", type="float", precision=10, scale=0, nullable=true)
	 */
	private $c2;
	
	/**
	 *
	 * @var float @ORM\Column(name="pc2", type="float", precision=10, scale=0, nullable=true)
	 */
	private $pc2;
	
	/**
	 *
	 * @var float @ORM\Column(name="c3", type="float", precision=10, scale=0, nullable=true)
	 */
	private $c3;
	
	/**
	 *
	 * @var float @ORM\Column(name="pc3", type="float", precision=10, scale=0, nullable=true)
	 */
	private $pc3;
	
	/**
	 *
	 * @var string @ORM\Column(name="uz", type="string", length=50, nullable=true)
	 */
	private $uz;
	
	/**
	 *
	 * @var integer @ORM\Column(name="lok", type="integer", nullable=true)
	 */
	private $lok;
	
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
	 * @var string @ORM\Column(name="Opis", type="text", length=16777215, nullable=true)
	 */
	private $opis;
	
	/**
	 *
	 * @var string @ORM\Column(name="Kat", type="string", length=50, nullable=true)
	 */
	private $kat;
	
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
	 * @return Gramfoodklembowcenniki
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
	 * Set typ
	 *
	 * @param string $typ        	
	 * @return Gramfoodklembowcenniki
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
	 * Set nr
	 *
	 * @param integer $nr        	
	 * @return Gramfoodklembowcenniki
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
	 * Set alias
	 *
	 * @param string $alias        	
	 * @return Gramfoodklembowcenniki
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
	 * Set gr
	 *
	 * @param string $gr        	
	 * @return Gramfoodklembowcenniki
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
	 * Set kod
	 *
	 * @param string $kod        	
	 * @return Gramfoodklembowcenniki
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
	 * Set gp
	 *
	 * @param string $gp        	
	 * @return Gramfoodklembowcenniki
	 */
	public function setGp($gp) {
		$this->gp = $gp;
		
		return $this;
	}
	
	/**
	 * Get gp
	 *
	 * @return string
	 */
	public function getGp() {
		return $this->gp;
	}
	
	/**
	 * Set nb
	 *
	 * @param string $nb        	
	 * @return Gramfoodklembowcenniki
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
	 * Set nazw
	 *
	 * @param string $nazw        	
	 * @return Gramfoodklembowcenniki
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
	 * Set nvat
	 *
	 * @param string $nvat        	
	 * @return Gramfoodklembowcenniki
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
	 * @return Gramfoodklembowcenniki
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
	 * Set jm
	 *
	 * @param string $jm        	
	 * @return Gramfoodklembowcenniki
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
	 * Set cd
	 *
	 * @param float $cd        	
	 * @return Gramfoodklembowcenniki
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
	 * Set pcd
	 *
	 * @param float $pcd        	
	 * @return Gramfoodklembowcenniki
	 */
	public function setPcd($pcd) {
		$this->pcd = $pcd;
		
		return $this;
	}
	
	/**
	 * Get pcd
	 *
	 * @return float
	 */
	public function getPcd() {
		return $this->pcd;
	}
	
	/**
	 * Set wal
	 *
	 * @param string $wal        	
	 * @return Gramfoodklembowcenniki
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
	 * Set c1
	 *
	 * @param float $c1        	
	 * @return Gramfoodklembowcenniki
	 */
	public function setC1($c1) {
		$this->c1 = $c1;
		
		return $this;
	}
	
	/**
	 * Get c1
	 *
	 * @return float
	 */
	public function getC1() {
		return $this->c1;
	}
	
	/**
	 * Set pc1
	 *
	 * @param float $pc1        	
	 * @return Gramfoodklembowcenniki
	 */
	public function setPc1($pc1) {
		$this->pc1 = $pc1;
		
		return $this;
	}
	
	/**
	 * Get pc1
	 *
	 * @return float
	 */
	public function getPc1() {
		return $this->pc1;
	}
	
	/**
	 * Set c2
	 *
	 * @param float $c2        	
	 * @return Gramfoodklembowcenniki
	 */
	public function setC2($c2) {
		$this->c2 = $c2;
		
		return $this;
	}
	
	/**
	 * Get c2
	 *
	 * @return float
	 */
	public function getC2() {
		return $this->c2;
	}
	
	/**
	 * Set pc2
	 *
	 * @param float $pc2        	
	 * @return Gramfoodklembowcenniki
	 */
	public function setPc2($pc2) {
		$this->pc2 = $pc2;
		
		return $this;
	}
	
	/**
	 * Get pc2
	 *
	 * @return float
	 */
	public function getPc2() {
		return $this->pc2;
	}
	
	/**
	 * Set c3
	 *
	 * @param float $c3        	
	 * @return Gramfoodklembowcenniki
	 */
	public function setC3($c3) {
		$this->c3 = $c3;
		
		return $this;
	}
	
	/**
	 * Get c3
	 *
	 * @return float
	 */
	public function getC3() {
		return $this->c3;
	}
	
	/**
	 * Set pc3
	 *
	 * @param float $pc3        	
	 * @return Gramfoodklembowcenniki
	 */
	public function setPc3($pc3) {
		$this->pc3 = $pc3;
		
		return $this;
	}
	
	/**
	 * Get pc3
	 *
	 * @return float
	 */
	public function getPc3() {
		return $this->pc3;
	}
	
	/**
	 * Set uz
	 *
	 * @param string $uz        	
	 * @return Gramfoodklembowcenniki
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
	 * @return Gramfoodklembowcenniki
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
	 * @return Gramfoodklembowcenniki
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
	 * @return Gramfoodklembowcenniki
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
	 * @return Gramfoodklembowcenniki
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
	 * Set opis
	 *
	 * @param string $opis        	
	 * @return Gramfoodklembowcenniki
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
	 * Set kat
	 *
	 * @param string $kat        	
	 * @return Gramfoodklembowcenniki
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
}
