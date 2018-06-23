<?php
use Doctrine\ORM\Mapping as ORM;

/**
 * Gramfoodklembowcenniki
 *
 * @ORM\Table(name="gramfoodklembowcenniki")
 * @ORM\Entity
 */
class Gramfoodklembowcenniki {
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
	 * @var string @ORM\Column(name="typ", type="string", length=5, nullable=true)
	 */
	private $typ;
	
	/**
	 *
	 * @var integer @ORM\Column(name="nr", type="integer", nullable=true)
	 */
	private $nr;
	
	/**
	 *
	 * @var string @ORM\Column(name="alias", type="string", length=50, nullable=true)
	 */
	private $alias;
	
	/**
	 *
	 * @var string @ORM\Column(name="gr", type="string", length=50, nullable=true)
	 */
	private $gr;
	
	/**
	 *
	 * @var string @ORM\Column(name="kod", type="string", length=50, nullable=true)
	 */
	private $kod;
	
	/**
	 *
	 * @var string @ORM\Column(name="gp", type="string", length=10, nullable=true)
	 */
	private $gp;
	
	/**
	 *
	 * @var string @ORM\Column(name="NB", type="string", length=10, nullable=true)
	 */
	private $nb;
	
	/**
	 *
	 * @var string @ORM\Column(name="nazw", type="string", length=250, nullable=true)
	 */
	private $nazw;
	
	/**
	 *
	 * @var string @ORM\Column(name="nvat", type="string", length=10, nullable=true)
	 */
	private $nvat;
	
	/**
	 *
	 * @var float @ORM\Column(name="vat", type="float", precision=10, scale=0, nullable=true)
	 */
	private $vat;
	
	/**
	 *
	 * @var string @ORM\Column(name="jm", type="string", length=10, nullable=true)
	 */
	private $jm;
	
	/**
	 *
	 * @var float @ORM\Column(name="cd", type="float", precision=10, scale=0, nullable=true)
	 */
	private $cd;
	
	/**
	 *
	 * @var float @ORM\Column(name="pcd", type="float", precision=10, scale=0, nullable=true)
	 */
	private $pcd;
	
	/**
	 *
	 * @var string @ORM\Column(name="wal", type="string", length=10, nullable=true)
	 */
	private $wal;
	
	/**
	 *
	 * @var float @ORM\Column(name="c1", type="float", precision=10, scale=0, nullable=true)
	 */
	private $c1;
	
	/**
	 *
	 * @var float @ORM\Column(name="pc1", type="float", precision=10, scale=0, nullable=true)
	 */
	private $pc1;
	
	/**
	 *
	 * @var float @ORM\Column(name="c2", type="float", precision=10, scale=0, nullable=true)
	 */
	private $c2;
	
	/**
	 *
	 * @var float @ORM\Column(name="pc2", type="float", precision=10, scale=0, nullable=true)
	 */
	private $pc2;
	
	/**
	 *
	 * @var float @ORM\Column(name="c3", type="float", precision=10, scale=0, nullable=true)
	 */
	private $c3;
	
	/**
	 *
	 * @var float @ORM\Column(name="pc3", type="float", precision=10, scale=0, nullable=true)
	 */
	private $pc3;
	
	/**
	 *
	 * @var string @ORM\Column(name="uz", type="string", length=50, nullable=true)
	 */
	private $uz;
	
	/**
	 *
	 * @var integer @ORM\Column(name="lok", type="integer", nullable=true)
	 */
	private $lok;
	
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
	 * @var string @ORM\Column(name="Opis", type="text", length=16777215, nullable=true)
	 */
	private $opis;
	
	/**
	 *
	 * @var string @ORM\Column(name="Kat", type="string", length=50, nullable=true)
	 */
	private $kat;
}
