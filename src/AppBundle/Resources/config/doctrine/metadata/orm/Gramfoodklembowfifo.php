<?php
use Doctrine\ORM\Mapping as ORM;

/**
 * Gramfoodklembowfifo
 *
 * @ORM\Table(name="gramfoodklembowfifo")
 * @ORM\Entity
 */
class Gramfoodklembowfifo {
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
	 * @var string @ORM\Column(name="IDr", type="string", length=50, nullable=true)
	 */
	private $idr;
	
	/**
	 *
	 * @var string @ORM\Column(name="Nrp", type="string", length=50, nullable=true)
	 */
	private $nrp;
	
	/**
	 *
	 * @var string @ORM\Column(name="Nrr", type="string", length=50, nullable=true)
	 */
	private $nrr;
	
	/**
	 *
	 * @var string @ORM\Column(name="Dap", type="string", length=20, nullable=true)
	 */
	private $dap;
	
	/**
	 *
	 * @var string @ORM\Column(name="Dar", type="string", length=20, nullable=true)
	 */
	private $dar;
	
	/**
	 *
	 * @var string @ORM\Column(name="Te", type="string", length=250, nullable=true)
	 */
	private $te;
	
	/**
	 *
	 * @var float @ORM\Column(name="ile", type="float", precision=10, scale=0, nullable=true)
	 */
	private $ile;
	
	/**
	 *
	 * @var float @ORM\Column(name="cz", type="float", precision=10, scale=0, nullable=true)
	 */
	private $cz;
	
	/**
	 *
	 * @var float @ORM\Column(name="cs", type="float", precision=10, scale=0, nullable=true)
	 */
	private $cs;
	
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
}
