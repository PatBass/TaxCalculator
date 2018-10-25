<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AutoEntreprise
 *
 * @ORM\Table(name="auto_entreprise")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\AutoEntrepriseRepository")
 */
class AutoEntreprise extends Entreprise
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
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    public function getTaxValue($ca)
    {
        $tax = 25 * $ca / 100;
        return $tax;
    }
}

