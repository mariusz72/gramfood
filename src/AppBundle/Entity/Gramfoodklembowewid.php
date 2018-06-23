<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Gramfoodklembowewid
 *
 * @ORM\Table(name="gramfoodklembowewid")
 * @ORM\Entity
 */
class Gramfoodklembowewid {
	/**
	 *
	 * @var string @ORM\Column(name="IDe", type="string", length=150, nullable=false)
	 *      @ORM\Id
	 *      @ORM\GeneratedValue(strategy="IDENTITY")
	 */
	private $ide;
	
	/**
	 *
	 * @var string @ORM\Column(name="IDzzs", type="string", length=50, nullable=true)
	 */
	private $idzzs;
	
	/**
	 *
	 * @var string @ORM\Column(name="IDo", type="string", length=50, nullable=true)
	 */
	private $ido;
	
	/**
	 *
	 * @var string @ORM\Column(name="Alias", type="string", length=50, nullable=true)
	 */
	private $alias;
	
	/**
	 *
	 * @var string @ORM\Column(name="UZ", type="string", length=50, nullable=true)
	 */
	private $uz;
	
	/**
	 *
	 * @var string @ORM\Column(name="IDu", type="string", length=50, nullable=true)
	 */
	private $idu;
	
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
	 * @var string @ORM\Column(name="Ceg", type="string", length=50, nullable=true)
	 */
	private $ceg;
	
	/**
	 *
	 * @var string @ORM\Column(name="Kier", type="string", length=10, nullable=true)
	 */
	private $kier;
	
	/**
	 *
	 * @var string @ORM\Column(name="Ro", type="string", length=50, nullable=true)
	 */
	private $ro;
	
	/**
	 *
	 * @var string @ORM\Column(name="Co", type="string", length=240, nullable=true)
	 */
	private $co;
	
	/**
	 *
	 * @var string @ORM\Column(name="Nr", type="string", length=50, nullable=true)
	 */
	private $nr;
	
	/**
	 *
	 * @var string @ORM\Column(name="Data", type="string", length=8, nullable=true)
	 */
	private $data;
	
	/**
	 *
	 * @var integer @ORM\Column(name="il", type="integer", nullable=true)
	 */
	private $il;
	
	/**
	 *
	 * @var integer @ORM\Column(name="ik", type="integer", nullable=true)
	 */
	private $ik;
	
	/**
	 *
	 * @var integer @ORM\Column(name="iz", type="integer", nullable=true)
	 */
	private $iz;
	
	/**
	 *
	 * @var float @ORM\Column(name="ce", type="float", precision=10, scale=0, nullable=true)
	 */
	private $ce;
	
	/**
	 *
	 * @var string @ORM\Column(name="Okaz", type="string", length=240, nullable=true)
	 */
	private $okaz;
	
	/**
	 *
	 * @var string @ORM\Column(name="Fakt", type="string", length=50, nullable=true)
	 */
	private $fakt;
	
	/**
	 *
	 * @var string @ORM\Column(name="Opis", type="text", length=16777215, nullable=true)
	 */
	private $opis;
	
	/**
	 *
	 * @var string @ORM\Column(name="Str1", type="string", length=50, nullable=true)
	 */
	private $str1;
	
	/**
	 *
	 * @var string @ORM\Column(name="Str2", type="string", length=50, nullable=true)
	 */
	private $str2;
	
	/**
	 *
	 * @var string @ORM\Column(name="Str3", type="string", length=50, nullable=true)
	 */
	private $str3;
	
	/**
	 *
	 * @var string @ORM\Column(name="Str4", type="string", length=50, nullable=true)
	 */
	private $str4;
	
	/**
	 *
	 * @var string @ORM\Column(name="Str5", type="string", length=50, nullable=true)
	 */
	private $str5;
	
	/**
	 *
	 * @var string @ORM\Column(name="Str6", type="string", length=50, nullable=true)
	 */
	private $str6;
	
	/**
	 *
	 * @var string @ORM\Column(name="Str7", type="string", length=50, nullable=true)
	 */
	private $str7;
	
	/**
	 *
	 * @var string @ORM\Column(name="Pacz", type="string", length=50, nullable=true)
	 */
	private $pacz;
	
	/**
	 *
	 * @var string @ORM\Column(name="NA", type="string", length=1, nullable=true)
	 */
	private $na;
	
	/**
	 *
	 * @var string @ORM\Column(name="Profi", type="string", length=50, nullable=true)
	 */
	private $profi;
	
	/**
	 *
	 * @var integer @ORM\Column(name="N1", type="integer", nullable=true)
	 */
	private $n1;
	
	/**
	 *
	 * @var integer @ORM\Column(name="N2", type="integer", nullable=true)
	 */
	private $n2;
	
	/**
	 *
	 * @var integer @ORM\Column(name="N3", type="integer", nullable=true)
	 */
	private $n3;
	
	/**
	 *
	 * @var integer @ORM\Column(name="N4", type="integer", nullable=true)
	 */
	private $n4;
	
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
	 * Get ide
	 *
	 * @return string
	 */
	public function getIde() {
		return $this->ide;
	}
	
	/**
	 * Set idzzs
	 *
	 * @param string $idzzs        	
	 * @return Gramfoodklembowewid
	 */
	public function setIdzzs($idzzs) {
		$this->idzzs = $idzzs;
		
		return $this;
	}
	
	/**
	 * Get idzzs
	 *
	 * @return string
	 */
	public function getIdzzs() {
		return $this->idzzs;
	}
	
	/**
	 * Set ido
	 *
	 * @param string $ido        	
	 * @return Gramfoodklembowewid
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
	 * Set alias
	 *
	 * @param string $alias        	
	 * @return Gramfoodklembowewid
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
	 * Set uz
	 *
	 * @param string $uz        	
	 * @return Gramfoodklembowewid
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
	 * Set idu
	 *
	 * @param string $idu        	
	 * @return Gramfoodklembowewid
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
	 * Set idp
	 *
	 * @param string $idp        	
	 * @return Gramfoodklembowewid
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
	 * @return Gramfoodklembowewid
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
	 * Set ceg
	 *
	 * @param string $ceg        	
	 * @return Gramfoodklembowewid
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
	 * Set kier
	 *
	 * @param string $kier        	
	 * @return Gramfoodklembowewid
	 */
	public function setKier($kier) {
		$this->kier = $kier;
		
		return $this;
	}
	
	/**
	 * Get kier
	 *
	 * @return string
	 */
	public function getKier() {
		return $this->kier;
	}
	
	/**
	 * Set ro
	 *
	 * @param string $ro        	
	 * @return Gramfoodklembowewid
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
	 * Set co
	 *
	 * @param string $co        	
	 * @return Gramfoodklembowewid
	 */
	public function setCo($co) {
		$this->co = $co;
		
		return $this;
	}
	
	/**
	 * Get co
	 *
	 * @return string
	 */
	public function getCo() {
		return $this->co;
	}
	
	/**
	 * Set nr
	 *
	 * @param string $nr        	
	 * @return Gramfoodklembowewid
	 */
	public function setNr($nr) {
		$this->nr = $nr;
		
		return $this;
	}
	
	/**
	 * Get nr
	 *
	 * @return string
	 */
	public function getNr() {
		return $this->nr;
	}
	
	/**
	 * Set data
	 *
	 * @param string $data        	
	 * @return Gramfoodklembowewid
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
	 * Set il
	 *
	 * @param integer $il        	
	 * @return Gramfoodklembowewid
	 */
	public function setIl($il) {
		$this->il = $il;
		
		return $this;
	}
	
	/**
	 * Get il
	 *
	 * @return integer
	 */
	public function getIl() {
		return $this->il;
	}
	
	/**
	 * Set ik
	 *
	 * @param integer $ik        	
	 * @return Gramfoodklembowewid
	 */
	public function setIk($ik) {
		$this->ik = $ik;
		
		return $this;
	}
	
	/**
	 * Get ik
	 *
	 * @return integer
	 */
	public function getIk() {
		return $this->ik;
	}
	
	/**
	 * Set iz
	 *
	 * @param integer $iz        	
	 * @return Gramfoodklembowewid
	 */
	public function setIz($iz) {
		$this->iz = $iz;
		
		return $this;
	}
	
	/**
	 * Get iz
	 *
	 * @return integer
	 */
	public function getIz() {
		return $this->iz;
	}
	
	/**
	 * Set ce
	 *
	 * @param float $ce        	
	 * @return Gramfoodklembowewid
	 */
	public function setCe($ce) {
		$this->ce = $ce;
		
		return $this;
	}
	
	/**
	 * Get ce
	 *
	 * @return float
	 */
	public function getCe() {
		return $this->ce;
	}
	
	/**
	 * Set okaz
	 *
	 * @param string $okaz        	
	 * @return Gramfoodklembowewid
	 */
	public function setOkaz($okaz) {
		$this->okaz = $okaz;
		
		return $this;
	}
	
	/**
	 * Get okaz
	 *
	 * @return string
	 */
	public function getOkaz() {
		return $this->okaz;
	}
	
	/**
	 * Set fakt
	 *
	 * @param string $fakt        	
	 * @return Gramfoodklembowewid
	 */
	public function setFakt($fakt) {
		$this->fakt = $fakt;
		
		return $this;
	}
	
	/**
	 * Get fakt
	 *
	 * @return string
	 */
	public function getFakt() {
		return $this->fakt;
	}
	
	/**
	 * Set opis
	 *
	 * @param string $opis        	
	 * @return Gramfoodklembowewid
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
	 * Set str1
	 *
	 * @param string $str1        	
	 * @return Gramfoodklembowewid
	 */
	public function setStr1($str1) {
		$this->str1 = $str1;
		
		return $this;
	}
	
	/**
	 * Get str1
	 *
	 * @return string
	 */
	public function getStr1() {
		return $this->str1;
	}
	
	/**
	 * Set str2
	 *
	 * @param string $str2        	
	 * @return Gramfoodklembowewid
	 */
	public function setStr2($str2) {
		$this->str2 = $str2;
		
		return $this;
	}
	
	/**
	 * Get str2
	 *
	 * @return string
	 */
	public function getStr2() {
		return $this->str2;
	}
	
	/**
	 * Set str3
	 *
	 * @param string $str3        	
	 * @return Gramfoodklembowewid
	 */
	public function setStr3($str3) {
		$this->str3 = $str3;
		
		return $this;
	}
	
	/**
	 * Get str3
	 *
	 * @return string
	 */
	public function getStr3() {
		return $this->str3;
	}
	
	/**
	 * Set str4
	 *
	 * @param string $str4        	
	 * @return Gramfoodklembowewid
	 */
	public function setStr4($str4) {
		$this->str4 = $str4;
		
		return $this;
	}
	
	/**
	 * Get str4
	 *
	 * @return string
	 */
	public function getStr4() {
		return $this->str4;
	}
	
	/**
	 * Set str5
	 *
	 * @param string $str5        	
	 * @return Gramfoodklembowewid
	 */
	public function setStr5($str5) {
		$this->str5 = $str5;
		
		return $this;
	}
	
	/**
	 * Get str5
	 *
	 * @return string
	 */
	public function getStr5() {
		return $this->str5;
	}
	
	/**
	 * Set str6
	 *
	 * @param string $str6        	
	 * @return Gramfoodklembowewid
	 */
	public function setStr6($str6) {
		$this->str6 = $str6;
		
		return $this;
	}
	
	/**
	 * Get str6
	 *
	 * @return string
	 */
	public function getStr6() {
		return $this->str6;
	}
	
	/**
	 * Set str7
	 *
	 * @param string $str7        	
	 * @return Gramfoodklembowewid
	 */
	public function setStr7($str7) {
		$this->str7 = $str7;
		
		return $this;
	}
	
	/**
	 * Get str7
	 *
	 * @return string
	 */
	public function getStr7() {
		return $this->str7;
	}
	
	/**
	 * Set pacz
	 *
	 * @param string $pacz        	
	 * @return Gramfoodklembowewid
	 */
	public function setPacz($pacz) {
		$this->pacz = $pacz;
		
		return $this;
	}
	
	/**
	 * Get pacz
	 *
	 * @return string
	 */
	public function getPacz() {
		return $this->pacz;
	}
	
	/**
	 * Set na
	 *
	 * @param string $na        	
	 * @return Gramfoodklembowewid
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
	 * Set profi
	 *
	 * @param string $profi        	
	 * @return Gramfoodklembowewid
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
	 * Set n1
	 *
	 * @param integer $n1        	
	 * @return Gramfoodklembowewid
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
	 * Set n2
	 *
	 * @param integer $n2        	
	 * @return Gramfoodklembowewid
	 */
	public function setN2($n2) {
		$this->n2 = $n2;
		
		return $this;
	}
	
	/**
	 * Get n2
	 *
	 * @return integer
	 */
	public function getN2() {
		return $this->n2;
	}
	
	/**
	 * Set n3
	 *
	 * @param integer $n3        	
	 * @return Gramfoodklembowewid
	 */
	public function setN3($n3) {
		$this->n3 = $n3;
		
		return $this;
	}
	
	/**
	 * Get n3
	 *
	 * @return integer
	 */
	public function getN3() {
		return $this->n3;
	}
	
	/**
	 * Set n4
	 *
	 * @param integer $n4        	
	 * @return Gramfoodklembowewid
	 */
	public function setN4($n4) {
		$this->n4 = $n4;
		
		return $this;
	}
	
	/**
	 * Get n4
	 *
	 * @return integer
	 */
	public function getN4() {
		return $this->n4;
	}
	
	/**
	 * Set akt
	 *
	 * @param string $akt        	
	 * @return Gramfoodklembowewid
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
	 * @return Gramfoodklembowewid
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
	 * @return Gramfoodklembowewid
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
