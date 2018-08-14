<?php
use Doctrine\ORM\Mapping as ORM;

/**
 * Gramfoodklembowwysad
 *
 * @ORM\Table(name="gramfoodklembowwysad")
 * @ORM\Entity
 */
class Gramfoodklembowwysad {
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
	 * @var string @ORM\Column(name="DataW", type="string", length=20, nullable=true)
	 */
	private $dataw;
	
	/**
	 *
	 * @var string @ORM\Column(name="tel", type="string", length=50, nullable=true)
	 */
	private $tel;
	
	/**
	 *
	 * @var string @ORM\Column(name="mail", type="string", length=100, nullable=true)
	 */
	private $mail;
	
	/**
	 *
	 * @var string @ORM\Column(name="Alias", type="string", length=50, nullable=true)
	 */
	private $alias;
	
	/**
	 *
	 * @var string @ORM\Column(name="IDk", type="string", length=50, nullable=true)
	 */
	private $idk;
	
	/**
	 *
	 * @var string @ORM\Column(name="IDos", type="string", length=50, nullable=true)
	 */
	private $idos;
	
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
}
