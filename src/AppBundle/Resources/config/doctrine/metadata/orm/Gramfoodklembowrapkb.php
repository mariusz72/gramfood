<?php
use Doctrine\ORM\Mapping as ORM;

/**
 * Gramfoodklembowrapkb
 *
 * @ORM\Table(name="gramfoodklembowrapkb")
 * @ORM\Entity
 */
class Gramfoodklembowrapkb {
	/**
	 *
	 * @var string @ORM\Column(name="ID", type="string", length=50, nullable=false)
	 *      @ORM\Id
	 *      @ORM\GeneratedValue(strategy="IDENTITY")
	 */
	private $id;
	
	/**
	 *
	 * @var string @ORM\Column(name="KB", type="string", length=1, nullable=true)
	 */
	private $kb;
	
	/**
	 *
	 * @var string @ORM\Column(name="Wsk", type="string", length=5, nullable=true)
	 */
	private $wsk;
	
	/**
	 *
	 * @var string @ORM\Column(name="NrR", type="string", length=50, nullable=true)
	 */
	private $nrr;
	
	/**
	 *
	 * @var string @ORM\Column(name="Rej", type="string", length=10, nullable=true)
	 */
	private $rej;
	
	/**
	 *
	 * @var string @ORM\Column(name="Rok", type="string", length=4, nullable=true)
	 */
	private $rok;
	
	/**
	 *
	 * @var integer @ORM\Column(name="Nr", type="integer", nullable=true)
	 */
	private $nr;
	
	/**
	 *
	 * @var string @ORM\Column(name="Data", type="string", length=8, nullable=true)
	 */
	private $data;
	
	/**
	 *
	 * @var string @ORM\Column(name="DataK", type="string", length=8, nullable=true)
	 */
	private $datak;
	
	/**
	 *
	 * @var string @ORM\Column(name="Ko", type="string", length=50, nullable=true)
	 */
	private $ko;
	
	/**
	 *
	 * @var string @ORM\Column(name="Str1", type="string", length=50, nullable=true)
	 */
	private $str1;
	
	/**
	 *
	 * @var float @ORM\Column(name="Sp", type="float", precision=10, scale=0, nullable=true)
	 */
	private $sp;
	
	/**
	 *
	 * @var float @ORM\Column(name="Wp", type="float", precision=10, scale=0, nullable=true)
	 */
	private $wp;
	
	/**
	 *
	 * @var float @ORM\Column(name="Wy", type="float", precision=10, scale=0, nullable=true)
	 */
	private $wy;
	
	/**
	 *
	 * @var string @ORM\Column(name="UZ", type="string", length=50, nullable=true)
	 */
	private $uz;
	
	/**
	 *
	 * @var integer @ORM\Column(name="Lok", type="integer", nullable=true)
	 */
	private $lok;
	
	/**
	 *
	 * @var string @ORM\Column(name="Wal", type="string", length=10, nullable=true)
	 */
	private $wal;
	
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
	 * @var string @ORM\Column(name="Mc", type="string", length=10, nullable=true)
	 */
	private $mc;
}
