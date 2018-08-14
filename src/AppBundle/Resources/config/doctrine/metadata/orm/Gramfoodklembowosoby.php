<?php
use Doctrine\ORM\Mapping as ORM;

/**
 * Gramfoodklembowosoby
 *
 * @ORM\Table(name="gramfoodklembowosoby")
 * @ORM\Entity
 */
class Gramfoodklembowosoby {
	/**
	 *
	 * @var string @ORM\Column(name="ID", type="string", length=50, nullable=false)
	 *      @ORM\Id
	 *      @ORM\GeneratedValue(strategy="IDENTITY")
	 */
	private $id;
	
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
	 * @var string @ORM\Column(name="Imie", type="string", length=50, nullable=true)
	 */
	private $imie;
	
	/**
	 *
	 * @var string @ORM\Column(name="Nazw", type="string", length=50, nullable=true)
	 */
	private $nazw;
	
	/**
	 *
	 * @var string @ORM\Column(name="Ulic", type="string", length=50, nullable=true)
	 */
	private $ulic;
	
	/**
	 *
	 * @var string @ORM\Column(name="kodP", type="string", length=20, nullable=true)
	 */
	private $kodp;
	
	/**
	 *
	 * @var string @ORM\Column(name="Mias", type="string", length=50, nullable=true)
	 */
	private $mias;
	
	/**
	 *
	 * @var string @ORM\Column(name="Gr", type="string", length=50, nullable=true)
	 */
	private $gr;
	
	/**
	 *
	 * @var string @ORM\Column(name="Gro", type="string", length=50, nullable=true)
	 */
	private $gro;
	
	/**
	 *
	 * @var string @ORM\Column(name="Sta", type="string", length=50, nullable=true)
	 */
	private $sta;
	
	/**
	 *
	 * @var string @ORM\Column(name="Spe", type="string", length=50, nullable=true)
	 */
	private $spe;
	
	/**
	 *
	 * @var string @ORM\Column(name="Odd", type="string", length=50, nullable=true)
	 */
	private $odd;
	
	/**
	 *
	 * @var string @ORM\Column(name="T1", type="string", length=50, nullable=true)
	 */
	private $t1;
	
	/**
	 *
	 * @var string @ORM\Column(name="T2", type="string", length=50, nullable=true)
	 */
	private $t2;
	
	/**
	 *
	 * @var string @ORM\Column(name="Mail", type="string", length=50, nullable=true)
	 */
	private $mail;
	
	/**
	 *
	 * @var string @ORM\Column(name="GG", type="string", length=50, nullable=true)
	 */
	private $gg;
	
	/**
	 *
	 * @var string @ORM\Column(name="LastW", type="string", length=50, nullable=true)
	 */
	private $lastw;
	
	/**
	 *
	 * @var string @ORM\Column(name="DatNW", type="string", length=50, nullable=true)
	 */
	private $datnw;
	
	/**
	 *
	 * @var string @ORM\Column(name="Dom", type="string", length=1, nullable=true)
	 */
	private $dom;
	
	/**
	 *
	 * @var string @ORM\Column(name="Opis", type="string", length=250, nullable=true)
	 */
	private $opis;
	
	/**
	 *
	 * @var string @ORM\Column(name="Ceg", type="string", length=50, nullable=true)
	 */
	private $ceg;
	
	/**
	 *
	 * @var string @ORM\Column(name="Ks", type="string", length=250, nullable=true)
	 */
	private $ks;
	
	/**
	 *
	 * @var string @ORM\Column(name="Zglo", type="string", length=50, nullable=true)
	 */
	private $zglo;
	
	/**
	 *
	 * @var integer @ORM\Column(name="Lok", type="integer", nullable=true)
	 */
	private $lok;
	
	/**
	 *
	 * @var string @ORM\Column(name="UZ", type="string", length=50, nullable=true)
	 */
	private $uz;
	
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
	 * @var string @ORM\Column(name="OW", type="string", length=50, nullable=true)
	 */
	private $ow;
	
	/**
	 *
	 * @var string @ORM\Column(name="Kat", type="string", length=20, nullable=true)
	 */
	private $kat;
}
