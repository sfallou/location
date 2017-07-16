<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FixRoom
 *
 * @ORM\Table(name="fix_room")
 * @ORM\Entity
 */
class FixRoom
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
     * @ORM\Column(name="room_id", type="integer", precision=0, scale=0, nullable=true, unique=false)
     */
    private $roomId;

    /**
     * @var integer
     *
     * @ORM\Column(name="fix_id", type="integer", precision=0, scale=0, nullable=true, unique=false)
     */
    private $fixId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fix_date", type="date", precision=0, scale=0, nullable=true, unique=false)
     */
    private $fixDate;

    /**
     * @var boolean
     *
     * @ORM\Column(name="fix_state", type="boolean", precision=0, scale=0, nullable=true, unique=false)
     */
    private $fixState;

    /**
     * @var boolean
     *
     * @ORM\Column(name="fix_priority", type="boolean", precision=0, scale=0, nullable=true, unique=false)
     */
    private $fixPriority;

    /**
     * @var string
     *
     * @ORM\Column(name="fix_comment", type="text", precision=0, scale=0, nullable=true, unique=false)
     */
    private $fixComment;


}
