<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Room
 *
 * @ORM\Table(name="room")
 * @ORM\Entity
 */
class Room
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
     * @var string
     *
     * @ORM\Column(name="surface", type="string", length=100, precision=0, scale=0, nullable=false, unique=false)
     */
    private $surface;

    /**
     * @var integer
     *
     * @ORM\Column(name="rent", type="integer", precision=0, scale=0, nullable=false, unique=false)
     */
    private $rent;

    /**
     * @var integer
     *
     * @ORM\Column(name="guarantee", type="integer", precision=0, scale=0, nullable=false, unique=false)
     */
    private $guarantee;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_appart", type="integer", precision=0, scale=0, nullable=false, unique=false)
     */
    private $id_appart;


}
