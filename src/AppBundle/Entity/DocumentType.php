<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DocumentType
 */
class DocumentType
{
    /**
     * @var string
     */
    private $documentTypeWording;

    /**
     * @var string
     */
    private $documentTypeMineAccept;

    /**
     * @var boolean
     */
    private $documentTypeActive;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set documentTypeWording
     *
     * @param string $documentTypeWording
     * @return DocumentType
     */
    public function setDocumentTypeWording($documentTypeWording)
    {
        $this->documentTypeWording = $documentTypeWording;

        return $this;
    }

    /**
     * Get documentTypeWording
     *
     * @return string 
     */
    public function getDocumentTypeWording()
    {
        return $this->documentTypeWording;
    }

    /**
     * Set documentTypeMineAccept
     *
     * @param string $documentTypeMineAccept
     * @return DocumentType
     */
    public function setDocumentTypeMineAccept($documentTypeMineAccept)
    {
        $this->documentTypeMineAccept = $documentTypeMineAccept;

        return $this;
    }

    /**
     * Get documentTypeMineAccept
     *
     * @return string 
     */
    public function getDocumentTypeMineAccept()
    {
        return $this->documentTypeMineAccept;
    }

    /**
     * Set documentTypeActive
     *
     * @param boolean $documentTypeActive
     * @return DocumentType
     */
    public function setDocumentTypeActive($documentTypeActive)
    {
        $this->documentTypeActive = $documentTypeActive;

        return $this;
    }

    /**
     * Get documentTypeActive
     *
     * @return boolean 
     */
    public function getDocumentTypeActive()
    {
        return $this->documentTypeActive;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}
