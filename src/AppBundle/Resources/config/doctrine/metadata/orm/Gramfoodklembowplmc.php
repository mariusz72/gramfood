<?php
use Doctrine\ORM\Mapping as ORM;

/**
 * Gramfoodklembowplmc
 *
 * @ORM\Table(name="gramfoodklembowplmc")
 * @ORM\Entity
 */
class Gramfoodklembowplmc {
	/**
	 *
	 * @var string @ORM\Column(name="ID", type="string", length=50, nullable=false)
	 *      @ORM\Id
	 *      @ORM\GeneratedValue(strategy="IDENTITY")
	 */
	private $id;
	
	/**
	 *
	 * @var string @ORM\Column(name="UZ", type="string", length=50, nullable=true)
	 */
	private $uz;
	
	/**
	 *
	 * @var string @ORM\Column(name="IDk", type="string", length=50, nullable=true)
	 */
	private $idk;
	
	/**
	 *
	 * @var string @ORM\Column(name="IDp", type="string", length=50, nullable=true)
	 */
	private $idp;
	
	/**
	 *
	 * @var string @ORM\Column(name="IDw", type="string", length=50, nullable=true)
	 */
	private $idw;
	
	/**
	 *
	 * @var string @ORM\Column(name="Typ", type="string", length=1, nullable=true)
	 */
	private $typ;
	
	/**
	 *
	 * @var string @ORM\Column(name="Tgt", type="string", length=50, nullable=true)
	 */
	private $tgt;
	
	/**
	 *
	 * @var string @ORM\Column(name="Data", type="string", length=8, nullable=true)
	 */
	private $data;
	
	/**
	 *
	 * @var string @ORM\Column(name="Odgo", type="string", length=10, nullable=true)
	 */
	private $odgo;
	
	/**
	 *
	 * @var string @ORM\Column(name="Alias", type="string", length=50, nullable=true)
	 */
	private $alias;
	
	/**
	 *
	 * @var string @ORM\Column(name="NaIm", type="string", length=50, nullable=true)
	 */
	private $naim;
	
	/**
	 *
	 * @var string @ORM\Column(name="Mias", type="string", length=50, nullable=true)
	 */
	private $mias;
	
	/**
	 *
	 * @var string @ORM\Column(name="Ulic", type="string", length=50, nullable=true)
	 */
	private $ulic;
	
	/**
	 *
	 * @var string @ORM\Column(name="Prof", type="string", length=50, nullable=true)
	 */
	private $prof;
	
	/**
	 *
	 * @var string @ORM\Column(name="Notk", type="string", length=250, nullable=true)
	 */
	private $notk;
	
	/**
	 *
	 * @var string @ORM\Column(name="Ceg", type="string", length=50, nullable=true)
	 */
	private $ceg;
	
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
	 * @var string @ORM\Column(name="Datc", type="string", length=10, nullable=true)
	 */
	private $datc;
	
	/**
	 *
	 * @var string @ORM\Column(name="Tem", type="string", length=80, nullable=true)
	 */
	private $tem;
	
	/**
	 *
	 * @var string @ORM\Column(name="Profi", type="string", length=50, nullable=true)
	 */
	private $profi;
	
	/**
	 *
	 * @var string @ORM\Column(name="Os", type="string", length=50, nullable=true)
	 */
	private $os;
	
	/**
	 *
	 * @var string @ORM\Column(name="Kodp", type="string", length=10, nullable=true)
	 */
	private $kodp;
	
	/**
	 *
	 * @var string @ORM\Column(name="Nazw", type="string", length=150, nullable=true)
	 */
	private $nazw;
	
	/**
	 *
	 * @var string @ORM\Column(name="oss", type="text", length=16777215, nullable=true)
	 */
	private $oss;
}
