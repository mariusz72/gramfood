<?php
use Doctrine\ORM\Mapping as ORM;

/**
 * Gramfoodklembowfaktury
 *
 * @ORM\Table(name="gramfoodklembowfaktury")
 * @ORM\Entity
 */
class Gramfoodklembowfaktury {
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
	 * @var string @ORM\Column(name="IDk", type="string", length=50, nullable=true)
	 */
	private $idk;
	
	/**
	 *
	 * @var string @ORM\Column(name="RejPAR", type="string", length=50, nullable=true)
	 */
	private $rejpar;
	
	/**
	 *
	 * @var string @ORM\Column(name="RejWZ", type="string", length=50, nullable=true)
	 */
	private $rejwz;
	
	/**
	 *
	 * @var string @ORM\Column(name="Alias", type="string", length=50, nullable=true)
	 */
	private $alias;
	
	/**
	 *
	 * @var string @ORM\Column(name="Alodb", type="string", length=50, nullable=true)
	 */
	private $alodb;
	
	/**
	 *
	 * @var string @ORM\Column(name="Odb", type="string", length=250, nullable=true)
	 */
	private $odb;
	
	/**
	 *
	 * @var string @ORM\Column(name="os", type="string", length=50, nullable=true)
	 */
	private $os;
	
	/**
	 *
	 * @var string @ORM\Column(name="Gr", type="string", length=50, nullable=true)
	 */
	private $gr;
	
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
	 * @var string @ORM\Column(name="Rok", type="string", length=10, nullable=true)
	 */
	private $rok;
	
	/**
	 *
	 * @var string @ORM\Column(name="Mc", type="string", length=10, nullable=true)
	 */
	private $mc;
	
	/**
	 *
	 * @var string @ORM\Column(name="NrR", type="string", length=50, nullable=true)
	 */
	private $nrr;
	
	/**
	 *
	 * @var string @ORM\Column(name="DWy", type="string", length=20, nullable=true)
	 */
	private $dwy;
	
	/**
	 *
	 * @var string @ORM\Column(name="DSp", type="string", length=20, nullable=true)
	 */
	private $dsp;
	
	/**
	 *
	 * @var string @ORM\Column(name="Fp", type="string", length=50, nullable=true)
	 */
	private $fp;
	
	/**
	 *
	 * @var integer @ORM\Column(name="Dni", type="integer", nullable=true)
	 */
	private $dni;
	
	/**
	 *
	 * @var string @ORM\Column(name="Tpl", type="string", length=20, nullable=true)
	 */
	private $tpl;
	
	/**
	 *
	 * @var string @ORM\Column(name="Dpl", type="string", length=20, nullable=true)
	 */
	private $dpl;
	
	/**
	 *
	 * @var float @ORM\Column(name="N0", type="float", precision=10, scale=0, nullable=true)
	 */
	private $n0;
	
	/**
	 *
	 * @var float @ORM\Column(name="N1", type="float", precision=10, scale=0, nullable=true)
	 */
	private $n1;
	
	/**
	 *
	 * @var float @ORM\Column(name="N2", type="float", precision=10, scale=0, nullable=true)
	 */
	private $n2;
	
	/**
	 *
	 * @var float @ORM\Column(name="N3", type="float", precision=10, scale=0, nullable=true)
	 */
	private $n3;
	
	/**
	 *
	 * @var float @ORM\Column(name="N4", type="float", precision=10, scale=0, nullable=true)
	 */
	private $n4;
	
	/**
	 *
	 * @var float @ORM\Column(name="V1", type="float", precision=10, scale=0, nullable=true)
	 */
	private $v1;
	
	/**
	 *
	 * @var float @ORM\Column(name="V2", type="float", precision=10, scale=0, nullable=true)
	 */
	private $v2;
	
	/**
	 *
	 * @var float @ORM\Column(name="V4", type="float", precision=10, scale=0, nullable=true)
	 */
	private $v4;
	
	/**
	 *
	 * @var float @ORM\Column(name="Wart", type="float", precision=10, scale=0, nullable=true)
	 */
	private $wart;
	
	/**
	 *
	 * @var float @ORM\Column(name="Zap", type="float", precision=10, scale=0, nullable=true)
	 */
	private $zap;
	
	/**
	 *
	 * @var float @ORM\Column(name="Przedp", type="float", precision=10, scale=0, nullable=true)
	 */
	private $przedp;
	
	/**
	 *
	 * @var float @ORM\Column(name="Koszt", type="float", precision=10, scale=0, nullable=true)
	 */
	private $koszt;
	
	/**
	 *
	 * @var string @ORM\Column(name="NB", type="string", length=1, nullable=true)
	 */
	private $nb;
	
	/**
	 *
	 * @var float @ORM\Column(name="Rab", type="float", precision=10, scale=0, nullable=true)
	 */
	private $rab;
	
	/**
	 *
	 * @var float @ORM\Column(name="PrRab", type="float", precision=10, scale=0, nullable=true)
	 */
	private $prrab;
	
	/**
	 *
	 * @var string @ORM\Column(name="status", type="string", length=50, nullable=true)
	 */
	private $status;
	
	/**
	 *
	 * @var string @ORM\Column(name="Bank", type="string", length=100, nullable=true)
	 */
	private $bank;
	
	/**
	 *
	 * @var string @ORM\Column(name="BankN", type="string", length=100, nullable=true)
	 */
	private $bankn;
	
	/**
	 *
	 * @var string @ORM\Column(name="BankS", type="string", length=20, nullable=true)
	 */
	private $banks;
	
	/**
	 *
	 * @var string @ORM\Column(name="NrK", type="string", length=50, nullable=true)
	 */
	private $nrk;
	
	/**
	 *
	 * @var string @ORM\Column(name="DWyK", type="string", length=20, nullable=true)
	 */
	private $dwyk;
	
	/**
	 *
	 * @var string @ORM\Column(name="WSK", type="string", length=20, nullable=true)
	 */
	private $wsk;
	
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
	 * @var float @ORM\Column(name="KoszVM", type="float", precision=10, scale=0, nullable=true)
	 */
	private $koszvm;
	
	/**
	 *
	 * @var string @ORM\Column(name="RejBOK", type="string", length=50, nullable=true)
	 */
	private $rejbok;
	
	/**
	 *
	 * @var string @ORM\Column(name="RejOF", type="string", length=50, nullable=true)
	 */
	private $rejof;
	
	/**
	 *
	 * @var string @ORM\Column(name="RejZS", type="string", length=50, nullable=true)
	 */
	private $rejzs;
	
	/**
	 *
	 * @var string @ORM\Column(name="RejPRO", type="string", length=50, nullable=true)
	 */
	private $rejpro;
	
	/**
	 *
	 * @var string @ORM\Column(name="RejVKO", type="string", length=50, nullable=true)
	 */
	private $rejvko;
	
	/**
	 *
	 * @var string @ORM\Column(name="NIPx", type="string", length=10, nullable=true)
	 */
	private $nipx;
	
	/**
	 *
	 * @var string @ORM\Column(name="NIP", type="string", length=50, nullable=true)
	 */
	private $nip;
	
	/**
	 *
	 * @var string @ORM\Column(name="Reg", type="string", length=50, nullable=true)
	 */
	private $reg;
	
	/**
	 *
	 * @var string @ORM\Column(name="Nazw", type="string", length=250, nullable=true)
	 */
	private $nazw;
	
	/**
	 *
	 * @var string @ORM\Column(name="Nazw2", type="string", length=250, nullable=true)
	 */
	private $nazw2;
	
	/**
	 *
	 * @var string @ORM\Column(name="Kodp", type="string", length=20, nullable=true)
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
	 * @var string @ORM\Column(name="AdrK", type="string", length=1, nullable=true)
	 */
	private $adrk;
	
	/**
	 *
	 * @var string @ORM\Column(name="Dnext", type="string", length=20, nullable=true)
	 */
	private $dnext;
	
	/**
	 *
	 * @var integer @ORM\Column(name="Cen", type="integer", nullable=true)
	 */
	private $cen;
	
	/**
	 *
	 * @var string @ORM\Column(name="WarDo", type="string", length=50, nullable=true)
	 */
	private $wardo;
	
	/**
	 *
	 * @var string @ORM\Column(name="AdrDo", type="string", length=200, nullable=true)
	 */
	private $adrdo;
	
	/**
	 *
	 * @var string @ORM\Column(name="Defn", type="string", length=50, nullable=true)
	 */
	private $defn;
	
	/**
	 *
	 * @var integer @ORM\Column(name="Defni", type="integer", nullable=true)
	 */
	private $defni;
	
	/**
	 *
	 * @var string @ORM\Column(name="Drozl", type="string", length=40, nullable=true)
	 */
	private $drozl;
	
	/**
	 *
	 * @var string @ORM\Column(name="zasob", type="string", length=50, nullable=true)
	 */
	private $zasob;
	
	/**
	 *
	 * @var float @ORM\Column(name="kwzat", type="float", precision=10, scale=0, nullable=true)
	 */
	private $kwzat;
	
	/**
	 *
	 * @var string @ORM\Column(name="Inf", type="text", length=16777215, nullable=true)
	 */
	private $inf;
	
	/**
	 *
	 * @var string @ORM\Column(name="Notk", type="text", length=16777215, nullable=true)
	 */
	private $notk;
	
	/**
	 *
	 * @var string @ORM\Column(name="OsWy", type="string", length=50, nullable=true)
	 */
	private $oswy;
	
	/**
	 *
	 * @var string @ORM\Column(name="OsOd", type="string", length=50, nullable=true)
	 */
	private $osod;
	
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
	 * @var float @ORM\Column(name="lat", type="float", precision=10, scale=0, nullable=true)
	 */
	private $lat;
	
	/**
	 *
	 * @var float @ORM\Column(name="lon", type="float", precision=10, scale=0, nullable=true)
	 */
	private $lon;
	
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
	
	/**
	 *
	 * @var string @ORM\Column(name="Tem", type="string", length=80, nullable=true)
	 */
	private $tem;
	
	/**
	 *
	 * @var string @ORM\Column(name="IDno", type="string", length=50, nullable=true)
	 */
	private $idno;
	
	/**
	 *
	 * @var string @ORM\Column(name="Mail", type="string", length=100, nullable=true)
	 */
	private $mail;
	
	/**
	 *
	 * @var integer @ORM\Column(name="iWez", type="integer", nullable=true)
	 */
	private $iwez;
	
	/**
	 *
	 * @var string @ORM\Column(name="kolo", type="string", length=10, nullable=true)
	 */
	private $kolo;
	
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
	 * @var string @ORM\Column(name="RM", type="string", length=6, nullable=true)
	 */
	private $rm;
	
	/**
	 *
	 * @var string @ORM\Column(name="Te", type="text", length=16777215, nullable=true)
	 */
	private $te;
	
	/**
	 *
	 * @var string @ORM\Column(name="DJ", type="string", length=50, nullable=true)
	 */
	private $dj;
	
	/**
	 *
	 * @var string @ORM\Column(name="ddn", type="string", length=20, nullable=true)
	 */
	private $ddn;
	
	/**
	 *
	 * @var string @ORM\Column(name="OW2", type="string", length=50, nullable=true)
	 */
	private $ow2;
	
	/**
	 *
	 * @var string @ORM\Column(name="OW3", type="string", length=50, nullable=true)
	 */
	private $ow3;
	
	/**
	 *
	 * @var string @ORM\Column(name="T1", type="string", length=50, nullable=true)
	 */
	private $t1;
	
	/**
	 *
	 * @var integer @ORM\Column(name="Nr2", type="integer", nullable=true)
	 */
	private $nr2;
	
	/**
	 *
	 * @var string @ORM\Column(name="idP", type="string", length=50, nullable=true)
	 */
	private $idp;
}
