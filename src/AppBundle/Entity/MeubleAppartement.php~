<?php

// src/AppBundle/Entity/MeubleAppartement.php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserRoom
 *
 * @ORM\Table(name="meuble_appartement")
 * @ORM\Entity
 */
class MeubleAppartement
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="appart_id", type="integer", nullable=true)
     */
    private $appartId;

    /**
     * @var integer
     *
     * @ORM\Column(name="meuble_id", type="integer", nullable=true)
     */
    private $meubleId;

    

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
     * Set appartId
     *
     * @param integer $appartId
     * @return MeubleAppartement
     */
    public function setAppartId($appartId)
    {
        $this->appartId = $appartId;

        return $this;
    }

    /**
     * Get appartId
     *
     * @return integer 
     */
    public function getAppartId()
    {
        return $this->appartId;
    }

    /**
     * Set meubleId
     *
     * @param integer $meubleId
     * @return MeubleAppartement
     */
    public function setMeubleId($meubleId)
    {
        $this->meubleId = $meubleId;

        return $this;
    }

    /**
     * Get meubleId
     *
     * @return integer 
     */
    public function getMeubleId()
    {
        return $this->meubleId;
    }
}
