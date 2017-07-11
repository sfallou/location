<?php

// src/AppBundle/Entity/UserRoom.php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserRoom
 *
 * @ORM\Table(name="user_room")
 * @ORM\Entity
 */
class UserRoom
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
     * @ORM\Column(name="user_id", type="integer", nullable=true)
     */
    private $userId;

    /**
     * @var integer
     *
     * @ORM\Column(name="room_id", type="integer", nullable=true)
     */
    private $roomId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="user_room_date_in", type="date", nullable=true)
     */
    private $userRoomDateIn;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="user_room_date_out", type="date", nullable=true)
     */
    private $userRoomDateOut;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_room_rent", type="integer", nullable=true)
     */
    private $userRoomRent;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_room_guarantee", type="integer", nullable=true)
     */
    private $userRoomGuarantee;



    /**
     * Set userId
     *
     * @param integer $userId
     * @return UserRoom
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return integer 
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set roomId
     *
     * @param integer $roomId
     * @return UserRoom
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
     * Set userRoomDateIn
     *
     * @param \DateTime $userRoomDateIn
     * @return UserRoom
     */
    public function setUserRoomDateIn($userRoomDateIn)
    {
        $this->userRoomDateIn = $userRoomDateIn;

        return $this;
    }

    /**
     * Get userRoomDateIn
     *
     * @return \DateTime 
     */
    public function getUserRoomDateIn()
    {
        return $this->userRoomDateIn;
    }

    /**
     * Set userRoomDateOut
     *
     * @param \DateTime $userRoomDateOut
     * @return UserRoom
     */
    public function setUserRoomDateOut($userRoomDateOut)
    {
        $this->userRoomDateOut = $userRoomDateOut;

        return $this;
    }

    /**
     * Get userRoomDateOut
     *
     * @return \DateTime 
     */
    public function getUserRoomDateOut()
    {
        return $this->userRoomDateOut;
    }

    /**
     * Set userRoomRent
     *
     * @param integer $userRoomRent
     * @return UserRoom
     */
    public function setUserRoomRent($userRoomRent)
    {
        $this->userRoomRent = $userRoomRent;

        return $this;
    }

    /**
     * Get userRoomRent
     *
     * @return integer 
     */
    public function getUserRoomRent()
    {
        return $this->userRoomRent;
    }

    /**
     * Set userRoomGuarantee
     *
     * @param integer $userRoomGuarantee
     * @return UserRoom
     */
    public function setUserRoomGuarantee($userRoomGuarantee)
    {
        $this->userRoomGuarantee = $userRoomGuarantee;

        return $this;
    }

    /**
     * Get userRoomGuarantee
     *
     * @return integer 
     */
    public function getUserRoomGuarantee()
    {
        return $this->userRoomGuarantee;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}
