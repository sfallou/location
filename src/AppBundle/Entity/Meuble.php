<?php

// src/AppBundle/Entity/Meuble.php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="meuble")
 */
class Meuble
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
     * @ORM\Column(type="integer")
     */
    private $id_type;

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
     * @return Meuble
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
     * Set id_type
     *
     * @param integer $idType
     * @return Meuble
     */
    public function setIdType($idType)
    {
        $this->id_type = $idType;

        return $this;
    }

    /**
     * Get id_type
     *
     * @return integer 
     */
    public function getIdType()
    {
        return $this->id_type;
    }
}
