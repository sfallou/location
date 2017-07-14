<?php

// src/AppBundle/Entity/FixRoom.php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserRoom
 *
 * @ORM\Table(name="fix_room")
 * @ORM\Entity
 */
class FixRoom
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
     * @ORM\Column(name="fix_id", type="integer", nullable=true)
     */
    private $fixId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fix_date", type="date", nullable=true)
     */
    private $fixDate;

    /**
     * @var boolean
     *
     * @ORM\Column(name="fix_state", type="boolean", nullable=true)
     */
    private $fixState = False;

    /**
     * @var boolean
     *
     * @ORM\Column(name="fix_priority", type="boolean", nullable=true)
     */
    private $fixPriority;

    /**
     * @var text
     *
     * @ORM\Column(name="fix_comment", type="text", nullable=true)
     */
    private $fixComment;


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
     * @return FixRoom
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
     * Set fixId
     *
     * @param integer $fixId
     * @return FixRoom
     */
    public function setFixId($fixId)
    {
        $this->fixId = $fixId;

        return $this;
    }

    /**
     * Get fixId
     *
     * @return integer 
     */
    public function getFixId()
    {
        return $this->fixId;
    }

    /**
     * Set fixDate
     *
     * @param \DateTime $fixDate
     * @return FixRoom
     */
    public function setFixDate($fixDate)
    {
        $this->fixDate = $fixDate;

        return $this;
    }

    /**
     * Get fixDate
     *
     * @return \DateTime 
     */
    public function getFixDate()
    {
        return $this->fixDate;
    }

    /**
     * Set fixState
     *
     * @param boolean $fixState
     * @return FixRoom
     */
    public function setFixState($fixState)
    {
        $this->fixState = $fixState;

        return $this;
    }

    /**
     * Get fixState
     *
     * @return boolean 
     */
    public function getFixState()
    {
        return $this->fixState;
    }

    /**
     * Set fixPriority
     *
     * @param boolean $fixPriority
     * @return FixRoom
     */
    public function setFixPriority($fixPriority)
    {
        $this->fixPriority = $fixPriority;

        return $this;
    }

    /**
     * Get fixPriority
     *
     * @return boolean 
     */
    public function getFixPriority()
    {
        return $this->fixPriority;
    }

    /**
     * Set fixComment
     *
     * @param string $fixComment
     * @return FixRoom
     */
    public function setFixComment($fixComment)
    {
        $this->fixComment = $fixComment;

        return $this;
    }

    /**
     * Get fixComment
     *
     * @return string 
     */
    public function getFixComment()
    {
        return $this->fixComment;
    }
}
