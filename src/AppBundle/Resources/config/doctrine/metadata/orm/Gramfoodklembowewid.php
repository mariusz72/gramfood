<?php
use Doctrine\ORM\Mapping as ORM;

/**
 * Gramfoodklembowewid
 *
 * @ORM\Table(name="gramfoodklembowewid")
 * @ORM\Entity
 */
class Gramfoodklembowewid {
	/**
	 *
	 * @var string @ORM\Column(name="IDe", type="string", length=150, nullable=false)
	 *      @ORM\Id
	 *      @ORM\GeneratedValue(strategy="IDENTITY")
	 */
	private $ide;
	
	/**
	 *
	 * @var string @ORM\Column(name="IDzzs", type="string", length=50, nullable=true)
	 */
	private $idzzs;
	
	/**
	 *
	 * @var string @ORM\Column(name="IDo", type="string", length=50, nullable=true)
	 */
	private $ido;
	
	/**
	 *
	 * @var string @ORM\Column(name="Alias", type="string", length=50, nullable=true)
	 */
	private $alias;
	
	/**
	 *
	 * @var string @ORM\Column(name="UZ", type="string", length=50, nullable=true)
	 */
	private $uz;
	
	/**
	 *
	 * @var string @ORM\Column(name="IDu", type="string", length=50, nullable=true)
	 */
	private $idu;
	
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
	 * @var string @ORM\Column(name="Ceg", type="string", length=50, nullable=true)
	 */
	private $ceg;
	
	/**
	 *
	 * @var string @ORM\Column(name="Kier", type="string", length=10, nullable=true)
	 */
	private $kier;
	
	/**
	 *
	 * @var string @ORM\Column(name="Ro", type="string", length=50, nullable=true)
	 */
	private $ro;
	
	/**
	 *
	 * @var string @ORM\Column(name="Co", type="string", length=240, nullable=true)
	 */
	private $co;
	
	/**
	 *
	 * @var string @ORM\Column(name="Nr", type="string", length=50, nullable=true)
	 */
	private $nr;
	
	/**
	 *
	 * @var string @ORM\Column(name="Data", type="string", length=8, nullable=true)
	 */
	private $data;
	
	/**
	 *
	 * @var integer @ORM\Column(name="il", type="integer", nullable=true)
	 */
	private $il;
	
	/**
	 *
	 * @var integer @ORM\Column(name="ik", type="integer", nullable=true)
	 */
	private $ik;
	
	/**
	 *
	 * @var integer @ORM\Column(name="iz", type="integer", nullable=true)
	 */
	private $iz;
	
	/**
	 *
	 * @var float @ORM\Column(name="ce", type="float", precision=10, scale=0, nullable=true)
	 */
	private $ce;
	
	/**
	 *
	 * @var string @ORM\Column(name="Okaz", type="string", length=240, nullable=true)
	 */
	private $okaz;
	
	/**
	 *
	 * @var string @ORM\Column(name="Fakt", type="string", length=50, nullable=true)
	 */
	private $fakt;
	
	/**
	 *
	 * @var string @ORM\Column(name="Opis", type="text", length=16777215, nullable=true)
	 */
	private $opis;
	
	/**
	 *
	 * @var string @ORM\Column(name="Str1", type="string", length=50, nullable=true)
	 */
	private $str1;
	
	/**
	 *
	 * @var string @ORM\Column(name="Str2", type="string", length=50, nullable=true)
	 */
	private $str2;
	
	/**
	 *
	 * @var string @ORM\Column(name="Str3", type="string", length=50, nullable=true)
	 */
	private $str3;
	
	/**
	 *
	 * @var string @ORM\Column(name="Str4", type="string", length=50, nullable=true)
	 */
	private $str4;
	
	/**
	 *
	 * @var string @ORM\Column(name="Str5", type="string", length=50, nullable=true)
	 */
	private $str5;
	
	/**
	 *
	 * @var string @ORM\Column(name="Str6", type="string", length=50, nullable=true)
	 */
	private $str6;
	
	/**
	 *
	 * @var string @ORM\Column(name="Str7", type="string", length=50, nullable=true)
	 */
	private $str7;
	
	/**
	 *
	 * @var string @ORM\Column(name="Pacz", type="string", length=50, nullable=true)
	 */
	private $pacz;
	
	/**
	 *
	 * @var string @ORM\Column(name="NA", type="string", length=1, nullable=true)
	 */
	private $na;
	
	/**
	 *
	 * @var string @ORM\Column(name="Profi", type="string", length=50, nullable=true)
	 */
	private $profi;
	
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
	 * @var integer @ORM\Column(name="N3", type="integer", nullable=true)
	 */
	private $n3;
	
	/**
	 *
	 * @var integer @ORM\Column(name="N4", type="integer", nullable=true)
	 */
	private $n4;
	
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
