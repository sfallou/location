<?php

// src/AppBundle/Entity/ContactAppartement.php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserRoom
 *
 * @ORM\Table(name="contact_appartement")
 * @ORM\Entity
 */
class ContactAppartement
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
     * @ORM\Column(name="appart_id", type="integer", nullable=true)
     */
    private $appartId;

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
     * Set appartId
     *
     * @param integer $appartId
     * @return ContactAppartement
     */
    public function setAppartId($appartId)
    {
        $this->appartId = $appartId;

        return $this;
    }

    /**
     * Get appartId
     *
     * @return integer 
     */
    public function getAppartId()
    {
        return $this->appartId;
    }

    /**
     * Set contactId
     *
     * @param integer $contactId
     * @return ContactAppartement
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
     * @return ContactAppartement
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
