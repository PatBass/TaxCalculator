<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entreprise
 *
 * @ORM\Table(name="entreprise")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\EntrepriseRepository")
 */
abstract class Entreprise
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
     * @ORM\Column(name="numero_siret", type="string", length=255)
     */
    private $numeroSiret;

    /**
     * @var string
     *
     * @ORM\Column(name="denomination", type="string", length=255)
     */
    private $denomination;

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
     * Set numeroSiret
     *
     * @param string $numeroSiret
     *
     * @return Entreprise
     */
    public function setNumeroSiret($numeroSiret)
    {
        $this->numeroSiret = $numeroSiret;

        return $this;
    }

    /**
     * Get numeroSiret
     *
     * @return string
     */
    public function getNumeroSiret()
    {
        return $this->numeroSiret;
    }

    /**
     * Set denomination
     *
     * @param string $denomination
     *
     * @return Entreprise
     */
    public function setDenomination($denomination)
    {
        $this->denomination = $denomination;

        return $this;
    }

    /**
     * Get denomination
     *
     * @return string
     */
    public function getDenomination()
    {
        return $this->denomination;
    }

    abstract function getTaxValue($ca);

}

