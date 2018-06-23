<?php
use Doctrine\ORM\Mapping as ORM;

/**
 * Gramfoodklembowzamz
 *
 * @ORM\Table(name="gramfoodklembowzamz")
 * @ORM\Entity
 */
class Gramfoodklembowzamz {
	/**
	 *
	 * @var string @ORM\Column(name="ID", type="string", length=50, nullable=false)
	 *      @ORM\Id
	 *      @ORM\GeneratedValue(strategy="IDENTITY")
	 */
	private $id;
	
	/**
	 *
	 * @var string @ORM\Column(name="Ro", type="string", length=10, nullable=true)
	 */
	private $ro;
	
	/**
	 *
	 * @var string @ORM\Column(name="Typ", type="string", length=10, nullable=true)
	 */
	private $typ;
	
	/**
	 *
	 * @var string @ORM\Column(name="KI", type="string", length=50, nullable=true)
	 */
	private $ki;
	
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
	 * @var integer @ORM\Column(name="Nr", type="integer", nullable=true)
	 */
	private $nr;
	
	/**
	 *
	 * @var string @ORM\Column(name="Rej", type="string", length=20, nullable=true)
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
	 * @var string @ORM\Column(name="Dwy", type="string", length=20, nullable=true)
	 */
	private $dwy;
	
	/**
	 *
	 * @var string @ORM\Column(name="Fak", type="string", length=20, nullable=true)
	 */
	private $fak;
	
	/**
	 *
	 * @var string @ORM\Column(name="Dfa", type="string", length=20, nullable=true)
	 */
	private $dfa;
	
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
	 * @var string @ORM\Column(name="NB", type="string", length=1, nullable=true)
	 */
	private $nb;
	
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
	 * @var float @ORM\Column(name="V3", type="float", precision=10, scale=0, nullable=true)
	 */
	private $v3;
	
	/**
	 *
	 * @var string @ORM\Column(name="NVAT3", type="string", length=10, nullable=true)
	 */
	private $nvat3;
	
	/**
	 *
	 * @var float @ORM\Column(name="VAT3", type="float", precision=10, scale=0, nullable=true)
	 */
	private $vat3;
	
	/**
	 *
	 * @var float @ORM\Column(name="Clo", type="float", precision=10, scale=0, nullable=true)
	 */
	private $clo;
	
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
	 * @var float @ORM\Column(name="Rozl", type="float", precision=10, scale=0, nullable=true)
	 */
	private $rozl;
	
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
	 * @var string @ORM\Column(name="Dkurs", type="string", length=20, nullable=true)
	 */
	private $dkurs;
	
	/**
	 *
	 * @var float @ORM\Column(name="KursD", type="float", precision=10, scale=0, nullable=true)
	 */
	private $kursd;
	
	/**
	 *
	 * @var string @ORM\Column(name="DkursD", type="string", length=20, nullable=true)
	 */
	private $dkursd;
	
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
	 * @var string @ORM\Column(name="RejBOK", type="string", length=50, nullable=true)
	 */
	private $rejbok;
	
	/**
	 *
	 * @var string @ORM\Column(name="RejZZ", type="string", length=50, nullable=true)
	 */
	private $rejzz;
	
	/**
	 *
	 * @var string @ORM\Column(name="RejVWE", type="string", length=50, nullable=true)
	 */
	private $rejvwe;
	
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
	 * @var string @ORM\Column(name="Nazw", type="string", length=200, nullable=true)
	 */
	private $nazw;
	
	/**
	 *
	 * @var string @ORM\Column(name="Nazw2", type="string", length=240, nullable=true)
	 */
	private $nazw2;
	
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
	 * @var string @ORM\Column(name="Notk", type="text", length=16777215, nullable=true)
	 */
	private $notk;
	
	/**
	 *
	 * @var string @ORM\Column(name="Inf", type="text", length=16777215, nullable=true)
	 */
	private $inf;
	
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
	 * @var string @ORM\Column(name="Mail", type="string", length=100, nullable=true)
	 */
	private $mail;
	
	/**
	 *
	 * @var string @ORM\Column(name="kraj", type="string", length=50, nullable=true)
	 */
	private $kraj;
	
	/**
	 *
	 * @var string @ORM\Column(name="AdrDo", type="string", length=250, nullable=true)
	 */
	private $adrdo;
	
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
	 * @var string @ORM\Column(name="oswy", type="string", length=50, nullable=true)
	 */
	private $oswy;
	
	/**
	 *
	 * @var string @ORM\Column(name="os", type="string", length=50, nullable=true)
	 */
	private $os;
	
	/**
	 *
	 * @var string @ORM\Column(name="Zam", type="string", length=50, nullable=true)
	 */
	private $zam;
	
	/**
	 *
	 * @var string @ORM\Column(name="zID", type="string", length=50, nullable=true)
	 */
	private $zid;
	
	/**
	 *
	 * @var string @ORM\Column(name="etap", type="string", length=50, nullable=true)
	 */
	private $etap;
	
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
	 * @var string @ORM\Column(name="Te", type="text", length=16777215, nullable=true)
	 */
	private $te;
	
	/**
	 *
	 * @var string @ORM\Column(name="idP", type="string", length=50, nullable=true)
	 */
	private $idp;
}
