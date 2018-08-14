<?php
use Doctrine\ORM\Mapping as ORM;

/**
 * Gramfoodklembowlogfirmy
 *
 * @ORM\Table(name="gramfoodklembowlogfirmy")
 * @ORM\Entity
 */
class Gramfoodklembowlogfirmy {
	/**
	 *
	 * @var integer @ORM\Column(name="ID", type="integer", nullable=false)
	 *      @ORM\Id
	 *      @ORM\GeneratedValue(strategy="IDENTITY")
	 */
	private $id;
	
	/**
	 *
	 * @var string @ORM\Column(name="data", type="string", length=20, nullable=true)
	 */
	private $data;
	
	/**
	 *
	 * @var string @ORM\Column(name="firma", type="string", length=50, nullable=true)
	 */
	private $firma;
	
	/**
	 *
	 * @var string @ORM\Column(name="uz", type="string", length=50, nullable=true)
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
}
