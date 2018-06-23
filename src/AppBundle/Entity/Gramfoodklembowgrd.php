<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Gramfoodklembowgrd
 *
 * @ORM\Table(name="gramfoodklembowgrd")
 * @ORM\Entity
 */
class Gramfoodklembowgrd {
	/**
	 *
	 * @var string @ORM\Column(name="ID", type="string", length=50, nullable=false)
	 *      @ORM\Id
	 *      @ORM\GeneratedValue(strategy="IDENTITY")
	 */
	private $id;
	
	/**
	 *
	 * @var string @ORM\Column(name="IDd", type="string", length=50, nullable=true)
	 */
	private $idd;
	
	/**
	 *
	 * @var integer @ORM\Column(name="Nr", type="integer", nullable=true)
	 */
	private $nr;
	
	/**
	 *
	 * @var string @ORM\Column(name="Typ", type="string", length=50, nullable=true)
	 */
	private $typ;
	
	/**
	 *
	 * @var string @ORM\Column(name="Nazw", type="string", length=50, nullable=true)
	 */
	private $nazw;
	
	/**
	 *
	 * @var string @ORM\Column(name="ID1", type="string", length=50, nullable=true)
	 */
	private $id1;
	
	/**
	 *
	 * @var string @ORM\Column(name="ID2", type="string", length=50, nullable=true)
	 */
	private $id2;
	
	/**
	 *
	 * @var string @ORM\Column(name="ID3", type="string", length=50, nullable=true)
	 */
	private $id3;
	
	/**
	 *
	 * @var string @ORM\Column(name="ID4", type="string", length=50, nullable=true)
	 */
	private $id4;
	
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
	 * @var string @ORM\Column(name="zID", type="string", length=50, nullable=true)
	 */
	private $zid;
	
	/**
	 *
	 * @var string @ORM\Column(name="DataL", type="string", length=20, nullable=true)
	 */
	private $datal;
	
	/**
	 * Get id
	 *
	 * @return string
	 */
	public function getId() {
		return $this->id;
	}
	
	/**
	 * Set idd
	 *
	 * @param string $idd        	
	 * @return Gramfoodklembowgrd
	 */
	public function setIdd($idd) {
		$this->idd = $idd;
		
		return $this;
	}
	
	/**
	 * Get idd
	 *
	 * @return string
	 */
	public function getIdd() {
		return $this->idd;
	}
	
	/**
	 * Set nr
	 *
	 * @param integer $nr        	
	 * @return Gramfoodklembowgrd
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
	 * Set typ
	 *
	 * @param string $typ        	
	 * @return Gramfoodklembowgrd
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
	 * Set nazw
	 *
	 * @param string $nazw        	
	 * @return Gramfoodklembowgrd
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
	 * Set id1
	 *
	 * @param string $id1        	
	 * @return Gramfoodklembowgrd
	 */
	public function setId1($id1) {
		$this->id1 = $id1;
		
		return $this;
	}
	
	/**
	 * Get id1
	 *
	 * @return string
	 */
	public function getId1() {
		return $this->id1;
	}
	
	/**
	 * Set id2
	 *
	 * @param string $id2        	
	 * @return Gramfoodklembowgrd
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
	 * Set id3
	 *
	 * @param string $id3        	
	 * @return Gramfoodklembowgrd
	 */
	public function setId3($id3) {
		$this->id3 = $id3;
		
		return $this;
	}
	
	/**
	 * Get id3
	 *
	 * @return string
	 */
	public function getId3() {
		return $this->id3;
	}
	
	/**
	 * Set id4
	 *
	 * @param string $id4        	
	 * @return Gramfoodklembowgrd
	 */
	public function setId4($id4) {
		$this->id4 = $id4;
		
		return $this;
	}
	
	/**
	 * Get id4
	 *
	 * @return string
	 */
	public function getId4() {
		return $this->id4;
	}
	
	/**
	 * Set akt
	 *
	 * @param string $akt        	
	 * @return Gramfoodklembowgrd
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
	 * @return Gramfoodklembowgrd
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
	 * @return Gramfoodklembowgrd
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
	 * Set zid
	 *
	 * @param string $zid        	
	 * @return Gramfoodklembowgrd
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
	 * Set datal
	 *
	 * @param string $datal        	
	 * @return Gramfoodklembowgrd
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
}
