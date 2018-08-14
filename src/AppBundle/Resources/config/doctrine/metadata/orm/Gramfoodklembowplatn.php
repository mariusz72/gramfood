<?php
use Doctrine\ORM\Mapping as ORM;

/**
 * Gramfoodklembowplatn
 *
 * @ORM\Table(name="gramfoodklembowplatn")
 * @ORM\Entity
 */
class Gramfoodklembowplatn {
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
	 * @var string @ORM\Column(name="Ki", type="string", length=1, nullable=true)
	 */
	private $ki;
	
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
	 * @var string @ORM\Column(name="RFp", type="string", length=10, nullable=true)
	 */
	private $rfp;
	
	/**
	 *
	 * @var string @ORM\Column(name="IDd", type="string", length=50, nullable=true)
	 */
	private $idd;
	
	/**
	 *
	 * @var string @ORM\Column(name="RejD", type="string", length=50, nullable=true)
	 */
	private $rejd;
	
	/**
	 *
	 * @var string @ORM\Column(name="Fak", type="string", length=50, nullable=true)
	 */
	private $fak;
	
	/**
	 *
	 * @var string @ORM\Column(name="RFza", type="string", length=5, nullable=true)
	 */
	private $rfza;
	
	/**
	 *
	 * @var string @ORM\Column(name="IDza", type="string", length=50, nullable=true)
	 */
	private $idza;
	
	/**
	 *
	 * @var string @ORM\Column(name="Rejza", type="string", length=50, nullable=true)
	 */
	private $rejza;
	
	/**
	 *
	 * @var string @ORM\Column(name="Bank", type="string", length=50, nullable=true)
	 */
	private $bank;
	
	/**
	 *
	 * @var string @ORM\Column(name="BankN", type="string", length=50, nullable=true)
	 */
	private $bankn;
	
	/**
	 *
	 * @var string @ORM\Column(name="kBank", type="string", length=50, nullable=true)
	 */
	private $kbank;
	
	/**
	 *
	 * @var string @ORM\Column(name="kBankN", type="string", length=50, nullable=true)
	 */
	private $kbankn;
	
	/**
	 *
	 * @var string @ORM\Column(name="Alias", type="string", length=50, nullable=true)
	 */
	private $alias;
	
	/**
	 *
	 * @var string @ORM\Column(name="Nazw", type="string", length=150, nullable=true)
	 */
	private $nazw;
	
	/**
	 *
	 * @var string @ORM\Column(name="Nazw2", type="string", length=200, nullable=true)
	 */
	private $nazw2;
	
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
	 * @var string @ORM\Column(name="KodP", type="string", length=10, nullable=true)
	 */
	private $kodp;
	
	/**
	 *
	 * @var string @ORM\Column(name="RapK", type="string", length=50, nullable=true)
	 */
	private $rapk;
	
	/**
	 *
	 * @var string @ORM\Column(name="WP", type="string", length=1, nullable=true)
	 */
	private $wp;
	
	/**
	 *
	 * @var float @ORM\Column(name="Wart", type="float", precision=10, scale=0, nullable=true)
	 */
	private $wart;
	
	/**
	 *
	 * @var string @ORM\Column(name="Tytul", type="string", length=100, nullable=true)
	 */
	private $tytul;
	
	/**
	 *
	 * @var string @ORM\Column(name="Opis", type="string", length=250, nullable=true)
	 */
	private $opis;
	
	/**
	 *
	 * @var string @ORM\Column(name="Inf", type="text", length=16777215, nullable=true)
	 */
	private $inf;
	
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
	 * @var string @ORM\Column(name="IDk", type="string", length=50, nullable=true)
	 */
	private $idk;
	
	/**
	 *
	 * @var string @ORM\Column(name="Wal", type="string", length=10, nullable=true)
	 */
	private $wal;
	
	/**
	 *
	 * @var string @ORM\Column(name="Mc", type="string", length=10, nullable=true)
	 */
	private $mc;
	
	/**
	 *
	 * @var integer @ORM\Column(name="Defni", type="integer", nullable=true)
	 */
	private $defni;
}
