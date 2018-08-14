<?php
use Doctrine\ORM\Mapping as ORM;

/**
 * Gramfoodklembowtowarydz
 *
 * @ORM\Table(name="gramfoodklembowtowarydz")
 * @ORM\Entity
 */
class Gramfoodklembowtowarydz {
	/**
	 *
	 * @var string @ORM\Column(name="ID", type="string", length=50, nullable=false)
	 *      @ORM\Id
	 *      @ORM\GeneratedValue(strategy="IDENTITY")
	 */
	private $id;
	
	/**
	 *
	 * @var string @ORM\Column(name="Data", type="string", length=8, nullable=true)
	 */
	private $data;
	
	/**
	 *
	 * @var string @ORM\Column(name="Mag", type="string", length=20, nullable=true)
	 */
	private $mag;
	
	/**
	 *
	 * @var string @ORM\Column(name="Kod", type="string", length=50, nullable=true)
	 */
	private $kod;
	
	/**
	 *
	 * @var string @ORM\Column(name="Nazw", type="string", length=255, nullable=true)
	 */
	private $nazw;
	
	/**
	 *
	 * @var float @ORM\Column(name="ST", type="float", precision=10, scale=0, nullable=true)
	 */
	private $st;
	
	/**
	 *
	 * @var float @ORM\Column(name="cz", type="float", precision=10, scale=0, nullable=true)
	 */
	private $cz;
	
	/**
	 *
	 * @var float @ORM\Column(name="cn", type="float", precision=10, scale=0, nullable=true)
	 */
	private $cn;
	
	/**
	 *
	 * @var float @ORM\Column(name="cb", type="float", precision=10, scale=0, nullable=true)
	 */
	private $cb;
	
	/**
	 *
	 * @var float @ORM\Column(name="pi", type="float", precision=10, scale=0, nullable=true)
	 */
	private $pi;
	
	/**
	 *
	 * @var float @ORM\Column(name="pw", type="float", precision=10, scale=0, nullable=true)
	 */
	private $pw;
	
	/**
	 *
	 * @var float @ORM\Column(name="ri", type="float", precision=10, scale=0, nullable=true)
	 */
	private $ri;
	
	/**
	 *
	 * @var float @ORM\Column(name="rw", type="float", precision=10, scale=0, nullable=true)
	 */
	private $rw;
	
	/**
	 *
	 * @var float @ORM\Column(name="pmci", type="float", precision=10, scale=0, nullable=true)
	 */
	private $pmci;
	
	/**
	 *
	 * @var float @ORM\Column(name="pmcw", type="float", precision=10, scale=0, nullable=true)
	 */
	private $pmcw;
	
	/**
	 *
	 * @var float @ORM\Column(name="obr", type="float", precision=10, scale=0, nullable=true)
	 */
	private $obr;
}
