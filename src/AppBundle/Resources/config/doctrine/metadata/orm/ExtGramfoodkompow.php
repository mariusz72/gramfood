<?php
use Doctrine\ORM\Mapping as ORM;

/**
 * ExtGramfoodkompow
 *
 * @ORM\Table(name="ext_gramfoodkompow")
 * @ORM\Entity
 */
class ExtGramfoodkompow {
	/**
	 *
	 * @var integer @ORM\Column(name="ID", type="integer", nullable=false)
	 *      @ORM\Id
	 *      @ORM\GeneratedValue(strategy="IDENTITY")
	 */
	private $id;
	
	/**
	 *
	 * @var string @ORM\Column(name="Kod", type="string", length=50, nullable=false)
	 */
	private $kod;
	
	/**
	 *
	 * @var string @ORM\Column(name="IDkpl", type="string", length=50, nullable=false)
	 */
	private $idkpl;
	
	/**
	 *
	 * @var string @ORM\Column(name="IDrw", type="string", length=50, nullable=false)
	 */
	private $idrw;
	
	/**
	 *
	 * @var string @ORM\Column(name="IDpz", type="string", length=50, nullable=false)
	 */
	private $idpz;
	
	/**
	 *
	 * @var integer @ORM\Column(name="il", type="integer", nullable=false)
	 */
	private $il;
	
	/**
	 *
	 * @var string @ORM\Column(name="JM", type="string", length=20, nullable=false)
	 */
	private $jm;
	
	/**
	 *
	 * @var \DateTime @ORM\Column(name="Data", type="datetime", nullable=false)
	 */
	private $data;
	
	/**
	 *
	 * @var string @ORM\Column(name="User", type="string", length=50, nullable=false)
	 */
	private $user;
}
