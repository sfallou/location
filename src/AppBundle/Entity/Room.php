<?php

// src/AppBundle/Entity/Room.php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="room")
 */
class Room
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
    private $surface;

    /**
     * @ORM\Column(type="integer")
     */
    private $rent;

    /**
     * @ORM\Column(type="integer")
     */
    private $guarantee;

    /**
     * @ORM\Column(type="integer")
     */
    private $id_appart;

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
     * Set surface
     *
     * @param string $surface
     * @return Room
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
     * Set rent
     *
     * @param integer $rent
     * @return Room
     */
    public function setRent($rent)
    {
        $this->rent = $rent;

        return $this;
    }

    /**
     * Get rent
     *
     * @return integer 
     */
    public function getRent()
    {
        return $this->rent;
    }

    /**
     * Set guarantee
     *
     * @param integer $guarantee
     * @return Room
     */
    public function setGuarantee($guarantee)
    {
        $this->guarantee = $guarantee;

        return $this;
    }

    /**
     * Get guarantee
     *
     * @return integer 
     */
    public function getGuarantee()
    {
        return $this->guarantee;
    }

    /**
     * Set id_appart
     *
     * @param integer $idAppart
     * @return Room
     */
    public function setIdAppart($idAppart)
    {
        $this->id_appart = $idAppart;

        return $this;
    }

    /**
     * Get id_appart
     *
     * @return integer 
     */
    public function getIdAppart()
    {
        return $this->id_appart;
    }
    /**
     * @var integer
     */
    private $idAppart;


}
