<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MeubleRoom
 *
 * @ORM\Table(name="meuble_room")
 * @ORM\Entity
 */
class MeubleRoom
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
     * @ORM\Column(name="meuble_id", type="integer", precision=0, scale=0, nullable=true, unique=false)
     */
    private $meubleId;


}
