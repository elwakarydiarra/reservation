<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Promo
 *
 * @ORM\Table(name="promo")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PromoRepository")
 */
class Promo
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
     * @var int
     *
     * @ORM\Column(name="nbEleve", type="integer")
     */
    private $nbEleve;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->nom;
    }

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
     * Set nbEleve
     *
     * @param integer $nbEleve
     *
     * @return Promo
     */
    public function setNbEleve($nbEleve)
    {
        $this->nbEleve = $nbEleve;

        return $this;
    }

    /**
     * Get nbEleve
     *
     * @return int
     */
    public function getNbEleve()
    {
        return $this->nbEleve;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Promo
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }
}
