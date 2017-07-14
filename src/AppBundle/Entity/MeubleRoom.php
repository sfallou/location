<?php

// src/AppBundle/Entity/MeubleRoom.php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserRoom
 *
 * @ORM\Table(name="meuble_room")
 * @ORM\Entity
 */
class MeubleRoom
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
     * @ORM\Column(name="room_id", type="integer", nullable=true)
     */
    private $roomId;

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
     * Set roomId
     *
     * @param integer $roomId
     * @return MeubleRoom
     */
    public function setRoomId($roomId)
    {
        $this->roomId = $roomId;

        return $this;
    }

    /**
     * Get roomId
     *
     * @return integer 
     */
    public function getRoomId()
    {
        return $this->roomId;
    }

    /**
     * Set meubleId
     *
     * @param integer $meubleId
     * @return MeubleRoom
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
