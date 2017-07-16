<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MeubleAppartement
 *
 * @ORM\Table(name="meuble_appartement")
 * @ORM\Entity
 */
class MeubleAppartement
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
     * @ORM\Column(name="appart_id", type="integer", precision=0, scale=0, nullable=true, unique=false)
     */
    private $appartId;

    /**
     * @var integer
     *
     * @ORM\Column(name="meuble_id", type="integer", precision=0, scale=0, nullable=true, unique=false)
     */
    private $meubleId;


}
