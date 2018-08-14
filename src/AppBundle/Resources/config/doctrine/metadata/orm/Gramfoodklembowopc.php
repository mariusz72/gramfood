<?php
use Doctrine\ORM\Mapping as ORM;

/**
 * Gramfoodklembowopc
 *
 * @ORM\Table(name="gramfoodklembowopc")
 * @ORM\Entity
 */
class Gramfoodklembowopc {
	/**
	 *
	 * @var string @ORM\Column(name="ID", type="string", length=50, nullable=false)
	 *      @ORM\Id
	 *      @ORM\GeneratedValue(strategy="IDENTITY")
	 */
	private $id;
	
	/**
	 *
	 * @var integer @ORM\Column(name="Nr", type="integer", nullable=true)
	 */
	private $nr;
	
	/**
	 *
	 * @var string @ORM\Column(name="Nopc", type="string", length=50, nullable=true)
	 */
	private $nopc;
	
	/**
	 *
	 * @var string @ORM\Column(name="Nwar", type="string", length=50, nullable=true)
	 */
	private $nwar;
	
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
	 * @var string @ORM\Column(name="DoID", type="string", length=50, nullable=true)
	 */
	private $doid;
	
	/**
	 *
	 * @var string @ORM\Column(name="Kod", type="string", length=50, nullable=true)
	 */
	private $kod;
	
	/**
	 *
	 * @var string @ORM\Column(name="kods", type="string", length=50, nullable=true)
	 */
	private $kods;
	
	/**
	 *
	 * @var string @ORM\Column(name="zid", type="string", length=50, nullable=true)
	 */
	private $zid;
	
	/**
	 *
	 * @var string @ORM\Column(name="kolo", type="string", length=10, nullable=true)
	 */
	private $kolo;
}
