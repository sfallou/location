<?php

// src/AppBundle/Entity/FixAppartement.php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserRoom
 *
 * @ORM\Table(name="fix_appartement")
 * @ORM\Entity
 */
class FixAppartement
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
     * Set appartId
     *
     * @param integer $appartId
     * @return FixAppartement
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
     * Set fixId
     *
     * @param integer $fixId
     * @return FixAppartement
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
     * @return FixAppartement
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
     * @return FixAppartement
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
     * @return FixAppartement
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
     * @return FixAppartement
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
