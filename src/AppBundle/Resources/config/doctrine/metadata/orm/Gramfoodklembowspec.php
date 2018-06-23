<?php
use Doctrine\ORM\Mapping as ORM;

/**
 * Gramfoodklembowspec
 *
 * @ORM\Table(name="gramfoodklembowspec")
 * @ORM\Entity
 */
class Gramfoodklembowspec {
	/**
	 *
	 * @var string @ORM\Column(name="ID", type="string", length=50, nullable=false)
	 *      @ORM\Id
	 *      @ORM\GeneratedValue(strategy="IDENTITY")
	 */
	private $id;
	
	/**
	 *
	 * @var string @ORM\Column(name="Typ", type="string", length=10, nullable=true)
	 */
	private $typ;
	
	/**
	 *
	 * @var string @ORM\Column(name="TU", type="string", length=10, nullable=true)
	 */
	private $tu;
	
	/**
	 *
	 * @var string @ORM\Column(name="PR", type="string", length=1, nullable=true)
	 */
	private $pr;
	
	/**
	 *
	 * @var integer @ORM\Column(name="Poz", type="integer", nullable=true)
	 */
	private $poz;
	
	/**
	 *
	 * @var string @ORM\Column(name="NrR", type="string", length=50, nullable=true)
	 */
	private $nrr;
	
	/**
	 *
	 * @var string @ORM\Column(name="IDf", type="string", length=50, nullable=true)
	 */
	private $idf;
	
	/**
	 *
	 * @var string @ORM\Column(name="IDwz", type="string", length=50, nullable=true)
	 */
	private $idwz;
	
	/**
	 *
	 * @var string @ORM\Column(name="IDpar", type="string", length=50, nullable=true)
	 */
	private $idpar;
	
	/**
	 *
	 * @var string @ORM\Column(name="IDzl", type="string", length=50, nullable=true)
	 */
	private $idzl;
	
	/**
	 *
	 * @var string @ORM\Column(name="IDpz", type="string", length=50, nullable=true)
	 */
	private $idpz;
	
	/**
	 *
	 * @var string @ORM\Column(name="Data", type="string", length=50, nullable=true)
	 */
	private $data;
	
	/**
	 *
	 * @var string @ORM\Column(name="Alias", type="string", length=50, nullable=true)
	 */
	private $alias;
	
	/**
	 *
	 * @var string @ORM\Column(name="Mag", type="string", length=50, nullable=true)
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
	 * @var string @ORM\Column(name="JM", type="string", length=20, nullable=true)
	 */
	private $jm;
	
	/**
	 *
	 * @var float @ORM\Column(name="il", type="float", precision=10, scale=0, nullable=true)
	 */
	private $il;
	
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
	 * @var float @ORM\Column(name="Cena", type="float", precision=10, scale=0, nullable=true)
	 */
	private $cena;
	
	/**
	 *
	 * @var float @ORM\Column(name="Cz", type="float", precision=10, scale=0, nullable=true)
	 */
	private $cz;
	
	/**
	 *
	 * @var string @ORM\Column(name="NB", type="string", length=1, nullable=true)
	 */
	private $nb;
	
	/**
	 *
	 * @var string @ORM\Column(name="NVat", type="string", length=20, nullable=true)
	 */
	private $nvat;
	
	/**
	 *
	 * @var float @ORM\Column(name="VAT", type="float", precision=10, scale=0, nullable=true)
	 */
	private $vat;
	
	/**
	 *
	 * @var integer @ORM\Column(name="stVAT", type="integer", nullable=true)
	 */
	private $stvat;
	
	/**
	 *
	 * @var float @ORM\Column(name="PrRab", type="float", precision=10, scale=0, nullable=true)
	 */
	private $prrab;
	
	/**
	 *
	 * @var string @ORM\Column(name="PKW", type="string", length=100, nullable=true)
	 */
	private $pkw;
	
	/**
	 *
	 * @var string @ORM\Column(name="Kat", type="string", length=50, nullable=true)
	 */
	private $kat;
	
	/**
	 *
	 * @var string @ORM\Column(name="Gr", type="string", length=50, nullable=true)
	 */
	private $gr;
	
	/**
	 *
	 * @var string @ORM\Column(name="Wal", type="string", length=10, nullable=true)
	 */
	private $wal;
	
	/**
	 *
	 * @var float @ORM\Column(name="kurs", type="float", precision=10, scale=0, nullable=true)
	 */
	private $kurs;
	
	/**
	 *
	 * @var integer @ORM\Column(name="przel", type="integer", nullable=true)
	 */
	private $przel;
	
	/**
	 *
	 * @var string @ORM\Column(name="KA", type="string", length=1, nullable=true)
	 */
	private $ka;
	
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
	 * @var string @ORM\Column(name="Op2", type="string", length=50, nullable=true)
	 */
	private $op2;
	
	/**
	 *
	 * @var string @ORM\Column(name="Wa1", type="string", length=50, nullable=true)
	 */
	private $wa1;
	
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
	 * @var string @ORM\Column(name="RejKo", type="string", length=50, nullable=true)
	 */
	private $rejko;
	
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
	 * @var string @ORM\Column(name="dwaz", type="string", length=50, nullable=true)
	 */
	private $dwaz;
	
	/**
	 *
	 * @var string @ORM\Column(name="sn", type="text", length=16777215, nullable=true)
	 */
	private $sn;
	
	/**
	 *
	 * @var string @ORM\Column(name="IDt", type="string", length=50, nullable=true)
	 */
	private $idt;
	
	/**
	 *
	 * @var string @ORM\Column(name="Nazwk", type="string", length=80, nullable=true)
	 */
	private $nazwk;
	
	/**
	 *
	 * @var float @ORM\Column(name="ro", type="float", precision=10, scale=0, nullable=true)
	 */
	private $ro;
	
	/**
	 *
	 * @var string @ORM\Column(name="rejpz", type="string", length=50, nullable=true)
	 */
	private $rejpz;
	
	/**
	 *
	 * @var string @ORM\Column(name="zpz", type="string", length=50, nullable=true)
	 */
	private $zpz;
	
	/**
	 *
	 * @var float @ORM\Column(name="cenab", type="float", precision=10, scale=0, nullable=true)
	 */
	private $cenab;
	
	/**
	 *
	 * @var string @ORM\Column(name="dsp", type="string", length=8, nullable=true)
	 */
	private $dsp;
}
