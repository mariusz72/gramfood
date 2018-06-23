<?php
use Doctrine\ORM\Mapping as ORM;

/**
 * Gramfoodklembowuzytak
 *
 * @ORM\Table(name="gramfoodklembowuzytak")
 * @ORM\Entity
 */
class Gramfoodklembowuzytak {
	/**
	 *
	 * @var string @ORM\Column(name="ID", type="string", length=50, nullable=false)
	 *      @ORM\Id
	 *      @ORM\GeneratedValue(strategy="IDENTITY")
	 */
	private $id;
	
	/**
	 *
	 * @var string @ORM\Column(name="Alias", type="string", length=50, nullable=true)
	 */
	private $alias;
	
	/**
	 *
	 * @var string @ORM\Column(name="Komp", type="string", length=100, nullable=true)
	 */
	private $komp;
}
