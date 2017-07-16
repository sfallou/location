<?php

// src/AppBundle/Entity/ChargeRoom.php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserRoom
 *
 * @ORM\Table(name="charge_room")
 * @ORM\Entity
 */
class ChargeRoom
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
     * @ORM\Column(name="charge_id", type="integer", nullable=true)
     */
    private $chargeId;
     /**
     * @var integer
     *
     * @ORM\Column(name="charge_amount", type="decimal", nullable=true)
     */
    private $chargeAmount;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="charge_date", type="date", nullable=true)
     */
    private $chargeDate;

    /**
     * @var boolean
     *
     * @ORM\Column(name="charge_state", type="boolean", nullable=true)
     */
    private $chargeState = False;

    /**
     * @var text
     *
     * @ORM\Column(name="charge_comment", type="text", nullable=true)
     */
    private $chargeComment;

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
     * @return ChargeRoom
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
     * Set chargeId
     *
     * @param integer $chargeId
     * @return ChargeRoom
     */
    public function setChargeId($chargeId)
    {
        $this->chargeId = $chargeId;

        return $this;
    }

    /**
     * Get chargeId
     *
     * @return integer 
     */
    public function getChargeId()
    {
        return $this->chargeId;
    }

    /**
     * Set chargeAmount
     *
     * @param string $chargeAmount
     * @return ChargeRoom
     */
    public function setChargeAmount($chargeAmount)
    {
        $this->chargeAmount = $chargeAmount;

        return $this;
    }

    /**
     * Get chargeAmount
     *
     * @return string 
     */
    public function getChargeAmount()
    {
        return $this->chargeAmount;
    }

    /**
     * Set chargeDate
     *
     * @param \DateTime $chargeDate
     * @return ChargeRoom
     */
    public function setChargeDate($chargeDate)
    {
        $this->chargeDate = $chargeDate;

        return $this;
    }

    /**
     * Get chargeDate
     *
     * @return \DateTime 
     */
    public function getChargeDate()
    {
        return $this->chargeDate;
    }

    /**
     * Set chargeState
     *
     * @param boolean $chargeState
     * @return ChargeRoom
     */
    public function setChargeState($chargeState)
    {
        $this->chargeState = $chargeState;

        return $this;
    }

    /**
     * Get chargeState
     *
     * @return boolean 
     */
    public function getChargeState()
    {
        return $this->chargeState;
    }

    /**
     * Set chargeComment
     *
     * @param string $chargeComment
     * @return ChargeRoom
     */
    public function setChargeComment($chargeComment)
    {
        $this->chargeComment = $chargeComment;

        return $this;
    }

    /**
     * Get chargeComment
     *
     * @return string 
     */
    public function getChargeComment()
    {
        return $this->chargeComment;
    }
}
