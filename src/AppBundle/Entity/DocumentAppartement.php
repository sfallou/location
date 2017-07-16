<?php

// src/AppBundle/Entity/DocumentAppartement.php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserRoom
 *
 * @ORM\Table(name="document_appartement")
 * @ORM\Entity
 */
class DocumentAppartement
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
     * Set appartId
     *
     * @param integer $appartId
     * @return DocumentAppartement
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
     * Set documentId
     *
     * @param integer $documentId
     * @return DocumentAppartement
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
     * @return DocumentAppartement
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
     * Set documentState
     *
     * @param boolean $documentState
     * @return DocumentAppartement
     */
    public function setDocumentState($documentState)
    {
        $this->documentState = $documentState;

        return $this;
    }

    /**
     * Get documentState
     *
     * @return boolean 
     */
    public function getDocumentState()
    {
        return $this->documentState;
    }

    /**
     * Set documentComment
     *
     * @param string $documentComment
     * @return DocumentAppartement
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
