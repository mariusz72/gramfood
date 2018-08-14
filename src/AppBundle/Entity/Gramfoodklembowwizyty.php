<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Gramfoodklembowwizyty
 *
 * @ORM\Table(name="gramfoodklembowwizyty")
 * @ORM\Entity
 */
class Gramfoodklembowwizyty {
	/**
	 *
	 * @var string @ORM\Column(name="IDw", type="string", length=50, nullable=false)
	 *      @ORM\Id
	 *      @ORM\GeneratedValue(strategy="IDENTITY")
	 */
	private $idw;
	
	/**
	 *
	 * @var string @ORM\Column(name="IDo", type="string", length=50, nullable=true)
	 */
	private $ido;
	
	/**
	 *
	 * @var string @ORM\Column(name="IDu", type="string", length=50, nullable=true)
	 */
	private $idu;
	
	/**
	 *
	 * @var string @ORM\Column(name="IDf", type="string", length=50, nullable=true)
	 */
	private $idf;
	
	/**
	 *
	 * @var string @ORM\Column(name="zID", type="string", length=50, nullable=true)
	 */
	private $zid;
	
	/**
	 *
	 * @var string @ORM\Column(name="Aliask", type="string", length=50, nullable=true)
	 */
	private $aliask;
	
	/**
	 *
	 * @var string @ORM\Column(name="Aliasf", type="string", length=50, nullable=true)
	 */
	private $aliasf;
	
	/**
	 *
	 * @var string @ORM\Column(name="Dwiz", type="string", length=14, nullable=true)
	 */
	private $dwiz;
	
	/**
	 *
	 * @var string @ORM\Column(name="Dzap", type="string", length=20, nullable=true)
	 */
	private $dzap;
	
	/**
	 *
	 * @var string @ORM\Column(name="Rodz", type="string", length=50, nullable=true)
	 */
	private $rodz;
	
	/**
	 *
	 * @var string @ORM\Column(name="Ktor", type="string", length=50, nullable=true)
	 */
	private $ktor;
	
	/**
	 *
	 * @var integer @ORM\Column(name="Czas", type="integer", nullable=true)
	 */
	private $czas;
	
	/**
	 *
	 * @var string @ORM\Column(name="Opis", type="text", length=16777215, nullable=true)
	 */
	private $opis;
	
	/**
	 *
	 * @var string @ORM\Column(name="Profi", type="string", length=50, nullable=true)
	 */
	private $profi;
	
	/**
	 *
	 * @var string @ORM\Column(name="Ceg", type="string", length=50, nullable=true)
	 */
	private $ceg;
	
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
	 * @var string @ORM\Column(name="Imik", type="string", length=50, nullable=true)
	 */
	private $imik;
	
	/**
	 *
	 * @var string @ORM\Column(name="Nazk", type="string", length=50, nullable=true)
	 */
	private $nazk;
	
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
	 * @var string @ORM\Column(name="Kodp", type="string", length=10, nullable=true)
	 */
	private $kodp;
	
	/**
	 *
	 * @var string @ORM\Column(name="Kat", type="string", length=10, nullable=true)
	 */
	private $kat;
	
	/**
	 *
	 * @var string @ORM\Column(name="Pot", type="string", length=10, nullable=true)
	 */
	private $pot;
	
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
	 * @var string @ORM\Column(name="Typa", type="string", length=150, nullable=true)
	 */
	private $typa;
	
	/**
	 *
	 * @var string @ORM\Column(name="Prep", type="string", length=150, nullable=true)
	 */
	private $prep;
	
	/**
	 *
	 * @var string @ORM\Column(name="Wska", type="string", length=150, nullable=true)
	 */
	private $wska;
	
	/**
	 *
	 * @var string @ORM\Column(name="IDt", type="string", length=50, nullable=true)
	 */
	private $idt;
	
	/**
	 *
	 * @var string @ORM\Column(name="IDt2", type="string", length=50, nullable=true)
	 */
	private $idt2;
	
	/**
	 *
	 * @var string @ORM\Column(name="IDt3", type="string", length=50, nullable=true)
	 */
	private $idt3;
	
	/**
	 *
	 * @var string @ORM\Column(name="IDt4", type="string", length=50, nullable=true)
	 */
	private $idt4;
	
	/**
	 *
	 * @var string @ORM\Column(name="Typa2", type="string", length=50, nullable=true)
	 */
	private $typa2;
	
	/**
	 *
	 * @var string @ORM\Column(name="Prep2", type="string", length=50, nullable=true)
	 */
	private $prep2;
	
	/**
	 *
	 * @var string @ORM\Column(name="Wska2", type="string", length=50, nullable=true)
	 */
	private $wska2;
	
	/**
	 *
	 * @var string @ORM\Column(name="Typa3", type="string", length=50, nullable=true)
	 */
	private $typa3;
	
	/**
	 *
	 * @var string @ORM\Column(name="Prep3", type="string", length=50, nullable=true)
	 */
	private $prep3;
	
	/**
	 *
	 * @var string @ORM\Column(name="Wska3", type="string", length=50, nullable=true)
	 */
	private $wska3;
	
	/**
	 *
	 * @var string @ORM\Column(name="Typa4", type="string", length=50, nullable=true)
	 */
	private $typa4;
	
	/**
	 *
	 * @var string @ORM\Column(name="Prep4", type="string", length=50, nullable=true)
	 */
	private $prep4;
	
	/**
	 *
	 * @var string @ORM\Column(name="Wska4", type="string", length=50, nullable=true)
	 */
	private $wska4;
	
	/**
	 *
	 * @var string @ORM\Column(name="Datc", type="string", length=20, nullable=true)
	 */
	private $datc;
	
	/**
	 *
	 * @var string @ORM\Column(name="Odgo", type="string", length=5, nullable=true)
	 */
	private $odgo;
	
	/**
	 *
	 * @var string @ORM\Column(name="Dogo", type="string", length=5, nullable=true)
	 */
	private $dogo;
	
	/**
	 *
	 * @var integer @ORM\Column(name="Frek", type="integer", nullable=true)
	 */
	private $frek;
	
	/**
	 *
	 * @var string @ORM\Column(name="Datnw", type="string", length=20, nullable=true)
	 */
	private $datnw;
	
	/**
	 *
	 * @var string @ORM\Column(name="NA", type="string", length=10, nullable=true)
	 */
	private $na;
	
	/**
	 *
	 * @var string @ORM\Column(name="IDpl", type="string", length=50, nullable=true)
	 */
	private $idpl;
	
	/**
	 *
	 * @var string @ORM\Column(name="Ceg2", type="string", length=50, nullable=true)
	 */
	private $ceg2;
	
	/**
	 *
	 * @var string @ORM\Column(name="Cel", type="text", length=16777215, nullable=true)
	 */
	private $cel;
	
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
	 * Get idw
	 *
	 * @return string
	 */
	public function getIdw() {
		return $this->idw;
	}
	
	/**
	 * Set ido
	 *
	 * @param string $ido        	
	 * @return Gramfoodklembowwizyty
	 */
	public function setIdo($ido) {
		$this->ido = $ido;
		
		return $this;
	}
	
	/**
	 * Get ido
	 *
	 * @return string
	 */
	public function getIdo() {
		return $this->ido;
	}
	
	/**
	 * Set idu
	 *
	 * @param string $idu        	
	 * @return Gramfoodklembowwizyty
	 */
	public function setIdu($idu) {
		$this->idu = $idu;
		
		return $this;
	}
	
	/**
	 * Get idu
	 *
	 * @return string
	 */
	public function getIdu() {
		return $this->idu;
	}
	
	/**
	 * Set idf
	 *
	 * @param string $idf        	
	 * @return Gramfoodklembowwizyty
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
	 * Set zid
	 *
	 * @param string $zid        	
	 * @return Gramfoodklembowwizyty
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
	 * Set aliask
	 *
	 * @param string $aliask        	
	 * @return Gramfoodklembowwizyty
	 */
	public function setAliask($aliask) {
		$this->aliask = $aliask;
		
		return $this;
	}
	
	/**
	 * Get aliask
	 *
	 * @return string
	 */
	public function getAliask() {
		return $this->aliask;
	}
	
	/**
	 * Set aliasf
	 *
	 * @param string $aliasf        	
	 * @return Gramfoodklembowwizyty
	 */
	public function setAliasf($aliasf) {
		$this->aliasf = $aliasf;
		
		return $this;
	}
	
	/**
	 * Get aliasf
	 *
	 * @return string
	 */
	public function getAliasf() {
		return $this->aliasf;
	}
	
	/**
	 * Set dwiz
	 *
	 * @param string $dwiz        	
	 * @return Gramfoodklembowwizyty
	 */
	public function setDwiz($dwiz) {
		$this->dwiz = $dwiz;
		
		return $this;
	}
	
	/**
	 * Get dwiz
	 *
	 * @return string
	 */
	public function getDwiz() {
		return $this->dwiz;
	}
	
	/**
	 * Set dzap
	 *
	 * @param string $dzap        	
	 * @return Gramfoodklembowwizyty
	 */
	public function setDzap($dzap) {
		$this->dzap = $dzap;
		
		return $this;
	}
	
	/**
	 * Get dzap
	 *
	 * @return string
	 */
	public function getDzap() {
		return $this->dzap;
	}
	
	/**
	 * Set rodz
	 *
	 * @param string $rodz        	
	 * @return Gramfoodklembowwizyty
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
	 * Set ktor
	 *
	 * @param string $ktor        	
	 * @return Gramfoodklembowwizyty
	 */
	public function setKtor($ktor) {
		$this->ktor = $ktor;
		
		return $this;
	}
	
	/**
	 * Get ktor
	 *
	 * @return string
	 */
	public function getKtor() {
		return $this->ktor;
	}
	
	/**
	 * Set czas
	 *
	 * @param integer $czas        	
	 * @return Gramfoodklembowwizyty
	 */
	public function setCzas($czas) {
		$this->czas = $czas;
		
		return $this;
	}
	
	/**
	 * Get czas
	 *
	 * @return integer
	 */
	public function getCzas() {
		return $this->czas;
	}
	
	/**
	 * Set opis
	 *
	 * @param string $opis        	
	 * @return Gramfoodklembowwizyty
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
	 * Set profi
	 *
	 * @param string $profi        	
	 * @return Gramfoodklembowwizyty
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
	 * Set ceg
	 *
	 * @param string $ceg        	
	 * @return Gramfoodklembowwizyty
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
	 * Set gr
	 *
	 * @param string $gr        	
	 * @return Gramfoodklembowwizyty
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
	 * @return Gramfoodklembowwizyty
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
	 * Set imik
	 *
	 * @param string $imik        	
	 * @return Gramfoodklembowwizyty
	 */
	public function setImik($imik) {
		$this->imik = $imik;
		
		return $this;
	}
	
	/**
	 * Get imik
	 *
	 * @return string
	 */
	public function getImik() {
		return $this->imik;
	}
	
	/**
	 * Set nazk
	 *
	 * @param string $nazk        	
	 * @return Gramfoodklembowwizyty
	 */
	public function setNazk($nazk) {
		$this->nazk = $nazk;
		
		return $this;
	}
	
	/**
	 * Get nazk
	 *
	 * @return string
	 */
	public function getNazk() {
		return $this->nazk;
	}
	
	/**
	 * Set mias
	 *
	 * @param string $mias        	
	 * @return Gramfoodklembowwizyty
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
	 * @return Gramfoodklembowwizyty
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
	 * @return Gramfoodklembowwizyty
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
	 * Set kat
	 *
	 * @param string $kat        	
	 * @return Gramfoodklembowwizyty
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
	 * Set pot
	 *
	 * @param string $pot        	
	 * @return Gramfoodklembowwizyty
	 */
	public function setPot($pot) {
		$this->pot = $pot;
		
		return $this;
	}
	
	/**
	 * Get pot
	 *
	 * @return string
	 */
	public function getPot() {
		return $this->pot;
	}
	
	/**
	 * Set sta
	 *
	 * @param string $sta        	
	 * @return Gramfoodklembowwizyty
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
	 * @return Gramfoodklembowwizyty
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
	 * @return Gramfoodklembowwizyty
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
	 * Set typa
	 *
	 * @param string $typa        	
	 * @return Gramfoodklembowwizyty
	 */
	public function setTypa($typa) {
		$this->typa = $typa;
		
		return $this;
	}
	
	/**
	 * Get typa
	 *
	 * @return string
	 */
	public function getTypa() {
		return $this->typa;
	}
	
	/**
	 * Set prep
	 *
	 * @param string $prep        	
	 * @return Gramfoodklembowwizyty
	 */
	public function setPrep($prep) {
		$this->prep = $prep;
		
		return $this;
	}
	
	/**
	 * Get prep
	 *
	 * @return string
	 */
	public function getPrep() {
		return $this->prep;
	}
	
	/**
	 * Set wska
	 *
	 * @param string $wska        	
	 * @return Gramfoodklembowwizyty
	 */
	public function setWska($wska) {
		$this->wska = $wska;
		
		return $this;
	}
	
	/**
	 * Get wska
	 *
	 * @return string
	 */
	public function getWska() {
		return $this->wska;
	}
	
	/**
	 * Set idt
	 *
	 * @param string $idt        	
	 * @return Gramfoodklembowwizyty
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
	 * Set idt2
	 *
	 * @param string $idt2        	
	 * @return Gramfoodklembowwizyty
	 */
	public function setIdt2($idt2) {
		$this->idt2 = $idt2;
		
		return $this;
	}
	
	/**
	 * Get idt2
	 *
	 * @return string
	 */
	public function getIdt2() {
		return $this->idt2;
	}
	
	/**
	 * Set idt3
	 *
	 * @param string $idt3        	
	 * @return Gramfoodklembowwizyty
	 */
	public function setIdt3($idt3) {
		$this->idt3 = $idt3;
		
		return $this;
	}
	
	/**
	 * Get idt3
	 *
	 * @return string
	 */
	public function getIdt3() {
		return $this->idt3;
	}
	
	/**
	 * Set idt4
	 *
	 * @param string $idt4        	
	 * @return Gramfoodklembowwizyty
	 */
	public function setIdt4($idt4) {
		$this->idt4 = $idt4;
		
		return $this;
	}
	
	/**
	 * Get idt4
	 *
	 * @return string
	 */
	public function getIdt4() {
		return $this->idt4;
	}
	
	/**
	 * Set typa2
	 *
	 * @param string $typa2        	
	 * @return Gramfoodklembowwizyty
	 */
	public function setTypa2($typa2) {
		$this->typa2 = $typa2;
		
		return $this;
	}
	
	/**
	 * Get typa2
	 *
	 * @return string
	 */
	public function getTypa2() {
		return $this->typa2;
	}
	
	/**
	 * Set prep2
	 *
	 * @param string $prep2        	
	 * @return Gramfoodklembowwizyty
	 */
	public function setPrep2($prep2) {
		$this->prep2 = $prep2;
		
		return $this;
	}
	
	/**
	 * Get prep2
	 *
	 * @return string
	 */
	public function getPrep2() {
		return $this->prep2;
	}
	
	/**
	 * Set wska2
	 *
	 * @param string $wska2        	
	 * @return Gramfoodklembowwizyty
	 */
	public function setWska2($wska2) {
		$this->wska2 = $wska2;
		
		return $this;
	}
	
	/**
	 * Get wska2
	 *
	 * @return string
	 */
	public function getWska2() {
		return $this->wska2;
	}
	
	/**
	 * Set typa3
	 *
	 * @param string $typa3        	
	 * @return Gramfoodklembowwizyty
	 */
	public function setTypa3($typa3) {
		$this->typa3 = $typa3;
		
		return $this;
	}
	
	/**
	 * Get typa3
	 *
	 * @return string
	 */
	public function getTypa3() {
		return $this->typa3;
	}
	
	/**
	 * Set prep3
	 *
	 * @param string $prep3        	
	 * @return Gramfoodklembowwizyty
	 */
	public function setPrep3($prep3) {
		$this->prep3 = $prep3;
		
		return $this;
	}
	
	/**
	 * Get prep3
	 *
	 * @return string
	 */
	public function getPrep3() {
		return $this->prep3;
	}
	
	/**
	 * Set wska3
	 *
	 * @param string $wska3        	
	 * @return Gramfoodklembowwizyty
	 */
	public function setWska3($wska3) {
		$this->wska3 = $wska3;
		
		return $this;
	}
	
	/**
	 * Get wska3
	 *
	 * @return string
	 */
	public function getWska3() {
		return $this->wska3;
	}
	
	/**
	 * Set typa4
	 *
	 * @param string $typa4        	
	 * @return Gramfoodklembowwizyty
	 */
	public function setTypa4($typa4) {
		$this->typa4 = $typa4;
		
		return $this;
	}
	
	/**
	 * Get typa4
	 *
	 * @return string
	 */
	public function getTypa4() {
		return $this->typa4;
	}
	
	/**
	 * Set prep4
	 *
	 * @param string $prep4        	
	 * @return Gramfoodklembowwizyty
	 */
	public function setPrep4($prep4) {
		$this->prep4 = $prep4;
		
		return $this;
	}
	
	/**
	 * Get prep4
	 *
	 * @return string
	 */
	public function getPrep4() {
		return $this->prep4;
	}
	
	/**
	 * Set wska4
	 *
	 * @param string $wska4        	
	 * @return Gramfoodklembowwizyty
	 */
	public function setWska4($wska4) {
		$this->wska4 = $wska4;
		
		return $this;
	}
	
	/**
	 * Get wska4
	 *
	 * @return string
	 */
	public function getWska4() {
		return $this->wska4;
	}
	
	/**
	 * Set datc
	 *
	 * @param string $datc        	
	 * @return Gramfoodklembowwizyty
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
	 * Set odgo
	 *
	 * @param string $odgo        	
	 * @return Gramfoodklembowwizyty
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
	 * Set dogo
	 *
	 * @param string $dogo        	
	 * @return Gramfoodklembowwizyty
	 */
	public function setDogo($dogo) {
		$this->dogo = $dogo;
		
		return $this;
	}
	
	/**
	 * Get dogo
	 *
	 * @return string
	 */
	public function getDogo() {
		return $this->dogo;
	}
	
	/**
	 * Set frek
	 *
	 * @param integer $frek        	
	 * @return Gramfoodklembowwizyty
	 */
	public function setFrek($frek) {
		$this->frek = $frek;
		
		return $this;
	}
	
	/**
	 * Get frek
	 *
	 * @return integer
	 */
	public function getFrek() {
		return $this->frek;
	}
	
	/**
	 * Set datnw
	 *
	 * @param string $datnw        	
	 * @return Gramfoodklembowwizyty
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
	 * Set na
	 *
	 * @param string $na        	
	 * @return Gramfoodklembowwizyty
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
	 * Set idpl
	 *
	 * @param string $idpl        	
	 * @return Gramfoodklembowwizyty
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
	 * Set ceg2
	 *
	 * @param string $ceg2        	
	 * @return Gramfoodklembowwizyty
	 */
	public function setCeg2($ceg2) {
		$this->ceg2 = $ceg2;
		
		return $this;
	}
	
	/**
	 * Get ceg2
	 *
	 * @return string
	 */
	public function getCeg2() {
		return $this->ceg2;
	}
	
	/**
	 * Set cel
	 *
	 * @param string $cel        	
	 * @return Gramfoodklembowwizyty
	 */
	public function setCel($cel) {
		$this->cel = $cel;
		
		return $this;
	}
	
	/**
	 * Get cel
	 *
	 * @return string
	 */
	public function getCel() {
		return $this->cel;
	}
	
	/**
	 * Set uz
	 *
	 * @param string $uz        	
	 * @return Gramfoodklembowwizyty
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
	 * @return Gramfoodklembowwizyty
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
	 * @return Gramfoodklembowwizyty
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
	 * @return Gramfoodklembowwizyty
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
