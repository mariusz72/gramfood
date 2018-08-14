<?php
use Doctrine\ORM\Mapping as ORM;

/**
 * Gramfoodklembowtowaryzam
 *
 * @ORM\Table(name="gramfoodklembowtowaryzam")
 * @ORM\Entity
 */
class Gramfoodklembowtowaryzam {
	/**
	 *
	 * @var string @ORM\Column(name="ID", type="string", length=50, nullable=false)
	 *      @ORM\Id
	 *      @ORM\GeneratedValue(strategy="IDENTITY")
	 */
	private $id;
	
	/**
	 *
	 * @var string @ORM\Column(name="IDzam", type="string", length=50, nullable=true)
	 */
	private $idzam;
	
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
	 * @var string @ORM\Column(name="Kat", type="string", length=50, nullable=true)
	 */
	private $kat;
	
	/**
	 *
	 * @var string @ORM\Column(name="Pr", type="string", length=50, nullable=true)
	 */
	private $pr;
	
	/**
	 *
	 * @var string @ORM\Column(name="Dost", type="string", length=50, nullable=true)
	 */
	private $dost;
	
	/**
	 *
	 * @var float @ORM\Column(name="Ce", type="float", precision=10, scale=0, nullable=true)
	 */
	private $ce;
	
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
}
