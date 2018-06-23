<?php
use Doctrine\ORM\Mapping as ORM;

/**
 * Gramfoodklembowuzyt
 *
 * @ORM\Table(name="gramfoodklembowuzyt")
 * @ORM\Entity
 */
class Gramfoodklembowuzyt {
	/**
	 *
	 * @var string @ORM\Column(name="ID", type="string", length=50, nullable=false)
	 *      @ORM\Id
	 *      @ORM\GeneratedValue(strategy="IDENTITY")
	 */
	private $id;
	
	/**
	 *
	 * @var string @ORM\Column(name="Alias", type="string", length=50, nullable=true)
	 */
	private $alias;
	
	/**
	 *
	 * @var string @ORM\Column(name="Hasl", type="string", length=50, nullable=true)
	 */
	private $hasl;
	
	/**
	 *
	 * @var string @ORM\Column(name="Imie", type="string", length=100, nullable=true)
	 */
	private $imie;
	
	/**
	 *
	 * @var string @ORM\Column(name="Nazw", type="string", length=100, nullable=true)
	 */
	private $nazw;
	
	/**
	 *
	 * @var string @ORM\Column(name="UP", type="string", length=1, nullable=true)
	 */
	private $up;
	
	/**
	 *
	 * @var string @ORM\Column(name="dok", type="string", length=10, nullable=true)
	 */
	private $dok;
	
	/**
	 *
	 * @var string @ORM\Column(name="Prawa", type="text", length=16777215, nullable=true)
	 */
	private $prawa;
	
	/**
	 *
	 * @var string @ORM\Column(name="Doku", type="text", length=16777215, nullable=true)
	 */
	private $doku;
	
	/**
	 *
	 * @var string @ORM\Column(name="NA", type="string", length=1, nullable=true)
	 */
	private $na;
	
	/**
	 *
	 * @var string @ORM\Column(name="TU", type="string", length=1, nullable=true)
	 */
	private $tu;
	
	/**
	 *
	 * @var string @ORM\Column(name="Mail", type="string", length=50, nullable=true)
	 */
	private $mail;
	
	/**
	 *
	 * @var string @ORM\Column(name="T1", type="string", length=50, nullable=true)
	 */
	private $t1;
	
	/**
	 *
	 * @var string @ORM\Column(name="GG", type="string", length=50, nullable=true)
	 */
	private $gg;
	
	/**
	 *
	 * @var string @ORM\Column(name="Ul", type="string", length=50, nullable=true)
	 */
	private $ul;
	
	/**
	 *
	 * @var string @ORM\Column(name="Mi", type="string", length=50, nullable=true)
	 */
	private $mi;
	
	/**
	 *
	 * @var string @ORM\Column(name="Ko", type="string", length=50, nullable=true)
	 */
	private $ko;
	
	/**
	 *
	 * @var string @ORM\Column(name="Prof", type="string", length=50, nullable=true)
	 */
	private $prof;
	
	/**
	 *
	 * @var string @ORM\Column(name="AliasD", type="string", length=50, nullable=true)
	 */
	private $aliasd;
	
	/**
	 *
	 * @var string @ORM\Column(name="IDD", type="string", length=50, nullable=true)
	 */
	private $idd;
	
	/**
	 *
	 * @var string @ORM\Column(name="info", type="text", length=16777215, nullable=true)
	 */
	private $info;
	
	/**
	 *
	 * @var integer @ORM\Column(name="Lok", type="integer", nullable=true)
	 */
	private $lok;
	
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
	 * @var float @ORM\Column(name="KwZat", type="float", precision=10, scale=0, nullable=true)
	 */
	private $kwzat;
	
	/**
	 *
	 * @var integer @ORM\Column(name="kol", type="integer", nullable=true)
	 */
	private $kol;
}
