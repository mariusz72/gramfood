<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Gramfoodklembowosoby
 *
 * @ORM\Table(name="gramfoodklembowosoby")
 * @ORM\Entity
 */
class Gramfoodklembowosoby {
	/**
	 *
	 * @var string @ORM\Column(name="ID", type="string", length=50, nullable=false)
	 *      @ORM\Id
	 *      @ORM\GeneratedValue(strategy="IDENTITY")
	 */
	private $id;
	
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
	 * @var string @ORM\Column(name="Imie", type="string", length=50, nullable=true)
	 */
	private $imie;
	
	/**
	 *
	 * @var string @ORM\Column(name="Nazw", type="string", length=50, nullable=true)
	 */
	private $nazw;
	
	/**
	 *
	 * @var string @ORM\Column(name="Ulic", type="string", length=50, nullable=true)
	 */
	private $ulic;
	
	/**
	 *
	 * @var string @ORM\Column(name="kodP", type="string", length=20, nullable=true)
	 */
	private $kodp;
	
	/**
	 *
	 * @var string @ORM\Column(name="Mias", type="string", length=50, nullable=true)
	 */
	private $mias;
	
	/**
	 *
	 * @var string @ORM\Column(name="Gr", type="string", length=50, nullable=true)
	 */
	private $gr;
	
	/**
	 *
	 * @var string @ORM\Column(name="Gro", type="string", length=50, nullable=true)
	 */
	private $gro;
	
	/**
	 *
	 * @var string @ORM\Column(name="Sta", type="string", length=50, nullable=true)
	 */
	private $sta;
	
	/**
	 *
	 * @var string @ORM\Column(name="Spe", type="string", length=50, nullable=true)
	 */
	private $spe;
	
	/**
	 *
	 * @var string @ORM\Column(name="Odd", type="string", length=50, nullable=true)
	 */
	private $odd;
	
	/**
	 *
	 * @var string @ORM\Column(name="T1", type="string", length=50, nullable=true)
	 */
	private $t1;
	
	/**
	 *
	 * @var string @ORM\Column(name="T2", type="string", length=50, nullable=true)
	 */
	private $t2;
	
	/**
	 *
	 * @var string @ORM\Column(name="Mail", type="string", length=50, nullable=true)
	 */
	private $mail;
	
	/**
	 *
	 * @var string @ORM\Column(name="GG", type="string", length=50, nullable=true)
	 */
	private $gg;
	
	/**
	 *
	 * @var string @ORM\Column(name="LastW", type="string", length=50, nullable=true)
	 */
	private $lastw;
	
	/**
	 *
	 * @var string @ORM\Column(name="DatNW", type="string", length=50, nullable=true)
	 */
	private $datnw;
	
	/**
	 *
	 * @var string @ORM\Column(name="Dom", type="string", length=1, nullable=true)
	 */
	private $dom;
	
	/**
	 *
	 * @var string @ORM\Column(name="Opis", type="string", length=250, nullable=true)
	 */
	private $opis;
	
	/**
	 *
	 * @var string @ORM\Column(name="Ceg", type="string", length=50, nullable=true)
	 */
	private $ceg;
	
	/**
	 *
	 * @var string @ORM\Column(name="Ks", type="string", length=250, nullable=true)
	 */
	private $ks;
	
	/**
	 *
	 * @var string @ORM\Column(name="Zglo", type="string", length=50, nullable=true)
	 */
	private $zglo;
	
	/**
	 *
	 * @var integer @ORM\Column(name="Lok", type="integer", nullable=true)
	 */
	private $lok;
	
	/**
	 *
	 * @var string @ORM\Column(name="UZ", type="string", length=50, nullable=true)
	 */
	private $uz;
	
	/**
	 *
	 * @var string @ORM\Column(name="Anul", type="string", length=1, nullable=true)
	 */
	private $anul;
	
	/**
	 *
	 * @var string @ORM\Column(name="Akt", type="string", length=1, nullable=true)
	 */
	private $akt;
	
	/**
	 *
	 * @var integer @ORM\Column(name="Wers", type="integer", nullable=true)
	 */
	private $wers;
	
	/**
	 *
	 * @var string @ORM\Column(name="OW", type="string", length=50, nullable=true)
	 */
	private $ow;
	
	/**
	 *
	 * @var string @ORM\Column(name="Kat", type="string", length=20, nullable=true)
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
	 * Set idk
	 *
	 * @param string $idk        	
	 * @return Gramfoodklembowosoby
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
	 * @return Gramfoodklembowosoby
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
	 * Set imie
	 *
	 * @param string $imie        	
	 * @return Gramfoodklembowosoby
	 */
	public function setImie($imie) {
		$this->imie = $imie;
		
		return $this;
	}
	
	/**
	 * Get imie
	 *
	 * @return string
	 */
	public function getImie() {
		return $this->imie;
	}
	
	/**
	 * Set nazw
	 *
	 * @param string $nazw        	
	 * @return Gramfoodklembowosoby
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
	 * Set ulic
	 *
	 * @param string $ulic        	
	 * @return Gramfoodklembowosoby
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
	 * @return Gramfoodklembowosoby
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
	 * @return Gramfoodklembowosoby
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
	 * Set gr
	 *
	 * @param string $gr        	
	 * @return Gramfoodklembowosoby
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
	 * Set gro
	 *
	 * @param string $gro        	
	 * @return Gramfoodklembowosoby
	 */
	public function setGro($gro) {
		$this->gro = $gro;
		
		return $this;
	}
	
	/**
	 * Get gro
	 *
	 * @return string
	 */
	public function getGro() {
		return $this->gro;
	}
	
	/**
	 * Set sta
	 *
	 * @param string $sta        	
	 * @return Gramfoodklembowosoby
	 */
	public function setSta($sta) {
		$this->sta = $sta;
		
		return $this;
	}
	
	/**
	 * Get sta
	 *
	 * @return string
	 */
	public function getSta() {
		return $this->sta;
	}
	
	/**
	 * Set spe
	 *
	 * @param string $spe        	
	 * @return Gramfoodklembowosoby
	 */
	public function setSpe($spe) {
		$this->spe = $spe;
		
		return $this;
	}
	
	/**
	 * Get spe
	 *
	 * @return string
	 */
	public function getSpe() {
		return $this->spe;
	}
	
	/**
	 * Set odd
	 *
	 * @param string $odd        	
	 * @return Gramfoodklembowosoby
	 */
	public function setOdd($odd) {
		$this->odd = $odd;
		
		return $this;
	}
	
	/**
	 * Get odd
	 *
	 * @return string
	 */
	public function getOdd() {
		return $this->odd;
	}
	
	/**
	 * Set t1
	 *
	 * @param string $t1        	
	 * @return Gramfoodklembowosoby
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
	 * Set t2
	 *
	 * @param string $t2        	
	 * @return Gramfoodklembowosoby
	 */
	public function setT2($t2) {
		$this->t2 = $t2;
		
		return $this;
	}
	
	/**
	 * Get t2
	 *
	 * @return string
	 */
	public function getT2() {
		return $this->t2;
	}
	
	/**
	 * Set mail
	 *
	 * @param string $mail        	
	 * @return Gramfoodklembowosoby
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
	 * Set gg
	 *
	 * @param string $gg        	
	 * @return Gramfoodklembowosoby
	 */
	public function setGg($gg) {
		$this->gg = $gg;
		
		return $this;
	}
	
	/**
	 * Get gg
	 *
	 * @return string
	 */
	public function getGg() {
		return $this->gg;
	}
	
	/**
	 * Set lastw
	 *
	 * @param string $lastw        	
	 * @return Gramfoodklembowosoby
	 */
	public function setLastw($lastw) {
		$this->lastw = $lastw;
		
		return $this;
	}
	
	/**
	 * Get lastw
	 *
	 * @return string
	 */
	public function getLastw() {
		return $this->lastw;
	}
	
	/**
	 * Set datnw
	 *
	 * @param string $datnw        	
	 * @return Gramfoodklembowosoby
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
	 * Set dom
	 *
	 * @param string $dom        	
	 * @return Gramfoodklembowosoby
	 */
	public function setDom($dom) {
		$this->dom = $dom;
		
		return $this;
	}
	
	/**
	 * Get dom
	 *
	 * @return string
	 */
	public function getDom() {
		return $this->dom;
	}
	
	/**
	 * Set opis
	 *
	 * @param string $opis        	
	 * @return Gramfoodklembowosoby
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
	 * Set ceg
	 *
	 * @param string $ceg        	
	 * @return Gramfoodklembowosoby
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
	 * Set ks
	 *
	 * @param string $ks        	
	 * @return Gramfoodklembowosoby
	 */
	public function setKs($ks) {
		$this->ks = $ks;
		
		return $this;
	}
	
	/**
	 * Get ks
	 *
	 * @return string
	 */
	public function getKs() {
		return $this->ks;
	}
	
	/**
	 * Set zglo
	 *
	 * @param string $zglo        	
	 * @return Gramfoodklembowosoby
	 */
	public function setZglo($zglo) {
		$this->zglo = $zglo;
		
		return $this;
	}
	
	/**
	 * Get zglo
	 *
	 * @return string
	 */
	public function getZglo() {
		return $this->zglo;
	}
	
	/**
	 * Set lok
	 *
	 * @param integer $lok        	
	 * @return Gramfoodklembowosoby
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
	 * @return Gramfoodklembowosoby
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
	 * Set anul
	 *
	 * @param string $anul        	
	 * @return Gramfoodklembowosoby
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
	 * Set akt
	 *
	 * @param string $akt        	
	 * @return Gramfoodklembowosoby
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
	 * Set wers
	 *
	 * @param integer $wers        	
	 * @return Gramfoodklembowosoby
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
	 * Set ow
	 *
	 * @param string $ow        	
	 * @return Gramfoodklembowosoby
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
	 * Set kat
	 *
	 * @param string $kat        	
	 * @return Gramfoodklembowosoby
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
