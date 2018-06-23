<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Gramfoodklembowzrob
 *
 * @ORM\Table(name="gramfoodklembowzrob")
 * @ORM\Entity
 */
class Gramfoodklembowzrob {
	/**
	 *
	 * @var string @ORM\Column(name="ID", type="string", length=50, nullable=false)
	 *      @ORM\Id
	 *      @ORM\GeneratedValue(strategy="IDENTITY")
	 */
	private $id;
	
	/**
	 *
	 * @var string @ORM\Column(name="Co", type="string", length=50, nullable=true)
	 */
	private $co;
	
	/**
	 *
	 * @var string @ORM\Column(name="Akc", type="string", length=50, nullable=true)
	 */
	private $akc;
	
	/**
	 *
	 * @var string @ORM\Column(name="Data", type="string", length=50, nullable=true)
	 */
	private $data;
	
	/**
	 *
	 * @var string @ORM\Column(name="DataP", type="string", length=50, nullable=true)
	 */
	private $datap;
	
	/**
	 *
	 * @var integer @ORM\Column(name="Nr", type="integer", nullable=true)
	 */
	private $nr;
	
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
	 * @var string @ORM\Column(name="Te", type="string", length=250, nullable=true)
	 */
	private $te;
	
	/**
	 *
	 * @var string @ORM\Column(name="UZ", type="string", length=50, nullable=true)
	 */
	private $uz;
	
	/**
	 * Get id
	 *
	 * @return string
	 */
	public function getId() {
		return $this->id;
	}
	
	/**
	 * Set co
	 *
	 * @param string $co        	
	 * @return Gramfoodklembowzrob
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
	 * Set akc
	 *
	 * @param string $akc        	
	 * @return Gramfoodklembowzrob
	 */
	public function setAkc($akc) {
		$this->akc = $akc;
		
		return $this;
	}
	
	/**
	 * Get akc
	 *
	 * @return string
	 */
	public function getAkc() {
		return $this->akc;
	}
	
	/**
	 * Set data
	 *
	 * @param string $data        	
	 * @return Gramfoodklembowzrob
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
	 * Set datap
	 *
	 * @param string $datap        	
	 * @return Gramfoodklembowzrob
	 */
	public function setDatap($datap) {
		$this->datap = $datap;
		
		return $this;
	}
	
	/**
	 * Get datap
	 *
	 * @return string
	 */
	public function getDatap() {
		return $this->datap;
	}
	
	/**
	 * Set nr
	 *
	 * @param integer $nr        	
	 * @return Gramfoodklembowzrob
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
	 * Set nazw
	 *
	 * @param string $nazw        	
	 * @return Gramfoodklembowzrob
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
	 * @return Gramfoodklembowzrob
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
	 * Set te
	 *
	 * @param string $te        	
	 * @return Gramfoodklembowzrob
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
	 * @return Gramfoodklembowzrob
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
}
