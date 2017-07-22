<?php

// src/AppBundle/Entity/DocumentUserRoom.php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserRoom
 *
 * @ORM\Table(name="document_user_room")
 * @ORM\Entity
 */
class DocumentUserRoom
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
     * @ORM\Column(name="user_room_id", type="integer", nullable=true)
     */
    private $userRoomId;

    /**
     * @var integer
     *
     * @ORM\Column(name="document_id", type="integer", nullable=true)
     */
    private $documentId;
    
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="document_date", type="date", nullable=true)
     */
    private $documentDate;

    /**
     * @var text
     *
     * @ORM\Column(name="document_comment", type="text", nullable=true)
     */
    private $documentComment;

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
     * Set userRoomId
     *
     * @param integer $userRoomId
     * @return DocumentUserRoom
     */
    public function setUserRoomId($userRoomId)
    {
        $this->userRoomId = $userRoomId;

        return $this;
    }

    /**
     * Get userRoomId
     *
     * @return integer 
     */
    public function getUserRoomId()
    {
        return $this->userRoomId;
    }

    /**
     * Set documentId
     *
     * @param integer $documentId
     * @return DocumentUserRoom
     */
    public function setDocumentId($documentId)
    {
        $this->documentId = $documentId;

        return $this;
    }

    /**
     * Get documentId
     *
     * @return integer 
     */
    public function getDocumentId()
    {
        return $this->documentId;
    }

    /**
     * Set documentDate
     *
     * @param \DateTime $documentDate
     * @return DocumentUserRoom
     */
    public function setDocumentDate($documentDate)
    {
        $this->documentDate = $documentDate;

        return $this;
    }

    /**
     * Get documentDate
     *
     * @return \DateTime 
     */
    public function getDocumentDate()
    {
        return $this->documentDate;
    }

    /**
     * Set documentComment
     *
     * @param string $documentComment
     * @return DocumentUserRoom
     */
    public function setDocumentComment($documentComment)
    {
        $this->documentComment = $documentComment;

        return $this;
    }

    /**
     * Get documentComment
     *
     * @return string 
     */
    public function getDocumentComment()
    {
        return $this->documentComment;
    }
}
