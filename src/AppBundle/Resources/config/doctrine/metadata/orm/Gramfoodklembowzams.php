<?php
use Doctrine\ORM\Mapping as ORM;

/**
 * Gramfoodklembowzams
 *
 * @ORM\Table(name="gramfoodklembowzams")
 * @ORM\Entity
 */
class Gramfoodklembowzams {
	/**
	 *
	 * @var string @ORM\Column(name="ID", type="string", length=50, nullable=false)
	 *      @ORM\Id
	 *      @ORM\GeneratedValue(strategy="IDENTITY")
	 */
	private $id;
	
	/**
	 *
	 * @var string @ORM\Column(name="Ro", type="string", length=1, nullable=true)
	 */
	private $ro;
	
	/**
	 *
	 * @var integer @ORM\Column(name="Stan", type="integer", nullable=true)
	 */
	private $stan;
	
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
	 * @var string @ORM\Column(name="NIP", type="string", length=50, nullable=true)
	 */
	private $nip;
	
	/**
	 *
	 * @var integer @ORM\Column(name="Nr", type="integer", nullable=true)
	 */
	private $nr;
	
	/**
	 *
	 * @var string @ORM\Column(name="Rej", type="string", length=50, nullable=true)
	 */
	private $rej;
	
	/**
	 *
	 * @var string @ORM\Column(name="Rok", type="string", length=50, nullable=true)
	 */
	private $rok;
	
	/**
	 *
	 * @var string @ORM\Column(name="Mc", type="string", length=20, nullable=true)
	 */
	private $mc;
	
	/**
	 *
	 * @var string @ORM\Column(name="NrR", type="string", length=50, nullable=true)
	 */
	private $nrr;
	
	/**
	 *
	 * @var string @ORM\Column(name="DWy", type="string", length=50, nullable=true)
	 */
	private $dwy;
	
	/**
	 *
	 * @var string @ORM\Column(name="Data", type="string", length=20, nullable=true)
	 */
	private $data;
	
	/**
	 *
	 * @var float @ORM\Column(name="N0", type="float", precision=10, scale=0, nullable=true)
	 */
	private $n0;
	
	/**
	 *
	 * @var float @ORM\Column(name="Wart", type="float", precision=10, scale=0, nullable=true)
	 */
	private $wart;
	
	/**
	 *
	 * @var string @ORM\Column(name="NB", type="string", length=1, nullable=true)
	 */
	private $nb;
	
	/**
	 *
	 * @var float @ORM\Column(name="WWart", type="float", precision=10, scale=0, nullable=true)
	 */
	private $wwart;
	
	/**
	 *
	 * @var string @ORM\Column(name="Wal", type="string", length=10, nullable=true)
	 */
	private $wal;
	
	/**
	 *
	 * @var float @ORM\Column(name="Kurs", type="float", precision=10, scale=0, nullable=true)
	 */
	private $kurs;
	
	/**
	 *
	 * @var integer @ORM\Column(name="przel", type="integer", nullable=true)
	 */
	private $przel;
	
	/**
	 *
	 * @var float @ORM\Column(name="N0r", type="float", precision=10, scale=0, nullable=true)
	 */
	private $n0r;
	
	/**
	 *
	 * @var float @ORM\Column(name="Wartr", type="float", precision=10, scale=0, nullable=true)
	 */
	private $wartr;
	
	/**
	 *
	 * @var string @ORM\Column(name="Os", type="string", length=50, nullable=true)
	 */
	private $os;
	
	/**
	 *
	 * @var string @ORM\Column(name="nazw", type="string", length=250, nullable=true)
	 */
	private $nazw;
	
	/**
	 *
	 * @var string @ORM\Column(name="Nazw2", type="string", length=240, nullable=true)
	 */
	private $nazw2;
	
	/**
	 *
	 * @var string @ORM\Column(name="KodP", type="string", length=50, nullable=true)
	 */
	private $kodp;
	
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
	 * @var string @ORM\Column(name="T1", type="string", length=50, nullable=true)
	 */
	private $t1;
	
	/**
	 *
	 * @var string @ORM\Column(name="Mail", type="string", length=100, nullable=true)
	 */
	private $mail;
	
	/**
	 *
	 * @var float @ORM\Column(name="PrRab", type="float", precision=10, scale=0, nullable=true)
	 */
	private $prrab;
	
	/**
	 *
	 * @var string @ORM\Column(name="Fak", type="string", length=40, nullable=true)
	 */
	private $fak;
	
	/**
	 *
	 * @var string @ORM\Column(name="Dfak", type="string", length=35, nullable=true)
	 */
	private $dfak;
	
	/**
	 *
	 * @var string @ORM\Column(name="FakZ", type="string", length=40, nullable=true)
	 */
	private $fakz;
	
	/**
	 *
	 * @var string @ORM\Column(name="DFakZ", type="string", length=20, nullable=true)
	 */
	private $dfakz;
	
	/**
	 *
	 * @var string @ORM\Column(name="Prz", type="string", length=150, nullable=true)
	 */
	private $prz;
	
	/**
	 *
	 * @var string @ORM\Column(name="Opis", type="text", length=16777215, nullable=true)
	 */
	private $opis;
	
	/**
	 *
	 * @var string @ORM\Column(name="Term", type="text", length=16777215, nullable=true)
	 */
	private $term;
	
	/**
	 *
	 * @var string @ORM\Column(name="Plat", type="text", length=16777215, nullable=true)
	 */
	private $plat;
	
	/**
	 *
	 * @var string @ORM\Column(name="Tekst", type="text", length=16777215, nullable=true)
	 */
	private $tekst;
	
	/**
	 *
	 * @var string @ORM\Column(name="Notk", type="text", length=16777215, nullable=true)
	 */
	private $notk;
	
	/**
	 *
	 * @var string @ORM\Column(name="UW", type="text", length=16777215, nullable=true)
	 */
	private $uw;
	
	/**
	 *
	 * @var string @ORM\Column(name="Zam", type="string", length=20, nullable=true)
	 */
	private $zam;
	
	/**
	 *
	 * @var string @ORM\Column(name="DZam", type="string", length=20, nullable=true)
	 */
	private $dzam;
	
	/**
	 *
	 * @var string @ORM\Column(name="Ceg", type="string", length=50, nullable=true)
	 */
	private $ceg;
	
	/**
	 *
	 * @var string @ORM\Column(name="Oswy", type="string", length=100, nullable=true)
	 */
	private $oswy;
	
	/**
	 *
	 * @var string @ORM\Column(name="OW", type="string", length=50, nullable=true)
	 */
	private $ow;
	
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
	 * @var float @ORM\Column(name="Zap", type="float", precision=10, scale=0, nullable=true)
	 */
	private $zap;
	
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
	 * @var string @ORM\Column(name="isV", type="string", length=50, nullable=true)
	 */
	private $isv;
	
	/**
	 *
	 * @var string @ORM\Column(name="WarDo", type="string", length=50, nullable=true)
	 */
	private $wardo;
	
	/**
	 *
	 * @var string @ORM\Column(name="AdrDo", type="string", length=250, nullable=true)
	 */
	private $adrdo;
	
	/**
	 *
	 * @var integer @ORM\Column(name="REGPES", type="integer", nullable=true)
	 */
	private $regpes;
	
	/**
	 *
	 * @var string @ORM\Column(name="DataL", type="string", length=50, nullable=true)
	 */
	private $datal;
	
	/**
	 *
	 * @var string @ORM\Column(name="NIPx", type="string", length=5, nullable=true)
	 */
	private $nipx;
	
	/**
	 *
	 * @var string @ORM\Column(name="Reg", type="string", length=20, nullable=true)
	 */
	private $reg;
	
	/**
	 *
	 * @var string @ORM\Column(name="kraj", type="string", length=50, nullable=true)
	 */
	private $kraj;
	
	/**
	 *
	 * @var string @ORM\Column(name="zID", type="string", length=50, nullable=true)
	 */
	private $zid;
	
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
	 * @var integer @ORM\Column(name="Statid", type="integer", nullable=true)
	 */
	private $statid;
	
	/**
	 *
	 * @var string @ORM\Column(name="StatNaz", type="string", length=50, nullable=true)
	 */
	private $statnaz;
	
	/**
	 *
	 * @var string @ORM\Column(name="zIDk", type="string", length=50, nullable=true)
	 */
	private $zidk;
	
	/**
	 *
	 * @var integer @ORM\Column(name="Defni", type="integer", nullable=true)
	 */
	private $defni;
	
	/**
	 *
	 * @var string @ORM\Column(name="defn", type="string", length=50, nullable=true)
	 */
	private $defn;
	
	/**
	 *
	 * @var string @ORM\Column(name="Dpl", type="string", length=20, nullable=true)
	 */
	private $dpl;
	
	/**
	 *
	 * @var float @ORM\Column(name="Waga", type="float", precision=10, scale=0, nullable=true)
	 */
	private $waga;
	
	/**
	 *
	 * @var float @ORM\Column(name="Rea", type="float", precision=10, scale=0, nullable=true)
	 */
	private $rea;
	
	/**
	 *
	 * @var string @ORM\Column(name="Te", type="text", length=16777215, nullable=true)
	 */
	private $te;
	
	/**
	 *
	 * @var string @ORM\Column(name="etap", type="string", length=50, nullable=true)
	 */
	private $etap;
	
	/**
	 *
	 * @var string @ORM\Column(name="RejLP", type="string", length=50, nullable=true)
	 */
	private $rejlp;
	
	/**
	 *
	 * @var string @ORM\Column(name="rep", type="string", length=50, nullable=true)
	 */
	private $rep;
	
	/**
	 *
	 * @var string @ORM\Column(name="DJ", type="string", length=50, nullable=true)
	 */
	private $dj;
	
	/**
	 *
	 * @var string @ORM\Column(name="RejPRO", type="string", length=50, nullable=true)
	 */
	private $rejpro;
	
	/**
	 *
	 * @var integer @ORM\Column(name="Nr2", type="integer", nullable=true)
	 */
	private $nr2;
	
	/**
	 *
	 * @var integer @ORM\Column(name="StanR", type="integer", nullable=true)
	 */
	private $stanr;
	
	/**
	 *
	 * @var string @ORM\Column(name="idP", type="string", length=50, nullable=true)
	 */
	private $idp;
}
