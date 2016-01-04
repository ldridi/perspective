<?php
// src/AppBundle/Entity/User.php

namespace Utilisateur\UtilisateurBundle\Entity;

use FOS\UserBundle\Entity\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="Utilisateur")
 */
class Utilisateur extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    public function __construct()
    {
        parent::__construct();
        // your own logic
    }

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_ajout_user", type="date")
     */
    private $dateAjoutUser;

    /**
     * @var string
     *
     * @ORM\Column(name="code_user", type="string", length=100,nullable=true)
     */
    private $codeUser;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_user", type="string", length=100,nullable=true)
     */
    private $nomUser;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom_user", type="string", length=100,nullable=true)
     */
    private $prenomUser;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse_user", type="string", length=200,nullable=true)
     */
    private $adresseUser;

    /**
     * @var string
     *
     * @ORM\Column(name="sexe_user", type="string", length=100,nullable=true)
     */
    private $sexeUser;

    /**
     * @var string
     *
     * @ORM\Column(name="description_user", type="text",nullable=true)
     */
    private $descriptionUser;

    /**
     * @var string
     *
     * @ORM\Column(name="titre_user", type="text",nullable=true)
     */
    private $titreUser;

    /**
     * @var string
     *
     * @ORM\Column(name="ville_user", type="string", length=100,nullable=true)
     */
    private $villeUser;

    /**
     * @var string
     *
     * @ORM\Column(name="etat_user", type="string", length=100,nullable=true)
     */
    private $etatUser;

    /**
     * @var string
     *
     * @ORM\Column(name="tel_user", type="string", length=100,nullable=true)
     */
    private $telUser;

    /**
     * @var string
     *
     * @ORM\Column(name="site_user", type="string", length=100,nullable=true)
     */
    private $siteUser;



    /**
     * Set dateAjoutUser
     *
     * @param \DateTime $dateAjoutUser
     * @return Utilisateur
     */
    public function setDateAjoutUser($dateAjoutUser)
    {
        $this->dateAjoutUser = $dateAjoutUser;

        return $this;
    }

    /**
     * Get dateAjoutUser
     *
     * @return \DateTime 
     */
    public function getDateAjoutUser()
    {
        return $this->dateAjoutUser;
    }

    /**
     * Set codeUser
     *
     * @param string $codeUser
     * @return Utilisateur
     */
    public function setCodeUser($codeUser)
    {
        $this->codeUser = $codeUser;

        return $this;
    }

    /**
     * Get codeUser
     *
     * @return string 
     */
    public function getCodeUser()
    {
        return $this->codeUser;
    }

    /**
     * Set nomUser
     *
     * @param string $nomUser
     * @return Utilisateur
     */
    public function setNomUser($nomUser)
    {
        $this->nomUser = $nomUser;

        return $this;
    }

    /**
     * Get nomUser
     *
     * @return string 
     */
    public function getNomUser()
    {
        return $this->nomUser;
    }

    /**
     * Set prenomUser
     *
     * @param string $prenomUser
     * @return Utilisateur
     */
    public function setPrenomUser($prenomUser)
    {
        $this->prenomUser = $prenomUser;

        return $this;
    }

    /**
     * Get prenomUser
     *
     * @return string 
     */
    public function getPrenomUser()
    {
        return $this->prenomUser;
    }

    /**
     * Set adresseUser
     *
     * @param string $adresseUser
     * @return Utilisateur
     */
    public function setAdresseUser($adresseUser)
    {
        $this->adresseUser = $adresseUser;

        return $this;
    }

    /**
     * Get adresseUser
     *
     * @return string 
     */
    public function getAdresseUser()
    {
        return $this->adresseUser;
    }

    /**
     * Set sexeUser
     *
     * @param string $sexeUser
     * @return Utilisateur
     */
    public function setSexeUser($sexeUser)
    {
        $this->sexeUser = $sexeUser;

        return $this;
    }

    /**
     * Get sexeUser
     *
     * @return string 
     */
    public function getSexeUser()
    {
        return $this->sexeUser;
    }

    /**
     * Set descriptionUser
     *
     * @param string $descriptionUser
     * @return Utilisateur
     */
    public function setDescriptionUser($descriptionUser)
    {
        $this->descriptionUser = $descriptionUser;

        return $this;
    }

    /**
     * Get descriptionUser
     *
     * @return string 
     */
    public function getDescriptionUser()
    {
        return $this->descriptionUser;
    }

    /**
     * Set titreUser
     *
     * @param string $titreUser
     * @return Utilisateur
     */
    public function setTitreUser($titreUser)
    {
        $this->titreUser = $titreUser;

        return $this;
    }

    /**
     * Get titreUser
     *
     * @return string 
     */
    public function getTitreUser()
    {
        return $this->titreUser;
    }

    /**
     * Set villeUser
     *
     * @param string $villeUser
     * @return Utilisateur
     */
    public function setVilleUser($villeUser)
    {
        $this->villeUser = $villeUser;

        return $this;
    }

    /**
     * Get villeUser
     *
     * @return string 
     */
    public function getVilleUser()
    {
        return $this->villeUser;
    }

    /**
     * Set etatUser
     *
     * @param string $etatUser
     * @return Utilisateur
     */
    public function setEtatUser($etatUser)
    {
        $this->etatUser = $etatUser;

        return $this;
    }

    /**
     * Get etatUser
     *
     * @return string 
     */
    public function getEtatUser()
    {
        return $this->etatUser;
    }

    /**
     * Set telUser
     *
     * @param string $telUser
     * @return Utilisateur
     */
    public function setTelUser($telUser)
    {
        $this->telUser = $telUser;

        return $this;
    }

    /**
     * Get telUser
     *
     * @return string 
     */
    public function getTelUser()
    {
        return $this->telUser;
    }

    /**
     * Set siteUser
     *
     * @param string $siteUser
     * @return Utilisateur
     */
    public function setSiteUser($siteUser)
    {
        $this->siteUser = $siteUser;

        return $this;
    }

    /**
     * Get siteUser
     *
     * @return string 
     */
    public function getSiteUser()
    {
        return $this->siteUser;
    }
}
