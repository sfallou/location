<?php

// src/AppBundle/Entity/ContactResidence.php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserRoom
 *
 * @ORM\Table(name="contact_residence")
 * @ORM\Entity
 */
class ContactResidence
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
     * @ORM\Column(name="residence_id", type="integer", nullable=true)
     */
    private $residenceId;

    /**
     * @var integer
     *
     * @ORM\Column(name="contact_id", type="integer", nullable=true)
     */
    private $contactId;

    /**
     * @var text
     *
     * @ORM\Column(name="contact_comment", type="text", nullable=true)
     */
    private $contactComment;


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
     * Set residenceId
     *
     * @param integer $residenceId
     * @return ContactResidence
     */
    public function setResidenceId($residenceId)
    {
        $this->residenceId = $residenceId;

        return $this;
    }

    /**
     * Get residenceId
     *
     * @return integer 
     */
    public function getResidenceId()
    {
        return $this->residenceId;
    }

    /**
     * Set contactId
     *
     * @param integer $contactId
     * @return ContactResidence
     */
    public function setContactId($contactId)
    {
        $this->contactId = $contactId;

        return $this;
    }

    /**
     * Get contactId
     *
     * @return integer 
     */
    public function getContactId()
    {
        return $this->contactId;
    }

    /**
     * Set contactComment
     *
     * @param string $contactComment
     * @return ContactResidence
     */
    public function setContactComment($contactComment)
    {
        $this->contactComment = $contactComment;

        return $this;
    }

    /**
     * Get contactComment
     *
     * @return string 
     */
    public function getContactComment()
    {
        return $this->contactComment;
    }
}
