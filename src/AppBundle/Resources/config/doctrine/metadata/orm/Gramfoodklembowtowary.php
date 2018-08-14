<?php
use Doctrine\ORM\Mapping as ORM;

/**
 * Gramfoodklembowtowary
 *
 * @ORM\Table(name="gramfoodklembowtowary")
 * @ORM\Entity
 */
class Gramfoodklembowtowary {
	/**
	 *
	 * @var string @ORM\Column(name="ID", type="string", length=50, nullable=false)
	 *      @ORM\Id
	 *      @ORM\GeneratedValue(strategy="IDENTITY")
	 */
	private $id;
	
	/**
	 *
	 * @var string @ORM\Column(name="MAG", type="string", length=20, nullable=true)
	 */
	private $mag;
	
	/**
	 *
	 * @var string @ORM\Column(name="Kod", type="string", length=50, nullable=true)
	 */
	private $kod;
	
	/**
	 *
	 * @var string @ORM\Column(name="nazw", type="string", length=250, nullable=true)
	 */
	private $nazw;
	
	/**
	 *
	 * @var string @ORM\Column(name="TU", type="string", length=1, nullable=true)
	 */
	private $tu;
	
	/**
	 *
	 * @var float @ORM\Column(name="Vat", type="float", precision=10, scale=0, nullable=true)
	 */
	private $vat;
	
	/**
	 *
	 * @var string @ORM\Column(name="NVat", type="string", length=20, nullable=true)
	 */
	private $nvat;
	
	/**
	 *
	 * @var integer @ORM\Column(name="stVAT", type="integer", nullable=true)
	 */
	private $stvat;
	
	/**
	 *
	 * @var string @ORM\Column(name="JM", type="string", length=10, nullable=true)
	 */
	private $jm;
	
	/**
	 *
	 * @var string @ORM\Column(name="Alias", type="string", length=50, nullable=true)
	 */
	private $alias;
	
	/**
	 *
	 * @var string @ORM\Column(name="NB", type="string", length=1, nullable=true)
	 */
	private $nb;
	
	/**
	 *
	 * @var string @ORM\Column(name="RoCN", type="string", length=10, nullable=true)
	 */
	private $rocn;
	
	/**
	 *
	 * @var float @ORM\Column(name="Cz", type="float", precision=10, scale=0, nullable=true)
	 */
	private $cz;
	
	/**
	 *
	 * @var float @ORM\Column(name="CzB", type="float", precision=10, scale=0, nullable=true)
	 */
	private $czb;
	
	/**
	 *
	 * @var float @ORM\Column(name="Cd", type="float", precision=10, scale=0, nullable=true)
	 */
	private $cd;
	
	/**
	 *
	 * @var float @ORM\Column(name="CN1", type="float", precision=10, scale=0, nullable=true)
	 */
	private $cn1;
	
	/**
	 *
	 * @var float @ORM\Column(name="CN2", type="float", precision=10, scale=0, nullable=true)
	 */
	private $cn2;
	
	/**
	 *
	 * @var float @ORM\Column(name="CN3", type="float", precision=10, scale=0, nullable=true)
	 */
	private $cn3;
	
	/**
	 *
	 * @var float @ORM\Column(name="CN4", type="float", precision=10, scale=0, nullable=true)
	 */
	private $cn4;
	
	/**
	 *
	 * @var float @ORM\Column(name="CB1", type="float", precision=10, scale=0, nullable=true)
	 */
	private $cb1;
	
	/**
	 *
	 * @var float @ORM\Column(name="CB2", type="float", precision=10, scale=0, nullable=true)
	 */
	private $cb2;
	
	/**
	 *
	 * @var float @ORM\Column(name="CB3", type="float", precision=10, scale=0, nullable=true)
	 */
	private $cb3;
	
	/**
	 *
	 * @var float @ORM\Column(name="CB4", type="float", precision=10, scale=0, nullable=true)
	 */
	private $cb4;
	
	/**
	 *
	 * @var float @ORM\Column(name="na1", type="float", precision=10, scale=0, nullable=true)
	 */
	private $na1;
	
	/**
	 *
	 * @var float @ORM\Column(name="na2", type="float", precision=10, scale=0, nullable=true)
	 */
	private $na2;
	
	/**
	 *
	 * @var float @ORM\Column(name="na3", type="float", precision=10, scale=0, nullable=true)
	 */
	private $na3;
	
	/**
	 *
	 * @var float @ORM\Column(name="na4", type="float", precision=10, scale=0, nullable=true)
	 */
	private $na4;
	
	/**
	 *
	 * @var string @ORM\Column(name="Pkw", type="string", length=50, nullable=true)
	 */
	private $pkw;
	
	/**
	 *
	 * @var string @ORM\Column(name="Kat", type="string", length=50, nullable=true)
	 */
	private $kat;
	
	/**
	 *
	 * @var string @ORM\Column(name="Pr", type="string", length=50, nullable=true)
	 */
	private $pr;
	
	/**
	 *
	 * @var string @ORM\Column(name="Gr", type="string", length=50, nullable=true)
	 */
	private $gr;
	
	/**
	 *
	 * @var string @ORM\Column(name="WG", type="string", length=1, nullable=true)
	 */
	private $wg;
	
	/**
	 *
	 * @var string @ORM\Column(name="NA", type="string", length=1, nullable=true)
	 */
	private $na;
	
	/**
	 *
	 * @var string @ORM\Column(name="Wal", type="string", length=10, nullable=true)
	 */
	private $wal;
	
	/**
	 *
	 * @var string @ORM\Column(name="Walw", type="string", length=10, nullable=true)
	 */
	private $walw;
	
	/**
	 *
	 * @var float @ORM\Column(name="BO", type="float", precision=10, scale=0, nullable=true)
	 */
	private $bo;
	
	/**
	 *
	 * @var float @ORM\Column(name="PZ", type="float", precision=10, scale=0, nullable=true)
	 */
	private $pz;
	
	/**
	 *
	 * @var float @ORM\Column(name="RO", type="float", precision=10, scale=0, nullable=true)
	 */
	private $ro;
	
	/**
	 *
	 * @var float @ORM\Column(name="STAN", type="float", precision=10, scale=0, nullable=true)
	 */
	private $stan;
	
	/**
	 *
	 * @var float @ORM\Column(name="Rez", type="float", precision=10, scale=0, nullable=true)
	 */
	private $rez;
	
	/**
	 *
	 * @var string @ORM\Column(name="OstR", type="string", length=8, nullable=true)
	 */
	private $ostr;
	
	/**
	 *
	 * @var string @ORM\Column(name="iNET", type="string", length=1, nullable=true)
	 */
	private $inet;
	
	/**
	 *
	 * @var float @ORM\Column(name="Obr", type="float", precision=10, scale=0, nullable=true)
	 */
	private $obr;
	
	/**
	 *
	 * @var float @ORM\Column(name="smin", type="float", precision=10, scale=0, nullable=true)
	 */
	private $smin;
	
	/**
	 *
	 * @var float @ORM\Column(name="smax", type="float", precision=10, scale=0, nullable=true)
	 */
	private $smax;
	
	/**
	 *
	 * @var float @ORM\Column(name="Waga", type="float", precision=10, scale=0, nullable=true)
	 */
	private $waga;
	
	/**
	 *
	 * @var float @ORM\Column(name="WagaB", type="float", precision=10, scale=0, nullable=true)
	 */
	private $wagab;
	
	/**
	 *
	 * @var string @ORM\Column(name="Dwaz", type="string", length=50, nullable=true)
	 */
	private $dwaz;
	
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
	 * @var string @ORM\Column(name="zID", type="string", length=50, nullable=true)
	 */
	private $zid;
	
	/**
	 *
	 * @var string @ORM\Column(name="Opis", type="text", length=16777215, nullable=true)
	 */
	private $opis;
	
	/**
	 *
	 * @var string @ORM\Column(name="Zd", type="string", length=250, nullable=true)
	 */
	private $zd;
	
	/**
	 *
	 * @var string @ORM\Column(name="AktZd", type="string", length=1, nullable=true)
	 */
	private $aktzd;
	
	/**
	 *
	 * @var integer @ORM\Column(name="pkt", type="integer", nullable=true)
	 */
	private $pkt;
	
	/**
	 *
	 * @var string @ORM\Column(name="DW", type="string", length=20, nullable=true)
	 */
	private $dw;
	
	/**
	 *
	 * @var string @ORM\Column(name="DZ", type="string", length=20, nullable=true)
	 */
	private $dz;
	
	/**
	 *
	 * @var string @ORM\Column(name="UZ", type="string", length=50, nullable=true)
	 */
	private $uz;
	
	/**
	 *
	 * @var string @ORM\Column(name="nazd", type="string", length=250, nullable=true)
	 */
	private $nazd;
	
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
	 * @var string @ORM\Column(name="sn", type="string", length=250, nullable=true)
	 */
	private $sn;
	
	/**
	 *
	 * @var string @ORM\Column(name="DataL", type="string", length=50, nullable=true)
	 */
	private $datal;
	
	/**
	 *
	 * @var string @ORM\Column(name="IDzam", type="string", length=50, nullable=true)
	 */
	private $idzam;
	
	/**
	 *
	 * @var float @ORM\Column(name="CzBO", type="float", precision=10, scale=0, nullable=true)
	 */
	private $czbo;
	
	/**
	 *
	 * @var string @ORM\Column(name="lokm", type="string", length=50, nullable=true)
	 */
	private $lokm;
	
	/**
	 *
	 * @var string @ORM\Column(name="JM2", type="string", length=50, nullable=true)
	 */
	private $jm2;
	
	/**
	 *
	 * @var string @ORM\Column(name="Nazw2", type="string", length=250, nullable=true)
	 */
	private $nazw2;
	
	/**
	 *
	 * @var integer @ORM\Column(name="nID", type="integer", nullable=true)
	 */
	private $nid;
	
	/**
	 *
	 * @var string @ORM\Column(name="NRy", type="string", length=10, nullable=true)
	 */
	private $nry;
	
	/**
	 *
	 * @var string @ORM\Column(name="kk", type="string", length=250, nullable=true)
	 */
	private $kk;
	
	/**
	 *
	 * @var string @ORM\Column(name="Notk", type="string", length=50, nullable=true)
	 */
	private $notk;
	
	/**
	 *
	 * @var string @ORM\Column(name="Te", type="text", length=16777215, nullable=true)
	 */
	private $te;
	
	/**
	 *
	 * @var float @ORM\Column(name="roBO", type="float", precision=10, scale=0, nullable=true)
	 */
	private $robo;
}
