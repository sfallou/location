<?php

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
     * @ORM\Column(name="id", type="integer", precision=0, scale=0, nullable=false, unique=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_id", type="integer", precision=0, scale=0, nullable=true, unique=false)
     */
    private $userId;

    /**
     * @var integer
     *
     * @ORM\Column(name="room_id", type="integer", precision=0, scale=0, nullable=true, unique=false)
     */
    private $roomId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="user_room_date_in", type="date", precision=0, scale=0, nullable=true, unique=false)
     */
    private $userRoomDateIn;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="user_room_date_out", type="date", precision=0, scale=0, nullable=true, unique=false)
     */
    private $userRoomDateOut;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_room_rent", type="integer", precision=0, scale=0, nullable=true, unique=false)
     */
    private $userRoomRent;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_room_guarantee", type="integer", precision=0, scale=0, nullable=true, unique=false)
     */
    private $userRoomGuarantee;


}
