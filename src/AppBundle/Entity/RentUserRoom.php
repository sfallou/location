<?php

// src/AppBundle/Entity/RentUserRoom.php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserRoom
 *
 * @ORM\Table(name="rent_user_room")
 * @ORM\Entity
 */
class RentUserRoom
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
     * @ORM\Column(name="user_room_id", type="integer", nullable=true)
     */
    private $userRoomId;

    
     /**
     * @var integer
     *
     * @ORM\Column(name="rent_amount", type="integer", nullable=true)
     */
    private $rentAmount;
    
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="rent_date", type="date", nullable=true)
     */
    private $rentDate; 

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="rent_date1", type="date", nullable=true)
     */
    private $rentDate1;  

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="rent_date2", type="date", nullable=true)
     */
    private $rentDate2; 


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
     * Set userRoomId
     *
     * @param integer $userRoomId
     * @return RentUserRoom
     */
    public function setUserRoomId($userRoomId)
    {
        $this->userRoomId = $userRoomId;

        return $this;
    }

    /**
     * Get userRoomId
     *
     * @return integer 
     */
    public function getUserRoomId()
    {
        return $this->userRoomId;
    }

    /**
     * Set rentAmount
     *
     * @param integer $rentAmount
     * @return RentUserRoom
     */
    public function setRentAmount($rentAmount)
    {
        $this->rentAmount = $rentAmount;

        return $this;
    }

    /**
     * Get rentAmount
     *
     * @return integer 
     */
    public function getRentAmount()
    {
        return $this->rentAmount;
    }

    /**
     * Set rentDate
     *
     * @param \DateTime $rentDate
     * @return RentUserRoom
     */
    public function setRentDate($rentDate)
    {
        $this->rentDate = $rentDate;

        return $this;
    }

    /**
     * Get rentDate
     *
     * @return \DateTime 
     */
    public function getRentDate()
    {
        return $this->rentDate;
    }

    /**
     * Set rentDate1
     *
     * @param \DateTime $rentDate1
     * @return RentUserRoom
     */
    public function setRentDate1($rentDate1)
    {
        $this->rentDate1 = $rentDate1;

        return $this;
    }

    /**
     * Get rentDate1
     *
     * @return \DateTime 
     */
    public function getRentDate1()
    {
        return $this->rentDate1;
    }

    /**
     * Set rentDate2
     *
     * @param \DateTime $rentDate2
     * @return RentUserRoom
     */
    public function setRentDate2($rentDate2)
    {
        $this->rentDate2 = $rentDate2;

        return $this;
    }

    /**
     * Get rentDate2
     *
     * @return \DateTime 
     */
    public function getRentDate2()
    {
        return $this->rentDate2;
    }
}
