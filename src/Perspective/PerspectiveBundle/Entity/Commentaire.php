<?php

namespace Perspective\PerspectiveBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commentaire
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Perspective\PerspectiveBundle\Repository\CommentaireRepository")
 */
class Commentaire
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
     * @ORM\ManyToOne(targetEntity="Utilisateur\UtilisateurBundle\Entity\Utilisateur", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false,onDelete="CASCADE")
     */
    private $user;

    /**
     * @ORM\ManyToOne(targetEntity="Perspective\PerspectiveBundle\Entity\Publication", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false,onDelete="CASCADE")
     */
    private $publication;

    /**
     * @var string
     *
     * @ORM\Column(name="texte_commentaire", type="text")
     */
    private $texteCommentaire;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_commentaire", type="date")
     */
    private $dateCommentaire;


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
     * Set texteCommentaire
     *
     * @param string $texteCommentaire
     * @return Commentaire
     */
    public function setTexteCommentaire($texteCommentaire)
    {
        $this->texteCommentaire = $texteCommentaire;

        return $this;
    }

    /**
     * Get texteCommentaire
     *
     * @return string 
     */
    public function getTexteCommentaire()
    {
        return $this->texteCommentaire;
    }

    /**
     * Set dateCommentaire
     *
     * @param \DateTime $dateCommentaire
     * @return Commentaire
     */
    public function setDateCommentaire($dateCommentaire)
    {
        $this->dateCommentaire = $dateCommentaire;

        return $this;
    }

    /**
     * Get dateCommentaire
     *
     * @return \DateTime 
     */
    public function getDateCommentaire()
    {
        return $this->dateCommentaire;
    }

    /**
     * Set user
     *
     * @param \Utilisateur\UtilisateurBundle\Entity\Utilisateur $user
     * @return Commentaire
     */
    public function setUser(\Utilisateur\UtilisateurBundle\Entity\Utilisateur $user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \Utilisateur\UtilisateurBundle\Entity\Utilisateur 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set publication
     *
     * @param \Perspective\PerspectiveBundle\Entity\Publication $publication
     * @return Commentaire
     */
    public function setPublication(\Perspective\PerspectiveBundle\Entity\Publication $publication)
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
