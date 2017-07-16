<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ChargeAppartement
 *
 * @ORM\Table(name="charge_appartement")
 * @ORM\Entity
 */
class ChargeAppartement
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
     * @ORM\Column(name="charge_id", type="integer", precision=0, scale=0, nullable=true, unique=false)
     */
    private $chargeId;

    /**
     * @var string
     *
     * @ORM\Column(name="charge_amount", type="decimal", precision=0, scale=0, nullable=true, unique=false)
     */
    private $chargeAmount;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="charge_date", type="date", precision=0, scale=0, nullable=true, unique=false)
     */
    private $chargeDate;

    /**
     * @var boolean
     *
     * @ORM\Column(name="charge_state", type="boolean", precision=0, scale=0, nullable=true, unique=false)
     */
    private $chargeState;

    /**
     * @var string
     *
     * @ORM\Column(name="charge_comment", type="text", precision=0, scale=0, nullable=true, unique=false)
     */
    private $chargeComment;


}
