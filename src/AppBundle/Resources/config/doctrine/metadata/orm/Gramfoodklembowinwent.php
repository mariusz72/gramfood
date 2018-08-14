<?php
use Doctrine\ORM\Mapping as ORM;

/**
 * Gramfoodklembowinwent
 *
 * @ORM\Table(name="gramfoodklembowinwent")
 * @ORM\Entity
 */
class Gramfoodklembowinwent {
	/**
	 *
	 * @var string @ORM\Column(name="ID", type="string", length=50, nullable=false)
	 *      @ORM\Id
	 *      @ORM\GeneratedValue(strategy="IDENTITY")
	 */
	private $id;
	
	/**
	 *
	 * @var string @ORM\Column(name="DoID", type="string", length=50, nullable=true)
	 */
	private $doid;
	
	/**
	 *
	 * @var string @ORM\Column(name="Wsk", type="string", length=1, nullable=true)
	 */
	private $wsk;
	
	/**
	 *
	 * @var integer @ORM\Column(name="Ark", type="integer", nullable=true)
	 */
	private $ark;
	
	/**
	 *
	 * @var integer @ORM\Column(name="Poz", type="integer", nullable=true)
	 */
	private $poz;
	
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
	 * @var string @ORM\Column(name="Nazw", type="string", length=250, nullable=true)
	 */
	private $nazw;
	
	/**
	 *
	 * @var string @ORM\Column(name="JM", type="string", length=20, nullable=true)
	 */
	private $jm;
	
	/**
	 *
	 * @var float @ORM\Column(name="Ka", type="float", precision=10, scale=0, nullable=true)
	 */
	private $ka;
	
	/**
	 *
	 * @var float @ORM\Column(name="Sp", type="float", precision=10, scale=0, nullable=true)
	 */
	private $sp;
	
	/**
	 *
	 * @var float @ORM\Column(name="Ce", type="float", precision=10, scale=0, nullable=true)
	 */
	private $ce;
	
	/**
	 *
	 * @var string @ORM\Column(name="IDd", type="string", length=50, nullable=true)
	 */
	private $idd;
	
	/**
	 *
	 * @var string @ORM\Column(name="Rej", type="string", length=50, nullable=true)
	 */
	private $rej;
	
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
	 * @var string @ORM\Column(name="Gr", type="string", length=50, nullable=true)
	 */
	private $gr;
	
	/**
	 *
	 * @var string @ORM\Column(name="kk", type="string", length=250, nullable=true)
	 */
	private $kk;
	
	/**
	 *
	 * @var float @ORM\Column(name="oinw", type="float", precision=10, scale=0, nullable=true)
	 */
	private $oinw;
	
	/**
	 *
	 * @var float @ORM\Column(name="ooinw", type="float", precision=10, scale=0, nullable=true)
	 */
	private $ooinw;
	
	/**
	 *
	 * @var float @ORM\Column(name="CeB", type="float", precision=10, scale=0, nullable=true)
	 */
	private $ceb;
	
	/**
	 *
	 * @var string @ORM\Column(name="kat", type="string", length=50, nullable=true)
	 */
	private $kat;
	
	/**
	 *
	 * @var string @ORM\Column(name="lokm", type="string", length=50, nullable=true)
	 */
	private $lokm;
}
