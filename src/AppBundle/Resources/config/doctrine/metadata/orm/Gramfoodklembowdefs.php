<?php
use Doctrine\ORM\Mapping as ORM;

/**
 * Gramfoodklembowdefs
 *
 * @ORM\Table(name="gramfoodklembowdefs")
 * @ORM\Entity
 */
class Gramfoodklembowdefs {
	/**
	 *
	 * @var string @ORM\Column(name="ID", type="string", length=50, nullable=false)
	 *      @ORM\Id
	 *      @ORM\GeneratedValue(strategy="IDENTITY")
	 */
	private $id;
	
	/**
	 *
	 * @var string @ORM\Column(name="Pole", type="string", length=50, nullable=true)
	 */
	private $pole;
	
	/**
	 *
	 * @var string @ORM\Column(name="Pole2", type="string", length=50, nullable=true)
	 */
	private $pole2;
	
	/**
	 *
	 * @var string @ORM\Column(name="Nazw", type="string", length=100, nullable=true)
	 */
	private $nazw;
	
	/**
	 *
	 * @var string @ORM\Column(name="Nazw2", type="string", length=250, nullable=true)
	 */
	private $nazw2;
	
	/**
	 *
	 * @var string @ORM\Column(name="Nazw3", type="string", length=100, nullable=true)
	 */
	private $nazw3;
	
	/**
	 *
	 * @var string @ORM\Column(name="Nazw4", type="text", length=16777215, nullable=true)
	 */
	private $nazw4;
	
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
	 * @var float @ORM\Column(name="F1", type="float", precision=10, scale=0, nullable=true)
	 */
	private $f1;
	
	/**
	 *
	 * @var float @ORM\Column(name="F2", type="float", precision=10, scale=0, nullable=true)
	 */
	private $f2;
	
	/**
	 *
	 * @var string @ORM\Column(name="Wsk", type="string", length=1, nullable=true)
	 */
	private $wsk;
	
	/**
	 *
	 * @var string @ORM\Column(name="Anul", type="string", length=1, nullable=true)
	 */
	private $anul;
	
	/**
	 *
	 * @var string @ORM\Column(name="Akt", type="string", length=1, nullable=true)
	 */
	private $akt;
	
	/**
	 *
	 * @var integer @ORM\Column(name="Wers", type="integer", nullable=true)
	 */
	private $wers;
	
	/**
	 *
	 * @var string @ORM\Column(name="DataL", type="string", length=50, nullable=true)
	 */
	private $datal;
}
