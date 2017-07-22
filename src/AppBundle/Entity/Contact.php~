<?php

// src/AppBundle/Entity/Contact.php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="contact")
 */
class Contact
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    /**
     * @ORM\Column(type="string", length=100)
     */
    private $firstname;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $lastname;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $email;

     /**
     * @ORM\Column(type="string", length=100)
     */
    private $telephone;

    /**
     * @ORM\Column(type="integer")
     */
    private $genre;

    /**
     * @ORM\Column(type="integer")
     */
    private $id_type_contact;

    


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
     * Set firstname
     *
     * @param string $firstname
     * @return Contact
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get firstname
     *
     * @return string 
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set lastname
     *
     * @param string $lastname
     * @return Contact
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get lastname
     *
     * @return string 
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Contact
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set id_type
     *
     * @param integer $idType
     * @return Contact
     */
    public function setIdType($idType)
    {
        $this->id_type = $idType;

        return $this;
    }

    /**
     * Get id_type
     *
     * @return integer 
     */
    public function getIdType()
    {
        return $this->id_type;
    }

    /**
     * Set telephone
     *
     * @param string $telephone
     * @return Contact
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone
     *
     * @return string 
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set genre
     *
     * @param integer $genre
     * @return Contact
     */
    public function setGenre($genre)
    {
        $this->genre = $genre;

        return $this;
    }

    /**
     * Get genre
     *
     * @return integer 
     */
    public function getGenre()
    {
        return $this->genre;
    }

    /**
     * Set id_type_contact
     *
     * @param integer $idTypeContact
     * @return Contact
     */
    public function setIdTypeContact($idTypeContact)
    {
        $this->id_type_contact = $idTypeContact;

        return $this;
    }

    /**
     * Get id_type_contact
     *
     * @return integer 
     */
    public function getIdTypeContact()
    {
        return $this->id_type_contact;
    }
}
