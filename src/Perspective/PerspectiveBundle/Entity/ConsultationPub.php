<?php

namespace Perspective\PerspectiveBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ConsultationPub
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Perspective\PerspectiveBundle\Repository\ConsultationPubRepository")
 */
class ConsultationPub
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="Perspective\PerspectiveBundle\Entity\Publication", cascade={"persist"})
     * @ORM\JoinColumn(nullable=true,onDelete="CASCADE")
     */
    private $publication;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_consultation", type="date")
     */
    private $dateConsultation;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set dateConsultation
     *
     * @param \DateTime $dateConsultation
     * @return ConsultationPub
     */
    public function setDateConsultation($dateConsultation)
    {
        $this->dateConsultation = $dateConsultation;

        return $this;
    }

    /**
     * Get dateConsultation
     *
     * @return \DateTime 
     */
    public function getDateConsultation()
    {
        return $this->dateConsultation;
    }

    /**
     * Set publication
     *
     * @param \Perspective\PerspectiveBundle\Entity\Publication $publication
     * @return ConsultationPub
     */
    public function setPublication(\Perspective\PerspectiveBundle\Entity\Publication $publication = null)
    {
        $this->publication = $publication;

        return $this;
    }

    /**
     * Get publication
     *
     * @return \Perspective\PerspectiveBundle\Entity\Publication 
     */
    public function getPublication()
    {
        return $this->publication;
    }
}
