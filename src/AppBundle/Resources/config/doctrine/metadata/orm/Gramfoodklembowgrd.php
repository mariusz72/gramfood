<?php
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
}
