<?php
use Doctrine\ORM\Mapping as ORM;

/**
 * Gramfoodklembowkom
 *
 * @ORM\Table(name="gramfoodklembowkom")
 * @ORM\Entity
 */
class Gramfoodklembowkom {
	/**
	 *
	 * @var string @ORM\Column(name="ID", type="string", length=50, nullable=false)
	 *      @ORM\Id
	 *      @ORM\GeneratedValue(strategy="IDENTITY")
	 */
	private $id;
	
	/**
	 *
	 * @var string @ORM\Column(name="DoID", type="string", length=50, nullable=true)
	 */
	private $doid;
	
	/**
	 *
	 * @var string @ORM\Column(name="DatN", type="string", length=20, nullable=true)
	 */
	private $datn;
	
	/**
	 *
	 * @var string @ORM\Column(name="DatO", type="string", length=20, nullable=true)
	 */
	private $dato;
	
	/**
	 *
	 * @var string @ORM\Column(name="AlN", type="string", length=50, nullable=true)
	 */
	private $aln;
	
	/**
	 *
	 * @var string @ORM\Column(name="AlO", type="string", length=250, nullable=true)
	 */
	private $alo;
	
	/**
	 *
	 * @var string @ORM\Column(name="Alias", type="string", length=50, nullable=true)
	 */
	private $alias;
	
	/**
	 *
	 * @var string @ORM\Column(name="IDo", type="string", length=50, nullable=true)
	 */
	private $ido;
	
	/**
	 *
	 * @var string @ORM\Column(name="Nrr", type="string", length=50, nullable=true)
	 */
	private $nrr;
	
	/**
	 *
	 * @var string @ORM\Column(name="IDd", type="string", length=50, nullable=true)
	 */
	private $idd;
	
	/**
	 *
	 * @var string @ORM\Column(name="Typ", type="string", length=5, nullable=true)
	 */
	private $typ;
	
	/**
	 *
	 * @var string @ORM\Column(name="Ro", type="string", length=50, nullable=true)
	 */
	private $ro;
	
	/**
	 *
	 * @var string @ORM\Column(name="Tekst", type="text", length=16777215, nullable=true)
	 */
	private $tekst;
	
	/**
	 *
	 * @var string @ORM\Column(name="Opis", type="text", length=16777215, nullable=true)
	 */
	private $opis;
	
	/**
	 *
	 * @var string @ORM\Column(name="Wazn", type="string", length=10, nullable=true)
	 */
	private $wazn;
	
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
}
