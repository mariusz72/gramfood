<?php
use Doctrine\ORM\Mapping as ORM;

/**
 * Gramfoodklembowwizyty
 *
 * @ORM\Table(name="gramfoodklembowwizyty")
 * @ORM\Entity
 */
class Gramfoodklembowwizyty {
	/**
	 *
	 * @var string @ORM\Column(name="IDw", type="string", length=50, nullable=false)
	 *      @ORM\Id
	 *      @ORM\GeneratedValue(strategy="IDENTITY")
	 */
	private $idw;
	
	/**
	 *
	 * @var string @ORM\Column(name="IDo", type="string", length=50, nullable=true)
	 */
	private $ido;
	
	/**
	 *
	 * @var string @ORM\Column(name="IDu", type="string", length=50, nullable=true)
	 */
	private $idu;
	
	/**
	 *
	 * @var string @ORM\Column(name="IDf", type="string", length=50, nullable=true)
	 */
	private $idf;
	
	/**
	 *
	 * @var string @ORM\Column(name="zID", type="string", length=50, nullable=true)
	 */
	private $zid;
	
	/**
	 *
	 * @var string @ORM\Column(name="Aliask", type="string", length=50, nullable=true)
	 */
	private $aliask;
	
	/**
	 *
	 * @var string @ORM\Column(name="Aliasf", type="string", length=50, nullable=true)
	 */
	private $aliasf;
	
	/**
	 *
	 * @var string @ORM\Column(name="Dwiz", type="string", length=14, nullable=true)
	 */
	private $dwiz;
	
	/**
	 *
	 * @var string @ORM\Column(name="Dzap", type="string", length=20, nullable=true)
	 */
	private $dzap;
	
	/**
	 *
	 * @var string @ORM\Column(name="Rodz", type="string", length=50, nullable=true)
	 */
	private $rodz;
	
	/**
	 *
	 * @var string @ORM\Column(name="Ktor", type="string", length=50, nullable=true)
	 */
	private $ktor;
	
	/**
	 *
	 * @var integer @ORM\Column(name="Czas", type="integer", nullable=true)
	 */
	private $czas;
	
	/**
	 *
	 * @var string @ORM\Column(name="Opis", type="text", length=16777215, nullable=true)
	 */
	private $opis;
	
	/**
	 *
	 * @var string @ORM\Column(name="Profi", type="string", length=50, nullable=true)
	 */
	private $profi;
	
	/**
	 *
	 * @var string @ORM\Column(name="Ceg", type="string", length=50, nullable=true)
	 */
	private $ceg;
	
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
	 * @var string @ORM\Column(name="Imik", type="string", length=50, nullable=true)
	 */
	private $imik;
	
	/**
	 *
	 * @var string @ORM\Column(name="Nazk", type="string", length=50, nullable=true)
	 */
	private $nazk;
	
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
	 * @var string @ORM\Column(name="Kodp", type="string", length=10, nullable=true)
	 */
	private $kodp;
	
	/**
	 *
	 * @var string @ORM\Column(name="Kat", type="string", length=10, nullable=true)
	 */
	private $kat;
	
	/**
	 *
	 * @var string @ORM\Column(name="Pot", type="string", length=10, nullable=true)
	 */
	private $pot;
	
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
	 * @var string @ORM\Column(name="Typa", type="string", length=150, nullable=true)
	 */
	private $typa;
	
	/**
	 *
	 * @var string @ORM\Column(name="Prep", type="string", length=150, nullable=true)
	 */
	private $prep;
	
	/**
	 *
	 * @var string @ORM\Column(name="Wska", type="string", length=150, nullable=true)
	 */
	private $wska;
	
	/**
	 *
	 * @var string @ORM\Column(name="IDt", type="string", length=50, nullable=true)
	 */
	private $idt;
	
	/**
	 *
	 * @var string @ORM\Column(name="IDt2", type="string", length=50, nullable=true)
	 */
	private $idt2;
	
	/**
	 *
	 * @var string @ORM\Column(name="IDt3", type="string", length=50, nullable=true)
	 */
	private $idt3;
	
	/**
	 *
	 * @var string @ORM\Column(name="IDt4", type="string", length=50, nullable=true)
	 */
	private $idt4;
	
	/**
	 *
	 * @var string @ORM\Column(name="Typa2", type="string", length=50, nullable=true)
	 */
	private $typa2;
	
	/**
	 *
	 * @var string @ORM\Column(name="Prep2", type="string", length=50, nullable=true)
	 */
	private $prep2;
	
	/**
	 *
	 * @var string @ORM\Column(name="Wska2", type="string", length=50, nullable=true)
	 */
	private $wska2;
	
	/**
	 *
	 * @var string @ORM\Column(name="Typa3", type="string", length=50, nullable=true)
	 */
	private $typa3;
	
	/**
	 *
	 * @var string @ORM\Column(name="Prep3", type="string", length=50, nullable=true)
	 */
	private $prep3;
	
	/**
	 *
	 * @var string @ORM\Column(name="Wska3", type="string", length=50, nullable=true)
	 */
	private $wska3;
	
	/**
	 *
	 * @var string @ORM\Column(name="Typa4", type="string", length=50, nullable=true)
	 */
	private $typa4;
	
	/**
	 *
	 * @var string @ORM\Column(name="Prep4", type="string", length=50, nullable=true)
	 */
	private $prep4;
	
	/**
	 *
	 * @var string @ORM\Column(name="Wska4", type="string", length=50, nullable=true)
	 */
	private $wska4;
	
	/**
	 *
	 * @var string @ORM\Column(name="Datc", type="string", length=20, nullable=true)
	 */
	private $datc;
	
	/**
	 *
	 * @var string @ORM\Column(name="Odgo", type="string", length=5, nullable=true)
	 */
	private $odgo;
	
	/**
	 *
	 * @var string @ORM\Column(name="Dogo", type="string", length=5, nullable=true)
	 */
	private $dogo;
	
	/**
	 *
	 * @var integer @ORM\Column(name="Frek", type="integer", nullable=true)
	 */
	private $frek;
	
	/**
	 *
	 * @var string @ORM\Column(name="Datnw", type="string", length=20, nullable=true)
	 */
	private $datnw;
	
	/**
	 *
	 * @var string @ORM\Column(name="NA", type="string", length=10, nullable=true)
	 */
	private $na;
	
	/**
	 *
	 * @var string @ORM\Column(name="IDpl", type="string", length=50, nullable=true)
	 */
	private $idpl;
	
	/**
	 *
	 * @var string @ORM\Column(name="Ceg2", type="string", length=50, nullable=true)
	 */
	private $ceg2;
	
	/**
	 *
	 * @var string @ORM\Column(name="Cel", type="text", length=16777215, nullable=true)
	 */
	private $cel;
	
	/**
	 *
	 * @var string @ORM\Column(name="UZ", type="string", length=50, nullable=true)
	 */
	private $uz;
	
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
