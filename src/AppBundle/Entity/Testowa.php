<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Testowa
 *
 * @ORM\Table(name="testowa")
 * @ORM\Entity
 */
class Testowa
{
    /**
     * @var string
     *
     * @ORM\Column(name="imie", type="string", length=50, nullable=false)
     */
    private $imie;

    /**
     * @var string
     *
     * @ORM\Column(name="nazwisko", type="string", length=50, nullable=false)
     */
    private $nazwisko;

    /**
     * @var integer
     *
     * @ORM\Column(name="wiek", type="integer", nullable=false)
     */
    private $wiek;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set imie
     *
     * @param string $imie
     * @return Testowa
     */
    public function setImie($imie)
    {
        $this->imie = $imie;

        return $this;
    }

    /**
     * Get imie
     *
     * @return string 
     */
    public function getImie()
    {
        return $this->imie;
    }

    /**
     * Set nazwisko
     *
     * @param string $nazwisko
     * @return Testowa
     */
    public function setNazwisko($nazwisko)
    {
        $this->nazwisko = $nazwisko;

        return $this;
    }

    /**
     * Get nazwisko
     *
     * @return string 
     */
    public function getNazwisko()
    {
        return $this->nazwisko;
    }

    /**
     * Set wiek
     *
     * @param integer $wiek
     * @return Testowa
     */
    public function setWiek($wiek)
    {
        $this->wiek = $wiek;

        return $this;
    }

    /**
     * Get wiek
     *
     * @return integer 
     */
    public function getWiek()
    {
        return $this->wiek;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}
