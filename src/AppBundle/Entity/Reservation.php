<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\ManyToOne as ManyToOne;
use Doctrine\ORM\Mapping\JoinColumn as JoinColumn;
/**
 * Reservation
 *
 * @ORM\Table(name="reservation")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ReservationRepository")
 */
class Reservation
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
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date")
     */
    private $date;

    /**
     * @var boolean
     *
     * @ORM\Column(name="horaire", type="boolean", length=255)
     */
    private $horaire;

    /**
     * @ManyToOne(targetEntity="Promo")
     * @JoinColumn(name="promo_id", referencedColumnName="id")
     */
    private $promo;

    /**
     * @ManyToOne(targetEntity="Formateur")
     * @JoinColumn(name="formateur_id", referencedColumnName="id")
     */
    private $formateur;


    /**
     * @ManyToOne(targetEntity="Salle")
     * @JoinColumn(name="salle_id", referencedColumnName="id")
     */
    private $salle;


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
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Reservation
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set horaire
     *
     * @param string $horaire
     *
     * @return Reservation
     */
    public function setHoraire($horaire)
    {
        $this->horaire = $horaire;

        return $this;
    }

    /**
     * Get horaire
     *
     * @return string
     */
    public function getHoraire()
    {
        return $this->horaire;
    }

    /**
     * Set promo
     *
     * @param \AppBundle\Entity\Promo $promo
     *
     * @return Reservation
     */
    public function setPromo(\AppBundle\Entity\Promo $promo = null)
    {
        $this->promo = $promo;

        return $this;
    }

    /**
     * Get promo
     *
     * @return \AppBundle\Entity\Promo
     */
    public function getPromo()
    {
        return $this->promo;
    }


    /**
     * Set salle
     *
     * @param \AppBundle\Entity\Salle $salle
     *
     * @return Reservation
     */
    public function setSalle(\AppBundle\Entity\Salle $salle = null)
    {
        $this->salle = $salle;

        return $this;
    }

    /**
     * Get salle
     *
     * @return \AppBundle\Entity\Salle
     */
    public function getSalle()
    {
        return $this->salle;
    }


    /**
     * Set formateur
     *
     * @param \AppBundle\Entity\Formateur $formateur
     *
     * @return Reservation
     */
    public function setFormateur(\AppBundle\Entity\Formateur $formateur = null)
    {
        $this->formateur = $formateur;

        return $this;
    }

    /**
     * Get formateur
     *
     * @return \AppBundle\Entity\Formateur
     */
    public function getFormateur()
    {
        return $this->formateur;
    }
}
