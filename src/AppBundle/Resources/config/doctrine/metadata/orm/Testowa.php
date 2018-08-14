<?php
use Doctrine\ORM\Mapping as ORM;

/**
 * Testowa
 *
 * @ORM\Table(name="testowa")
 * @ORM\Entity
 */
class Testowa {
	/**
	 *
	 * @var integer @ORM\Column(name="id", type="integer", nullable=false)
	 *      @ORM\Id
	 *      @ORM\GeneratedValue(strategy="IDENTITY")
	 */
	private $id;
	
	/**
	 *
	 * @var string @ORM\Column(name="imie", type="string", length=50, nullable=false)
	 */
	private $imie;
	
	/**
	 *
	 * @var string @ORM\Column(name="nazwisko", type="string", length=50, nullable=false)
	 */
	private $nazwisko;
	
	/**
	 *
	 * @var integer @ORM\Column(name="wiek", type="integer", nullable=false)
	 */
	private $wiek;
}
