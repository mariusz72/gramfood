<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ExtGramfoodkompow
 *
 * @ORM\Table(name="ext_gramfoodkompow")
 * @ORM\Entity(repositoryClass="AppBundle\Entity\ExtGramfoodkompowRepository")
 */
class ExtGramfoodkompow {
	/**
	 *
	 * @var integer @ORM\Column(name="ID", type="integer", nullable=false)
	 *      @ORM\Id
	 *      @ORM\GeneratedValue(strategy="IDENTITY")
	 */
	private $id;
	
	/**
	 *
	 * @var string @ORM\Column(name="Kod", type="string", length=50, nullable=false)
	 */
	private $kod;
	
	/**
	 *
	 * @var string @ORM\Column(name="IDrw", type="string", length=50, nullable=false)
	 */
	private $idrw;
	
	/**
	 *
	 * @var string @ORM\Column(name="IDkpl", type="string", length=50, nullable=false)
	 */
	private $idkpl;
	
	/**
	 *
	 * @var string @ORM\Column(name="IDpz", type="string", length=50, nullable=false)
	 */
	private $idpz;
	
	/**
	 *
	 * @var string @ORM\Column(name="SNpz", type="string", length=50, nullable=false)
	 */
	private $snpz;
	
	/**
	 *
     * @var float @ORM\Column(name="il", type="float", precision=10, scale=0, nullable=true)
	 */
	private $il;
	
	/**
	 *
	 * @var string @ORM\Column(name="JM", type="string", length=20, nullable=false)
	 */
	private $jm;
	
	/**
	 *
	 * @var \DateTime @ORM\Column(name="Data", type="datetime", nullable=false)
	 */
	private $data;
	
	/**
	 *
	 * @var string @ORM\Column(name="Uzyt", type="string", length=50, nullable=false)
	 */
	private $uzyt;
	
	/**
     * @return string
     */
    public function getIdkpl()
    {
        return $this->idkpl;
    }

    /**
     * @param string $idkpl
     */
    public function setIdkpl($idkpl)
    {
        $this->idkpl = $idkpl;
    }

    /**
	 * @return string
	 */
	public function getSnpz() {
		return $this->snpz;
	}

	/**
	 * @param string $snpz
	 */
	public function setSnpz($snpz) {
		$this->snpz = $snpz;
	}

	/**
	 * Get id
	 *
	 * @return integer
	 */
	public function getId() {
		return $this->id;
	}
	
	/**
	 * Set kod
	 *
	 * @param string $kod        	
	 * @return ExtGramfoodkompow
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
	 * Set idrw
	 *
	 * @param string $idrw        	
	 * @return ExtGramfoodkompow
	 */
	public function setIdrw($idrw) {
		$this->idrw = $idrw;
		
		return $this;
	}
	
	/**
	 * Get idrw
	 *
	 * @return string
	 */
	public function getIdrw() {
		return $this->idrw;
	}
	
	/**
	 * Set idpz
	 *
	 * @param string $idpz        	
	 * @return ExtGramfoodkompow
	 */
	public function setIdpz($idpz) {
		$this->idpz = $idpz;
		
		return $this;
	}
	
	/**
	 * Get idpz
	 *
	 * @return string
	 */
	public function getIdpz() {
		return $this->idpz;
	}
	
	/**
	 * Set il
	 *
	 * @param integer $il        	
	 * @return ExtGramfoodkompow
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
	 * Set jm
	 *
	 * @param string $jm        	
	 * @return ExtGramfoodkompow
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
	 * Set data
	 *
	 * @param \DateTime $data        	
	 * @return ExtGramfoodkompow
	 */
	public function setData($data) {
		$this->data = $data;
		
		return $this;
	}
	
	/**
	 * Get data
	 *
	 * @return \DateTime
	 */
	public function getData() {
		return $this->data;
	}
	
	/**
	 * Set user
	 *
	 * @param string $user        	
	 * @return ExtGramfoodkompow
	 */
	public function setUzyt($uzyt) {
		$this->uzyt = $uzyt;
		
		return $this;
	}
	
	/**
	 * Get user
	 *
	 * @return string
	 */
	public function getUzyt() {
		return $this->uzyt;
	}
}
