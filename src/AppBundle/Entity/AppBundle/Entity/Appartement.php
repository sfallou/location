<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Appartement
 *
 * @ORM\Table(name="appartement")
 * @ORM\Entity
 */
class Appartement
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
     * @ORM\Column(name="adresse", type="string", length=100, precision=0, scale=0, nullable=false, unique=false)
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="surface", type="string", length=100, precision=0, scale=0, nullable=false, unique=false)
     */
    private $surface;

    /**
     * @var string
     *
     * @ORM\Column(name="wifi_code", type="string", length=100, precision=0, scale=0, nullable=false, unique=false)
     */
    private $wifi_code;

    /**
     * @var string
     *
     * @ORM\Column(name="contact_appart", type="string", length=100, precision=0, scale=0, nullable=false, unique=false)
     */
    private $contact_appart;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_residence", type="integer", precision=0, scale=0, nullable=false, unique=false)
     */
    private $id_residence;

    /**
     * @var string
     *
     * @ORM\Column(name="phone", type="string", length=100, precision=0, scale=0, nullable=false, unique=false)
     */
    private $phone;

    /**
     * @var string
     *
     * @ORM\Column(name="rib", type="string", length=100, precision=0, scale=0, nullable=false, unique=false)
     */
    private $rib;


}
