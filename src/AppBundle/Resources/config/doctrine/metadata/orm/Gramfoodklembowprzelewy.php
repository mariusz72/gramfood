<?php
use Doctrine\ORM\Mapping as ORM;

/**
 * Gramfoodklembowprzelewy
 *
 * @ORM\Table(name="gramfoodklembowprzelewy")
 * @ORM\Entity
 */
class Gramfoodklembowprzelewy {
	/**
	 *
	 * @var string @ORM\Column(name="ID", type="string", length=50, nullable=false)
	 *      @ORM\Id
	 *      @ORM\GeneratedValue(strategy="IDENTITY")
	 */
	private $id;
	
	/**
	 *
	 * @var string @ORM\Column(name="Kier", type="string", length=10, nullable=true)
	 */
	private $kier;
	
	/**
	 *
	 * @var string @ORM\Column(name="Typ", type="string", length=10, nullable=true)
	 */
	private $typ;
	
	/**
	 *
	 * @var string @ORM\Column(name="IDk", type="string", length=50, nullable=true)
	 */
	private $idk;
	
	/**
	 *
	 * @var string @ORM\Column(name="Alias", type="string", length=50, nullable=true)
	 */
	private $alias;
	
	/**
	 *
	 * @var string @ORM\Column(name="Data", type="string", length=20, nullable=true)
	 */
	private $data;
	
	/**
	 *
	 * @var string @ORM\Column(name="O1", type="string", length=90, nullable=true)
	 */
	private $o1;
	
	/**
	 *
	 * @var string @ORM\Column(name="O2", type="string", length=90, nullable=true)
	 */
	private $o2;
	
	/**
	 *
	 * @var string @ORM\Column(name="Ko", type="string", length=50, nullable=true)
	 */
	private $ko;
	
	/**
	 *
	 * @var string @ORM\Column(name="Bo", type="string", length=50, nullable=true)
	 */
	private $bo;
	
	/**
	 *
	 * @var string @ORM\Column(name="Z1", type="string", length=90, nullable=true)
	 */
	private $z1;
	
	/**
	 *
	 * @var string @ORM\Column(name="Z2", type="string", length=90, nullable=true)
	 */
	private $z2;
	
	/**
	 *
	 * @var string @ORM\Column(name="Kz", type="string", length=50, nullable=true)
	 */
	private $kz;
	
	/**
	 *
	 * @var string @ORM\Column(name="Bz", type="string", length=50, nullable=true)
	 */
	private $bz;
	
	/**
	 *
	 * @var string @ORM\Column(name="Tyt", type="string", length=90, nullable=true)
	 */
	private $tyt;
	
	/**
	 *
	 * @var string @ORM\Column(name="Tyt2", type="string", length=90, nullable=true)
	 */
	private $tyt2;
	
	/**
	 *
	 * @var float @ORM\Column(name="Wart", type="float", precision=10, scale=0, nullable=true)
	 */
	private $wart;
	
	/**
	 *
	 * @var string @ORM\Column(name="Wal", type="string", length=10, nullable=true)
	 */
	private $wal;
	
	/**
	 *
	 * @var string @ORM\Column(name="zID", type="string", length=50, nullable=true)
	 */
	private $zid;
	
	/**
	 *
	 * @var string @ORM\Column(name="UZ", type="string", length=50, nullable=true)
	 */
	private $uz;
	
	/**
	 *
	 * @var integer @ORM\Column(name="LOK", type="integer", nullable=true)
	 */
	private $lok;
	
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
