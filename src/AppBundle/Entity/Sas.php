<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sas
 *
 * @ORM\Table(name="sas")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\SasRepository")
 */
class Sas extends Entreprise
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse_siege", type="string", length=255)
     */
    private $adresseSiege;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set adresseSiege
     *
     * @param string $adresseSiege
     *
     * @return Sas
     */
    public function setAdresseSiege($adresseSiege)
    {
        $this->adresseSiege = $adresseSiege;

        return $this;
    }

    /**
     * Get adresseSiege
     *
     * @return string
     */
    public function getAdresseSiege()
    {
        return $this->adresseSiege;
    }

    public function getTaxValue($ca)
    {
        $ca = (float)$ca;
        $tax = 33 * $ca / 100;
        return $tax;
    }
}

