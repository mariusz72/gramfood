<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Gramfoodklembowwys
 *
 * @ORM\Table(name="gramfoodklembowwys")
 * @ORM\Entity
 */
class Gramfoodklembowwys {
	/**
	 *
	 * @var string @ORM\Column(name="ID", type="string", length=50, nullable=false)
	 *      @ORM\Id
	 *      @ORM\GeneratedValue(strategy="IDENTITY")
	 */
	private $id;
	
	/**
	 *
	 * @var integer @ORM\Column(name="Stan", type="integer", nullable=true)
	 */
	private $stan;
	
	/**
	 *
	 * @var string @ORM\Column(name="jak", type="string", length=10, nullable=true)
	 */
	private $jak;
	
	/**
	 *
	 * @var string @ORM\Column(name="Data", type="string", length=20, nullable=true)
	 */
	private $data;
	
	/**
	 *
	 * @var string @ORM\Column(name="DataW", type="string", length=20, nullable=true)
	 */
	private $dataw;
	
	/**
	 *
	 * @var string @ORM\Column(name="Nagl", type="string", length=250, nullable=true)
	 */
	private $nagl;
	
	/**
	 *
	 * @var string @ORM\Column(name="Tekst", type="text", length=16777215, nullable=true)
	 */
	private $tekst;
	
	/**
	 *
	 * @var string @ORM\Column(name="Teksto", type="text", length=16777215, nullable=true)
	 */
	private $teksto;
	
	/**
	 *
	 * @var string @ORM\Column(name="NrR", type="string", length=50, nullable=true)
	 */
	private $nrr;
	
	/**
	 *
	 * @var string @ORM\Column(name="IDd", type="string", length=150, nullable=true)
	 */
	private $idd;
	
	/**
	 *
	 * @var string @ORM\Column(name="RFd", type="string", length=50, nullable=true)
	 */
	private $rfd;
	
	/**
	 *
	 * @var string @ORM\Column(name="Alias", type="string", length=50, nullable=true)
	 */
	private $alias;
	
	/**
	 *
	 * @var integer @ORM\Column(name="ile", type="integer", nullable=true)
	 */
	private $ile;
	
	/**
	 *
	 * @var integer @ORM\Column(name="Rea", type="integer", nullable=true)
	 */
	private $rea;
	
	/**
	 *
	 * @var string @ORM\Column(name="Te", type="text", length=16777215, nullable=true)
	 */
	private $te;
	
	/**
	 *
	 * @var string @ORM\Column(name="UZ", type="string", length=50, nullable=true)
	 */
	private $uz;
	
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
	 *
	 * @var string @ORM\Column(name="Mailw", type="string", length=100, nullable=true)
	 */
	private $mailw;
	
	/**
	 * Get id
	 *
	 * @return string
	 */
	public function getId() {
		return $this->id;
	}
	
	/**
	 * Set stan
	 *
	 * @param integer $stan        	
	 * @return Gramfoodklembowwys
	 */
	public function setStan($stan) {
		$this->stan = $stan;
		
		return $this;
	}
	
	/**
	 * Get stan
	 *
	 * @return integer
	 */
	public function getStan() {
		return $this->stan;
	}
	
	/**
	 * Set jak
	 *
	 * @param string $jak        	
	 * @return Gramfoodklembowwys
	 */
	public function setJak($jak) {
		$this->jak = $jak;
		
		return $this;
	}
	
	/**
	 * Get jak
	 *
	 * @return string
	 */
	public function getJak() {
		return $this->jak;
	}
	
	/**
	 * Set data
	 *
	 * @param string $data        	
	 * @return Gramfoodklembowwys
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
	 * Set dataw
	 *
	 * @param string $dataw        	
	 * @return Gramfoodklembowwys
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
	 * Set nagl
	 *
	 * @param string $nagl        	
	 * @return Gramfoodklembowwys
	 */
	public function setNagl($nagl) {
		$this->nagl = $nagl;
		
		return $this;
	}
	
	/**
	 * Get nagl
	 *
	 * @return string
	 */
	public function getNagl() {
		return $this->nagl;
	}
	
	/**
	 * Set tekst
	 *
	 * @param string $tekst        	
	 * @return Gramfoodklembowwys
	 */
	public function setTekst($tekst) {
		$this->tekst = $tekst;
		
		return $this;
	}
	
	/**
	 * Get tekst
	 *
	 * @return string
	 */
	public function getTekst() {
		return $this->tekst;
	}
	
	/**
	 * Set teksto
	 *
	 * @param string $teksto        	
	 * @return Gramfoodklembowwys
	 */
	public function setTeksto($teksto) {
		$this->teksto = $teksto;
		
		return $this;
	}
	
	/**
	 * Get teksto
	 *
	 * @return string
	 */
	public function getTeksto() {
		return $this->teksto;
	}
	
	/**
	 * Set nrr
	 *
	 * @param string $nrr        	
	 * @return Gramfoodklembowwys
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
	 * Set idd
	 *
	 * @param string $idd        	
	 * @return Gramfoodklembowwys
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
	 * Set rfd
	 *
	 * @param string $rfd        	
	 * @return Gramfoodklembowwys
	 */
	public function setRfd($rfd) {
		$this->rfd = $rfd;
		
		return $this;
	}
	
	/**
	 * Get rfd
	 *
	 * @return string
	 */
	public function getRfd() {
		return $this->rfd;
	}
	
	/**
	 * Set alias
	 *
	 * @param string $alias        	
	 * @return Gramfoodklembowwys
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
	 * Set ile
	 *
	 * @param integer $ile        	
	 * @return Gramfoodklembowwys
	 */
	public function setIle($ile) {
		$this->ile = $ile;
		
		return $this;
	}
	
	/**
	 * Get ile
	 *
	 * @return integer
	 */
	public function getIle() {
		return $this->ile;
	}
	
	/**
	 * Set rea
	 *
	 * @param integer $rea        	
	 * @return Gramfoodklembowwys
	 */
	public function setRea($rea) {
		$this->rea = $rea;
		
		return $this;
	}
	
	/**
	 * Get rea
	 *
	 * @return integer
	 */
	public function getRea() {
		return $this->rea;
	}
	
	/**
	 * Set te
	 *
	 * @param string $te        	
	 * @return Gramfoodklembowwys
	 */
	public function setTe($te) {
		$this->te = $te;
		
		return $this;
	}
	
	/**
	 * Get te
	 *
	 * @return string
	 */
	public function getTe() {
		return $this->te;
	}
	
	/**
	 * Set uz
	 *
	 * @param string $uz        	
	 * @return Gramfoodklembowwys
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
	 * @return Gramfoodklembowwys
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
	 * @return Gramfoodklembowwys
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
	 * @return Gramfoodklembowwys
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
	 * @return Gramfoodklembowwys
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
	
	/**
	 * Set mailw
	 *
	 * @param string $mailw        	
	 * @return Gramfoodklembowwys
	 */
	public function setMailw($mailw) {
		$this->mailw = $mailw;
		
		return $this;
	}
	
	/**
	 * Get mailw
	 *
	 * @return string
	 */
	public function getMailw() {
		return $this->mailw;
	}
}
