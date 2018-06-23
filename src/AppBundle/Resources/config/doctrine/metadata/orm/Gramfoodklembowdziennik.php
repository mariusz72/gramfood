<?php
use Doctrine\ORM\Mapping as ORM;

/**
 * Gramfoodklembowdziennik
 *
 * @ORM\Table(name="gramfoodklembowdziennik")
 * @ORM\Entity
 */
class Gramfoodklembowdziennik {
	/**
	 *
	 * @var string @ORM\Column(name="ID", type="string", length=50, nullable=false)
	 *      @ORM\Id
	 *      @ORM\GeneratedValue(strategy="IDENTITY")
	 */
	private $id;
	
	/**
	 *
	 * @var string @ORM\Column(name="Data", type="string", length=50, nullable=true)
	 */
	private $data;
	
	/**
	 *
	 * @var string @ORM\Column(name="Typ", type="string", length=50, nullable=true)
	 */
	private $typ;
	
	/**
	 *
	 * @var string @ORM\Column(name="Oper", type="string", length=50, nullable=true)
	 */
	private $oper;
	
	/**
	 *
	 * @var string @ORM\Column(name="Opis", type="string", length=250, nullable=true)
	 */
	private $opis;
	
	/**
	 *
	 * @var string @ORM\Column(name="UZ", type="string", length=50, nullable=true)
	 */
	private $uz;
	
	/**
	 *
	 * @var string @ORM\Column(name="Anul", type="string", length=1, nullable=true)
	 */
	private $anul;
	
	/**
	 *
	 * @var string @ORM\Column(name="Akt", type="string", length=1, nullable=true)
	 */
	private $akt;
	
	/**
	 *
	 * @var integer @ORM\Column(name="Wers", type="integer", nullable=true)
	 */
	private $wers;
}
