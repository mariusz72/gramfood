<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Gramfoodklembowwysad
 *
 * @ORM\Table(name="gramfoodklembowwysad")
 * @ORM\Entity
 */
class Gramfoodklembowwysad {
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
	 * @var string @ORM\Column(name="DataW", type="string", length=20, nullable=true)
	 */
	private $dataw;
	
	/**
	 *
	 * @var string @ORM\Column(name="tel", type="string", length=50, nullable=true)
	 */
	private $tel;
	
	/**
	 *
	 * @var string @ORM\Column(name="mail", type="string", length=100, nullable=true)
	 */
	private $mail;
	
	/**
	 *
	 * @var string @ORM\Column(name="Alias", type="string", length=50, nullable=true)
	 */
	private $alias;
	
	/**
	 *
	 * @var string @ORM\Column(name="IDk", type="string", length=50, nullable=true)
	 */
	private $idk;
	
	/**
	 *
	 * @var string @ORM\Column(name="IDos", type="string", length=50, nullable=true)
	 */
	private $idos;
	
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
	 * @var string @ORM\Column(name="UID", type="string", length=50, nullable=true)
	 */
	private $uid;
	
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
	 * @return Gramfoodklembowwysad
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
	 * Set dataw
	 *
	 * @param string $dataw        	
	 * @return Gramfoodklembowwysad
	 */
	public function setDataw($dataw) {
		$this->dataw = $dataw;
		
		return $this;
	}
	
	/**
	 * Get dataw
	 *
	 * @return string
	 */
	public function getDataw() {
		return $this->dataw;
	}
	
	/**
	 * Set tel
	 *
	 * @param string $tel        	
	 * @return Gramfoodklembowwysad
	 */
	public function setTel($tel) {
		$this->tel = $tel;
		
		return $this;
	}
	
	/**
	 * Get tel
	 *
	 * @return string
	 */
	public function getTel() {
		return $this->tel;
	}
	
	/**
	 * Set mail
	 *
	 * @param string $mail        	
	 * @return Gramfoodklembowwysad
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
	 * Set alias
	 *
	 * @param string $alias        	
	 * @return Gramfoodklembowwysad
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
	 * Set idk
	 *
	 * @param string $idk        	
	 * @return Gramfoodklembowwysad
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
	 * Set idos
	 *
	 * @param string $idos        	
	 * @return Gramfoodklembowwysad
	 */
	public function setIdos($idos) {
		$this->idos = $idos;
		
		return $this;
	}
	
	/**
	 * Get idos
	 *
	 * @return string
	 */
	public function getIdos() {
		return $this->idos;
	}
	
	/**
	 * Set akt
	 *
	 * @param string $akt        	
	 * @return Gramfoodklembowwysad
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
	 * @return Gramfoodklembowwysad
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
	 * @return Gramfoodklembowwysad
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
	 * Set uid
	 *
	 * @param string $uid        	
	 * @return Gramfoodklembowwysad
	 */
	public function setUid($uid) {
		$this->uid = $uid;
		
		return $this;
	}
	
	/**
	 * Get uid
	 *
	 * @return string
	 */
	public function getUid() {
		return $this->uid;
	}
}
