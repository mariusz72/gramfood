<?php
use Doctrine\ORM\Mapping as ORM;

/**
 * Gramfoodklembowklienci
 *
 * @ORM\Table(name="gramfoodklembowklienci")
 * @ORM\Entity
 */
class Gramfoodklembowklienci {
	/**
	 *
	 * @var string @ORM\Column(name="ID", type="string", length=50, nullable=false)
	 *      @ORM\Id
	 *      @ORM\GeneratedValue(strategy="IDENTITY")
	 */
	private $id;
	
	/**
	 *
	 * @var string @ORM\Column(name="IDz", type="string", length=50, nullable=true)
	 */
	private $idz;
	
	/**
	 *
	 * @var string @ORM\Column(name="Alias", type="string", length=50, nullable=true)
	 */
	private $alias;
	
	/**
	 *
	 * @var string @ORM\Column(name="Hasl", type="string", length=50, nullable=true)
	 */
	private $hasl;
	
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
	 * @var string @ORM\Column(name="Ulic", type="string", length=50, nullable=true)
	 */
	private $ulic;
	
	/**
	 *
	 * @var string @ORM\Column(name="Kodp", type="string", length=50, nullable=true)
	 */
	private $kodp;
	
	/**
	 *
	 * @var string @ORM\Column(name="Mias", type="string", length=50, nullable=true)
	 */
	private $mias;
	
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
	 * @var string @ORM\Column(name="Rodz", type="string", length=1, nullable=true)
	 */
	private $rodz;
	
	/**
	 *
	 * @var integer @ORM\Column(name="Stat", type="integer", nullable=true)
	 */
	private $stat;
	
	/**
	 *
	 * @var string @ORM\Column(name="OsU", type="string", length=50, nullable=true)
	 */
	private $osu;
	
	/**
	 *
	 * @var string @ORM\Column(name="REGPES", type="string", length=1, nullable=true)
	 */
	private $regpes;
	
	/**
	 *
	 * @var string @ORM\Column(name="Ceg", type="string", length=50, nullable=true)
	 */
	private $ceg;
	
	/**
	 *
	 * @var string @ORM\Column(name="t1", type="string", length=50, nullable=true)
	 */
	private $t1;
	
	/**
	 *
	 * @var string @ORM\Column(name="t2", type="string", length=50, nullable=true)
	 */
	private $t2;
	
	/**
	 *
	 * @var string @ORM\Column(name="tk", type="string", length=50, nullable=true)
	 */
	private $tk;
	
	/**
	 *
	 * @var string @ORM\Column(name="mail", type="string", length=100, nullable=true)
	 */
	private $mail;
	
	/**
	 *
	 * @var string @ORM\Column(name="www", type="string", length=100, nullable=true)
	 */
	private $www;
	
	/**
	 *
	 * @var string @ORM\Column(name="notk", type="text", length=16777215, nullable=true)
	 */
	private $notk;
	
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
	 * @var string @ORM\Column(name="Swift", type="string", length=50, nullable=true)
	 */
	private $swift;
	
	/**
	 *
	 * @var string @ORM\Column(name="IDplat", type="string", length=100, nullable=true)
	 */
	private $idplat;
	
	/**
	 *
	 * @var string @ORM\Column(name="Gr", type="string", length=50, nullable=true)
	 */
	private $gr;
	
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
	 * @var integer @ORM\Column(name="Cen", type="integer", nullable=true)
	 */
	private $cen;
	
	/**
	 *
	 * @var float @ORM\Column(name="Rab", type="float", precision=10, scale=0, nullable=true)
	 */
	private $rab;
	
	/**
	 *
	 * @var string @ORM\Column(name="osoba", type="string", length=100, nullable=true)
	 */
	private $osoba;
	
	/**
	 *
	 * @var float @ORM\Column(name="Obr", type="float", precision=10, scale=0, nullable=true)
	 */
	private $obr;
	
	/**
	 *
	 * @var float @ORM\Column(name="Zal", type="float", precision=10, scale=0, nullable=true)
	 */
	private $zal;
	
	/**
	 *
	 * @var float @ORM\Column(name="Wasp", type="float", precision=10, scale=0, nullable=true)
	 */
	private $wasp;
	
	/**
	 *
	 * @var float @ORM\Column(name="Obsp", type="float", precision=10, scale=0, nullable=true)
	 */
	private $obsp;
	
	/**
	 *
	 * @var float @ORM\Column(name="Zasp", type="float", precision=10, scale=0, nullable=true)
	 */
	private $zasp;
	
	/**
	 *
	 * @var float @ORM\Column(name="Waza", type="float", precision=10, scale=0, nullable=true)
	 */
	private $waza;
	
	/**
	 *
	 * @var float @ORM\Column(name="Zaza", type="float", precision=10, scale=0, nullable=true)
	 */
	private $zaza;
	
	/**
	 *
	 * @var string @ORM\Column(name="KAdr", type="string", length=1, nullable=true)
	 */
	private $kadr;
	
	/**
	 *
	 * @var string @ORM\Column(name="KMias", type="string", length=50, nullable=true)
	 */
	private $kmias;
	
	/**
	 *
	 * @var string @ORM\Column(name="KUlic", type="string", length=50, nullable=true)
	 */
	private $kulic;
	
	/**
	 *
	 * @var string @ORM\Column(name="kKodp", type="string", length=10, nullable=true)
	 */
	private $kkodp;
	
	/**
	 *
	 * @var string @ORM\Column(name="GG", type="string", length=50, nullable=true)
	 */
	private $gg;
	
	/**
	 *
	 * @var string @ORM\Column(name="RR", type="string", length=250, nullable=true)
	 */
	private $rr;
	
	/**
	 *
	 * @var string @ORM\Column(name="Datnw", type="string", length=20, nullable=true)
	 */
	private $datnw;
	
	/**
	 *
	 * @var string @ORM\Column(name="LastW", type="string", length=20, nullable=true)
	 */
	private $lastw;
	
	/**
	 *
	 * @var string @ORM\Column(name="ksk", type="string", length=13, nullable=true)
	 */
	private $ksk;
	
	/**
	 *
	 * @var integer @ORM\Column(name="pkt", type="integer", nullable=true)
	 */
	private $pkt;
	
	/**
	 *
	 * @var string @ORM\Column(name="Ks", type="string", length=250, nullable=true)
	 */
	private $ks;
	
	/**
	 *
	 * @var string @ORM\Column(name="Kat", type="string", length=20, nullable=true)
	 */
	private $kat;
	
	/**
	 *
	 * @var string @ORM\Column(name="refer", type="string", length=50, nullable=true)
	 */
	private $refer;
	
	/**
	 *
	 * @var integer @ORM\Column(name="jez", type="integer", nullable=true)
	 */
	private $jez;
	
	/**
	 *
	 * @var string @ORM\Column(name="AdrD", type="string", length=200, nullable=true)
	 */
	private $adrd;
	
	/**
	 *
	 * @var string @ORM\Column(name="UZ", type="string", length=50, nullable=true)
	 */
	private $uz;
	
	/**
	 *
	 * @var string @ORM\Column(name="DZ", type="string", length=20, nullable=true)
	 */
	private $dz;
	
	/**
	 *
	 * @var string @ORM\Column(name="DZr", type="string", length=20, nullable=true)
	 */
	private $dzr;
	
	/**
	 *
	 * @var string @ORM\Column(name="Zglo", type="string", length=50, nullable=true)
	 */
	private $zglo;
	
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
	 * @var string @ORM\Column(name="Te", type="string", length=250, nullable=true)
	 */
	private $te;
	
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
	 * @var string @ORM\Column(name="DataL", type="string", length=50, nullable=true)
	 */
	private $datal;
	
	/**
	 *
	 * @var string @ORM\Column(name="Blok", type="string", length=5, nullable=true)
	 */
	private $blok;
	
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
	 * @var string @ORM\Column(name="OW", type="string", length=50, nullable=true)
	 */
	private $ow;
	
	/**
	 *
	 * @var string @ORM\Column(name="iNET", type="string", length=1, nullable=true)
	 */
	private $inet;
	
	/**
	 *
	 * @var integer @ORM\Column(name="nID", type="integer", nullable=true)
	 */
	private $nid;
	
	/**
	 *
	 * @var string @ORM\Column(name="Log", type="string", length=50, nullable=true)
	 */
	private $log;
	
	/**
	 *
	 * @var string @ORM\Column(name="Dp", type="string", length=12, nullable=true)
	 */
	private $dp;
}
