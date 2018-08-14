<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Gramfoodklembowopc
 *
 * @ORM\Table(name="gramfoodklembowopc")
 * @ORM\Entity
 */
class Gramfoodklembowopc {
	/**
	 *
	 * @var string @ORM\Column(name="ID", type="string", length=50, nullable=false)
	 *      @ORM\Id
	 *      @ORM\GeneratedValue(strategy="IDENTITY")
	 */
	private $id;
	
	/**
	 *
	 * @var integer @ORM\Column(name="Nr", type="integer", nullable=true)
	 */
	private $nr;
	
	/**
	 *
	 * @var string @ORM\Column(name="Nopc", type="string", length=50, nullable=true)
	 */
	private $nopc;
	
	/**
	 *
	 * @var string @ORM\Column(name="Nwar", type="string", length=50, nullable=true)
	 */
	private $nwar;
	
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
	 * @var string @ORM\Column(name="DoID", type="string", length=50, nullable=true)
	 */
	private $doid;
	
	/**
	 *
	 * @var string @ORM\Column(name="Kod", type="string", length=50, nullable=true)
	 */
	private $kod;
	
	/**
	 *
	 * @var string @ORM\Column(name="kods", type="string", length=50, nullable=true)
	 */
	private $kods;
	
	/**
	 *
	 * @var string @ORM\Column(name="zid", type="string", length=50, nullable=true)
	 */
	private $zid;
	
	/**
	 *
	 * @var string @ORM\Column(name="kolo", type="string", length=10, nullable=true)
	 */
	private $kolo;
	
	/**
	 * Get id
	 *
	 * @return string
	 */
	public function getId() {
		return $this->id;
	}
	
	/**
	 * Set nr
	 *
	 * @param integer $nr        	
	 * @return Gramfoodklembowopc
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
	 * Set nopc
	 *
	 * @param string $nopc        	
	 * @return Gramfoodklembowopc
	 */
	public function setNopc($nopc) {
		$this->nopc = $nopc;
		
		return $this;
	}
	
	/**
	 * Get nopc
	 *
	 * @return string
	 */
	public function getNopc() {
		return $this->nopc;
	}
	
	/**
	 * Set nwar
	 *
	 * @param string $nwar        	
	 * @return Gramfoodklembowopc
	 */
	public function setNwar($nwar) {
		$this->nwar = $nwar;
		
		return $this;
	}
	
	/**
	 * Get nwar
	 *
	 * @return string
	 */
	public function getNwar() {
		return $this->nwar;
	}
	
	/**
	 * Set akt
	 *
	 * @param string $akt        	
	 * @return Gramfoodklembowopc
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
	 * @return Gramfoodklembowopc
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
	 * @return Gramfoodklembowopc
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
	 * Set doid
	 *
	 * @param string $doid        	
	 * @return Gramfoodklembowopc
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
	 * Set kod
	 *
	 * @param string $kod        	
	 * @return Gramfoodklembowopc
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
	 * Set kods
	 *
	 * @param string $kods        	
	 * @return Gramfoodklembowopc
	 */
	public function setKods($kods) {
		$this->kods = $kods;
		
		return $this;
	}
	
	/**
	 * Get kods
	 *
	 * @return string
	 */
	public function getKods() {
		return $this->kods;
	}
	
	/**
	 * Set zid
	 *
	 * @param string $zid        	
	 * @return Gramfoodklembowopc
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
	 * Set kolo
	 *
	 * @param string $kolo        	
	 * @return Gramfoodklembowopc
	 */
	public function setKolo($kolo) {
		$this->kolo = $kolo;
		
		return $this;
	}
	
	/**
	 * Get kolo
	 *
	 * @return string
	 */
	public function getKolo() {
		return $this->kolo;
	}
}
