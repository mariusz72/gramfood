<?php
use Doctrine\ORM\Mapping as ORM;

/**
 * Gramfoodklembowplatny
 *
 * @ORM\Table(name="gramfoodklembowplatny")
 * @ORM\Entity
 */
class Gramfoodklembowplatny {
	/**
	 *
	 * @var string @ORM\Column(name="ID", type="string", length=50, nullable=false)
	 *      @ORM\Id
	 *      @ORM\GeneratedValue(strategy="IDENTITY")
	 */
	private $id;
	
	/**
	 *
	 * @var string @ORM\Column(name="IDp", type="string", length=50, nullable=true)
	 */
	private $idp;
	
	/**
	 *
	 * @var string @ORM\Column(name="NrR", type="string", length=50, nullable=true)
	 */
	private $nrr;
	
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
	 * @var string @ORM\Column(name="IDza", type="string", length=50, nullable=true)
	 */
	private $idza;
	
	/**
	 *
	 * @var string @ORM\Column(name="Fak", type="string", length=50, nullable=true)
	 */
	private $fak;
	
	/**
	 *
	 * @var float @ORM\Column(name="Wart", type="float", precision=10, scale=0, nullable=true)
	 */
	private $wart;
	
	/**
	 *
	 * @var string @ORM\Column(name="Wal", type="string", length=10, nullable=true)
	 */
	private $wal;
	
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
	 * @var string @ORM\Column(name="Rejza", type="string", length=50, nullable=true)
	 */
	private $rejza;
	
	/**
	 *
	 * @var string @ORM\Column(name="Ki", type="string", length=5, nullable=true)
	 */
	private $ki;
}
