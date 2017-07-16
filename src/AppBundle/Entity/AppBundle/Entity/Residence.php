<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Residence
 *
 * @ORM\Table(name="residence")
 * @ORM\Entity
 */
class Residence
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
     * @ORM\Column(name="name", type="string", length=100, precision=0, scale=0, nullable=false, unique=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="contact_gardien", type="string", length=100, precision=0, scale=0, nullable=false, unique=false)
     */
    private $contact_gardien;

    /**
     * @var string
     *
     * @ORM\Column(name="horaire_gardien", type="text", precision=0, scale=0, nullable=false, unique=false)
     */
    private $horaire_gardien;

    /**
     * @var string
     *
     * @ORM\Column(name="contact_syndic", type="string", length=100, precision=0, scale=0, nullable=false, unique=false)
     */
    private $contact_syndic;


}
