<?php
use Doctrine\ORM\Mapping as ORM;

/**
 * Gramfoodklembowzamsy
 *
 * @ORM\Table(name="gramfoodklembowzamsy")
 * @ORM\Entity
 */
class Gramfoodklembowzamsy {
	/**
	 *
	 * @var string @ORM\Column(name="ID", type="string", length=50, nullable=false)
	 *      @ORM\Id
	 *      @ORM\GeneratedValue(strategy="IDENTITY")
	 */
	private $id;
	
	/**
	 *
	 * @var string @ORM\Column(name="IDf", type="string", length=50, nullable=true)
	 */
	private $idf;
	
	/**
	 *
	 * @var string @ORM\Column(name="NrR", type="string", length=50, nullable=true)
	 */
	private $nrr;
	
	/**
	 *
	 * @var integer @ORM\Column(name="Poz", type="integer", nullable=true)
	 */
	private $poz;
	
	/**
	 *
	 * @var string @ORM\Column(name="Ro", type="string", length=1, nullable=true)
	 */
	private $ro;
	
	/**
	 *
	 * @var string @ORM\Column(name="Rodz", type="string", length=1, nullable=true)
	 */
	private $rodz;
	
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
	 * @var string @ORM\Column(name="Nazw", type="text", length=16777215, nullable=true)
	 */
	private $nazw;
	
	/**
	 *
	 * @var float @ORM\Column(name="il", type="float", precision=10, scale=0, nullable=true)
	 */
	private $il;
	
	/**
	 *
	 * @var string @ORM\Column(name="jm", type="string", length=10, nullable=true)
	 */
	private $jm;
	
	/**
	 *
	 * @var float @ORM\Column(name="CN", type="float", precision=10, scale=0, nullable=true)
	 */
	private $cn;
	
	/**
	 *
	 * @var float @ORM\Column(name="CB", type="float", precision=10, scale=0, nullable=true)
	 */
	private $cb;
	
	/**
	 *
	 * @var string @ORM\Column(name="NVat", type="string", length=10, nullable=true)
	 */
	private $nvat;
	
	/**
	 *
	 * @var integer @ORM\Column(name="VAT", type="integer", nullable=true)
	 */
	private $vat;
	
	/**
	 *
	 * @var float @ORM\Column(name="Cz", type="float", precision=10, scale=0, nullable=true)
	 */
	private $cz;
	
	/**
	 *
	 * @var float @ORM\Column(name="Cena", type="float", precision=10, scale=0, nullable=true)
	 */
	private $cena;
	
	/**
	 *
	 * @var string @ORM\Column(name="NB", type="string", length=1, nullable=true)
	 */
	private $nb;
	
	/**
	 *
	 * @var float @ORM\Column(name="PrRab", type="float", precision=10, scale=0, nullable=true)
	 */
	private $prrab;
	
	/**
	 *
	 * @var string @ORM\Column(name="Opis", type="text", length=16777215, nullable=true)
	 */
	private $opis;
	
	/**
	 *
	 * @var integer @ORM\Column(name="LOK", type="integer", nullable=true)
	 */
	private $lok;
	
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
	
	/**
	 *
	 * @var string @ORM\Column(name="DataL", type="string", length=50, nullable=true)
	 */
	private $datal;
	
	/**
	 *
	 * @var string @ORM\Column(name="zID", type="string", length=50, nullable=true)
	 */
	private $zid;
	
	/**
	 *
	 * @var float @ORM\Column(name="Kurs", type="float", precision=10, scale=0, nullable=true)
	 */
	private $kurs;
	
	/**
	 *
	 * @var string @ORM\Column(name="Wal", type="string", length=10, nullable=true)
	 */
	private $wal;
	
	/**
	 *
	 * @var string @ORM\Column(name="Zd", type="string", length=50, nullable=true)
	 */
	private $zd;
	
	/**
	 *
	 * @var string @ORM\Column(name="kat", type="string", length=50, nullable=true)
	 */
	private $kat;
	
	/**
	 *
	 * @var float @ORM\Column(name="Waga", type="float", precision=10, scale=0, nullable=true)
	 */
	private $waga;
	
	/**
	 *
	 * @var string @ORM\Column(name="Op1", type="string", length=50, nullable=true)
	 */
	private $op1;
	
	/**
	 *
	 * @var string @ORM\Column(name="Wa2", type="string", length=50, nullable=true)
	 */
	private $wa2;
	
	/**
	 *
	 * @var string @ORM\Column(name="Te", type="text", length=16777215, nullable=true)
	 */
	private $te;
	
	/**
	 *
	 * @var string @ORM\Column(name="Alias", type="string", length=50, nullable=true)
	 */
	private $alias;
	
	/**
	 *
	 * @var string @ORM\Column(name="RejZZ", type="string", length=50, nullable=true)
	 */
	private $rejzz;
	
	/**
	 *
	 * @var string @ORM\Column(name="RejZS", type="string", length=50, nullable=true)
	 */
	private $rejzs;
	
	/**
	 *
	 * @var string @ORM\Column(name="idZS", type="string", length=50, nullable=true)
	 */
	private $idzs;
	
	/**
	 *
	 * @var float @ORM\Column(name="Rea", type="float", precision=10, scale=0, nullable=true)
	 */
	private $rea;
	
	/**
	 *
	 * @var string @ORM\Column(name="etap", type="string", length=50, nullable=true)
	 */
	private $etap;
	
	/**
	 *
	 * @var string @ORM\Column(name="Pr", type="string", length=50, nullable=true)
	 */
	private $pr;
	
	/**
	 *
	 * @var string @ORM\Column(name="OW", type="string", length=50, nullable=true)
	 */
	private $ow;
	
	/**
	 *
	 * @var integer @ORM\Column(name="Stan", type="integer", nullable=true)
	 */
	private $stan;
	
	/**
	 *
	 * @var string @ORM\Column(name="idZZ", type="string", length=50, nullable=true)
	 */
	private $idzz;
	
	/**
	 *
	 * @var string @ORM\Column(name="idZA", type="string", length=50, nullable=true)
	 */
	private $idza;
	
	/**
	 *
	 * @var string @ORM\Column(name="RejZA", type="string", length=50, nullable=true)
	 */
	private $rejza;
	
	/**
	 *
	 * @var string @ORM\Column(name="idSP", type="string", length=50, nullable=true)
	 */
	private $idsp;
	
	/**
	 *
	 * @var string @ORM\Column(name="RejSP", type="string", length=50, nullable=true)
	 */
	private $rejsp;
	
	/**
	 *
	 * @var float @ORM\Column(name="cenab", type="float", precision=10, scale=0, nullable=true)
	 */
	private $cenab;
	
	/**
	 *
	 * @var string @ORM\Column(name="Doid", type="string", length=50, nullable=true)
	 */
	private $doid;
	
	/**
	 *
	 * @var integer @ORM\Column(name="StanR", type="integer", nullable=true)
	 */
	private $stanr;
	
	/**
	 *
	 * @var string @ORM\Column(name="DataR", type="string", length=20, nullable=true)
	 */
	private $datar;
}
