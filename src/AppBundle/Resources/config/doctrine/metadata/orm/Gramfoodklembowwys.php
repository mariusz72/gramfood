<?php
use Doctrine\ORM\Mapping as ORM;

/**
 * Gramfoodklembowwys
 *
 * @ORM\Table(name="gramfoodklembowwys")
 * @ORM\Entity
 */
class Gramfoodklembowwys {
	/**
	 *
	 * @var string @ORM\Column(name="ID", type="string", length=50, nullable=false)
	 *      @ORM\Id
	 *      @ORM\GeneratedValue(strategy="IDENTITY")
	 */
	private $id;
	
	/**
	 *
	 * @var integer @ORM\Column(name="Stan", type="integer", nullable=true)
	 */
	private $stan;
	
	/**
	 *
	 * @var string @ORM\Column(name="jak", type="string", length=10, nullable=true)
	 */
	private $jak;
	
	/**
	 *
	 * @var string @ORM\Column(name="Data", type="string", length=20, nullable=true)
	 */
	private $data;
	
	/**
	 *
	 * @var string @ORM\Column(name="DataW", type="string", length=20, nullable=true)
	 */
	private $dataw;
	
	/**
	 *
	 * @var string @ORM\Column(name="Nagl", type="string", length=250, nullable=true)
	 */
	private $nagl;
	
	/**
	 *
	 * @var string @ORM\Column(name="Tekst", type="text", length=16777215, nullable=true)
	 */
	private $tekst;
	
	/**
	 *
	 * @var string @ORM\Column(name="Teksto", type="text", length=16777215, nullable=true)
	 */
	private $teksto;
	
	/**
	 *
	 * @var string @ORM\Column(name="NrR", type="string", length=50, nullable=true)
	 */
	private $nrr;
	
	/**
	 *
	 * @var string @ORM\Column(name="IDd", type="string", length=150, nullable=true)
	 */
	private $idd;
	
	/**
	 *
	 * @var string @ORM\Column(name="RFd", type="string", length=50, nullable=true)
	 */
	private $rfd;
	
	/**
	 *
	 * @var string @ORM\Column(name="Alias", type="string", length=50, nullable=true)
	 */
	private $alias;
	
	/**
	 *
	 * @var integer @ORM\Column(name="ile", type="integer", nullable=true)
	 */
	private $ile;
	
	/**
	 *
	 * @var integer @ORM\Column(name="Rea", type="integer", nullable=true)
	 */
	private $rea;
	
	/**
	 *
	 * @var string @ORM\Column(name="Te", type="text", length=16777215, nullable=true)
	 */
	private $te;
	
	/**
	 *
	 * @var string @ORM\Column(name="UZ", type="string", length=50, nullable=true)
	 */
	private $uz;
	
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
	 * @var string @ORM\Column(name="UID", type="string", length=50, nullable=true)
	 */
	private $uid;
	
	/**
	 *
	 * @var string @ORM\Column(name="Mailw", type="string", length=100, nullable=true)
	 */
	private $mailw;
}
