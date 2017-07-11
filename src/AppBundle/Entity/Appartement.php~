<?php

// src/AppBundle/Entity/Appartement.php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="appartement")
 */
class Appartement
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    /**
     * @ORM\Column(type="string", length=100)
     */
    private $adresse;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $surface;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $wifi_code;


   /**
     * @ORM\Column(type="string", length=100)
     */
    private $contact_appart;

    /**
     * @ORM\Column(type="integer")
     */
    private $id_residence;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $phone;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $rib;
    

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
     * Set adresse
     *
     * @param string $adresse
     * @return Appartement
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string 
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set surface
     *
     * @param string $surface
     * @return Appartement
     */
    public function setSurface($surface)
    {
        $this->surface = $surface;

        return $this;
    }

    /**
     * Get surface
     *
     * @return string 
     */
    public function getSurface()
    {
        return $this->surface;
    }

    /**
     * Set wifi_code
     *
     * @param string $wifiCode
     * @return Appartement
     */
    public function setWifiCode($wifiCode)
    {
        $this->wifi_code = $wifiCode;

        return $this;
    }

    /**
     * Get wifi_code
     *
     * @return string 
     */
    public function getWifiCode()
    {
        return $this->wifi_code;
    }

    /**
     * Set contact_appart
     *
     * @param string $contactAppart
     * @return Appartement
     */
    public function setContactAppart($contactAppart)
    {
        $this->contact_appart = $contactAppart;

        return $this;
    }

    /**
     * Get contact_appart
     *
     * @return string 
     */
    public function getContactAppart()
    {
        return $this->contact_appart;
    }

    /**
     * Set id_residence
     *
     * @param integer $idResidence
     * @return Appartement
     */
    public function setIdResidence($idResidence)
    {
        $this->id_residence = $idResidence;

        return $this;
    }

    /**
     * Get id_residence
     *
     * @return integer 
     */
    public function getIdResidence()
    {
        return $this->id_residence;
    }

    /**
     * Set phone
     *
     * @param string $phone
     * @return Appartement
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return string 
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set rib
     *
     * @param string $rib
     * @return Appartement
     */
    public function setRib($rib)
    {
        $this->rib = $rib;

        return $this;
    }

    /**
     * Get rib
     *
     * @return string 
     */
    public function getRib()
    {
        return $this->rib;
    }
    /**
     * @var string
     */
    private $wifiCode;

    /**
     * @var string
     */
    private $contactAppart;

    /**
     * @var integer
     */
    private $idResidence;


}
