<?php

namespace Utilisateur\UtilisateurBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Follow
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Utilisateur\UtilisateurBundle\Repository\FollowRepository")
 */
class Follow
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
     * @ORM\ManyToOne(targetEntity="Utilisateur\UtilisateurBundle\Entity\Utilisateur", cascade={"persist","remove"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $followBy;

    /**
     * @ORM\ManyToOne(targetEntity="Utilisateur\UtilisateurBundle\Entity\Utilisateur", cascade={"persist","remove"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $followed;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_follow", type="date")
     */
    private $dateFollow;


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
     * Set dateFollow
     *
     * @param \DateTime $dateFollow
     * @return Follow
     */
    public function setDateFollow($dateFollow)
    {
        $this->dateFollow = $dateFollow;

        return $this;
    }

    /**
     * Get dateFollow
     *
     * @return \DateTime 
     */
    public function getDateFollow()
    {
        return $this->dateFollow;
    }

    /**
     * Set followBy
     *
     * @param \Utilisateur\UtilisateurBundle\Entity\Utilisateur $followBy
     * @return Follow
     */
    public function setFollowBy(\Utilisateur\UtilisateurBundle\Entity\Utilisateur $followBy = null)
    {
        $this->followBy = $followBy;

        return $this;
    }

    /**
     * Get followBy
     *
     * @return \Utilisateur\UtilisateurBundle\Entity\Utilisateur 
     */
    public function getFollowBy()
    {
        return $this->followBy;
    }

    /**
     * Set followed
     *
     * @param \Utilisateur\UtilisateurBundle\Entity\Utilisateur $followed
     * @return Follow
     */
    public function setFollowed(\Utilisateur\UtilisateurBundle\Entity\Utilisateur $followed = null)
    {
        $this->followed = $followed;

        return $this;
    }

    /**
     * Get followed
     *
     * @return \Utilisateur\UtilisateurBundle\Entity\Utilisateur 
     */
    public function getFollowed()
    {
        return $this->followed;
    }
}
