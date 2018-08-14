<?php
use Doctrine\ORM\Mapping as ORM;

/**
 * Gramfoodklembowbok
 *
 * @ORM\Table(name="gramfoodklembowbok")
 * @ORM\Entity
 */
class Gramfoodklembowbok {
	/**
	 *
	 * @var string @ORM\Column(name="id", type="string", length=50, nullable=false)
	 *      @ORM\Id
	 *      @ORM\GeneratedValue(strategy="IDENTITY")
	 */
	private $id;
	
	/**
	 *
	 * @var string @ORM\Column(name="doid", type="string", length=50, nullable=true)
	 */
	private $doid;
	
	/**
	 *
	 * @var string @ORM\Column(name="id2", type="string", length=50, nullable=true)
	 */
	private $id2;
	
	/**
	 *
	 * @var string @ORM\Column(name="Ro", type="string", length=5, nullable=true)
	 */
	private $ro;
	
	/**
	 *
	 * @var string @ORM\Column(name="alias", type="string", length=50, nullable=true)
	 */
	private $alias;
	
	/**
	 *
	 * @var string @ORM\Column(name="data", type="string", length=20, nullable=true)
	 */
	private $data;
	
	/**
	 *
	 * @var string @ORM\Column(name="Tem", type="string", length=80, nullable=true)
	 */
	private $tem;
	
	/**
	 *
	 * @var string @ORM\Column(name="nrr", type="string", length=50, nullable=true)
	 */
	private $nrr;
	
	/**
	 *
	 * @var string @ORM\Column(name="rej", type="string", length=10, nullable=true)
	 */
	private $rej;
	
	/**
	 *
	 * @var integer @ORM\Column(name="nr", type="integer", nullable=true)
	 */
	private $nr;
	
	/**
	 *
	 * @var string @ORM\Column(name="rok", type="string", length=4, nullable=true)
	 */
	private $rok;
	
	/**
	 *
	 * @var string @ORM\Column(name="mc", type="string", length=2, nullable=true)
	 */
	private $mc;
	
	/**
	 *
	 * @var string @ORM\Column(name="stat", type="string", length=50, nullable=true)
	 */
	private $stat;
	
	/**
	 *
	 * @var string @ORM\Column(name="wyk", type="string", length=3, nullable=true)
	 */
	private $wyk;
	
	/**
	 *
	 * @var string @ORM\Column(name="wazn", type="string", length=3, nullable=true)
	 */
	private $wazn;
	
	/**
	 *
	 * @var string @ORM\Column(name="RF", type="string", length=10, nullable=true)
	 */
	private $rf;
	
	/**
	 *
	 * @var string @ORM\Column(name="RejDok", type="string", length=50, nullable=true)
	 */
	private $rejdok;
	
	/**
	 *
	 * @var string @ORM\Column(name="IdDok", type="string", length=50, nullable=true)
	 */
	private $iddok;
	
	/**
	 *
	 * @var string @ORM\Column(name="Datd", type="string", length=20, nullable=true)
	 */
	private $datd;
	
	/**
	 *
	 * @var string @ORM\Column(name="datazp", type="string", length=20, nullable=true)
	 */
	private $datazp;
	
	/**
	 *
	 * @var string @ORM\Column(name="dataz", type="string", length=20, nullable=true)
	 */
	private $dataz;
	
	/**
	 *
	 * @var string @ORM\Column(name="opis", type="text", length=16777215, nullable=true)
	 */
	private $opis;
	
	/**
	 *
	 * @var string @ORM\Column(name="rea", type="text", length=16777215, nullable=true)
	 */
	private $rea;
	
	/**
	 *
	 * @var string @ORM\Column(name="dla", type="string", length=50, nullable=true)
	 */
	private $dla;
	
	/**
	 *
	 * @var string @ORM\Column(name="os", type="string", length=50, nullable=true)
	 */
	private $os;
	
	/**
	 *
	 * @var string @ORM\Column(name="refer", type="string", length=50, nullable=true)
	 */
	private $refer;
	
	/**
	 *
	 * @var string @ORM\Column(name="IDk", type="string", length=50, nullable=true)
	 */
	private $idk;
	
	/**
	 *
	 * @var string @ORM\Column(name="NIP", type="string", length=20, nullable=true)
	 */
	private $nip;
	
	/**
	 *
	 * @var string @ORM\Column(name="nazw", type="string", length=200, nullable=true)
	 */
	private $nazw;
	
	/**
	 *
	 * @var string @ORM\Column(name="nazw2", type="string", length=150, nullable=true)
	 */
	private $nazw2;
	
	/**
	 *
	 * @var string @ORM\Column(name="mias", type="string", length=50, nullable=true)
	 */
	private $mias;
	
	/**
	 *
	 * @var string @ORM\Column(name="ulic", type="string", length=50, nullable=true)
	 */
	private $ulic;
	
	/**
	 *
	 * @var string @ORM\Column(name="kodp", type="string", length=10, nullable=true)
	 */
	private $kodp;
	
	/**
	 *
	 * @var string @ORM\Column(name="T1", type="string", length=60, nullable=true)
	 */
	private $t1;
	
	/**
	 *
	 * @var string @ORM\Column(name="mail", type="string", length=80, nullable=true)
	 */
	private $mail;
	
	/**
	 *
	 * @var string @ORM\Column(name="ceg", type="string", length=50, nullable=true)
	 */
	private $ceg;
	
	/**
	 *
	 * @var string @ORM\Column(name="IDpl", type="string", length=50, nullable=true)
	 */
	private $idpl;
	
	/**
	 *
	 * @var string @ORM\Column(name="Profi", type="string", length=50, nullable=true)
	 */
	private $profi;
	
	/**
	 *
	 * @var integer @ORM\Column(name="lok", type="integer", nullable=true)
	 */
	private $lok;
	
	/**
	 *
	 * @var integer @ORM\Column(name="N1", type="integer", nullable=true)
	 */
	private $n1;
	
	/**
	 *
	 * @var string @ORM\Column(name="uz", type="string", length=50, nullable=true)
	 */
	private $uz;
	
	/**
	 *
	 * @var string @ORM\Column(name="Datc", type="string", length=10, nullable=true)
	 */
	private $datc;
	
	/**
	 *
	 * @var string @ORM\Column(name="akt", type="string", length=1, nullable=true)
	 */
	private $akt;
	
	/**
	 *
	 * @var string @ORM\Column(name="anul", type="string", length=1, nullable=true)
	 */
	private $anul;
	
	/**
	 *
	 * @var integer @ORM\Column(name="wers", type="integer", nullable=true)
	 */
	private $wers;
	
	/**
	 *
	 * @var string @ORM\Column(name="oss", type="text", length=16777215, nullable=true)
	 */
	private $oss;
	
	/**
	 *
	 * @var string @ORM\Column(name="s1", type="string", length=50, nullable=true)
	 */
	private $s1;
	
	/**
	 *
	 * @var string @ORM\Column(name="s1s", type="text", length=16777215, nullable=true)
	 */
	private $s1s;
	
	/**
	 *
	 * @var string @ORM\Column(name="s2", type="string", length=50, nullable=true)
	 */
	private $s2;
	
	/**
	 *
	 * @var string @ORM\Column(name="s2s", type="text", length=16777215, nullable=true)
	 */
	private $s2s;
	
	/**
	 *
	 * @var string @ORM\Column(name="s3", type="string", length=50, nullable=true)
	 */
	private $s3;
	
	/**
	 *
	 * @var string @ORM\Column(name="s3s", type="text", length=16777215, nullable=true)
	 */
	private $s3s;
	
	/**
	 *
	 * @var string @ORM\Column(name="datnw", type="string", length=20, nullable=true)
	 */
	private $datnw;
	
	/**
	 *
	 * @var string @ORM\Column(name="kol", type="string", length=80, nullable=true)
	 */
	private $kol;
	
	/**
	 *
	 * @var string @ORM\Column(name="etap", type="string", length=50, nullable=true)
	 */
	private $etap;
	
	/**
	 *
	 * @var string @ORM\Column(name="kat", type="string", length=50, nullable=true)
	 */
	private $kat;
	
	/**
	 *
	 * @var string @ORM\Column(name="T1o", type="string", length=20, nullable=true)
	 */
	private $t1o;
	
	/**
	 *
	 * @var string @ORM\Column(name="Mailo", type="string", length=50, nullable=true)
	 */
	private $mailo;
	
	/**
	 *
	 * @var string @ORM\Column(name="DataP", type="string", length=20, nullable=true)
	 */
	private $datap;
	
	/**
	 *
	 * @var string @ORM\Column(name="DatEd", type="string", length=20, nullable=true)
	 */
	private $dated;
	
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
}
