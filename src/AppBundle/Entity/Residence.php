<?php

// src/AppBundle/Entity/Residence.php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="residence")
 */
class Residence
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
    private $name;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $contact_gardien;
    /**
     * @ORM\Column(type="text")
     */
    private $horaire_gardien;

   /**
     * @ORM\Column(type="string", length=100)
     */
    private $contact_syndic;

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
     * Set name
     *
     * @param string $name
     * @return Residence
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set contact_gardien
     *
     * @param string $contactGardien
     * @return Residence
     */
    public function setContactGardien($contactGardien)
    {
        $this->contact_gardien = $contactGardien;

        return $this;
    }

    /**
     * Get contact_gardien
     *
     * @return string 
     */
    public function getContactGardien()
    {
        return $this->contact_gardien;
    }

    /**
     * Set horaire_gardien
     *
     * @param string $horaireGardien
     * @return Residence
     */
    public function setHoraireGardien($horaireGardien)
    {
        $this->horaire_gardien = $horaireGardien;

        return $this;
    }

    /**
     * Get horaire_gardien
     *
     * @return string 
     */
    public function getHoraireGardien()
    {
        return $this->horaire_gardien;
    }

    /**
     * Set contact_syndic
     *
     * @param string $contactSyndic
     * @return Residence
     */
    public function setContactSyndic($contactSyndic)
    {
        $this->contact_syndic = $contactSyndic;

        return $this;
    }

    /**
     * Get contact_syndic
     *
     * @return string 
     */
    public function getContactSyndic()
    {
        return $this->contact_syndic;
    }
    /**
     * @var string
     */
    private $contactGardien;

    /**
     * @var string
     */
    private $horaireGardien;

    /**
     * @var string
     */
    private $contactSyndic;


}
