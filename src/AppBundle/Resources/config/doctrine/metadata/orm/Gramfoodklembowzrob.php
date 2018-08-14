<?php
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
}
