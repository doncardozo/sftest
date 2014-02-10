<?php

namespace AB\AbookBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contacts
 *
 * @ORM\Table(name="contacts")
 * @ORM\Entity
 */
class Contacts
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_contact", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idContact;

    /**
     * @var string
     *
     * @ORM\Column(name="first_name", type="string", length=80, nullable=true)
     */
    private $firstName;

    /**
     * @var string
     *
     * @ORM\Column(name="last_name", type="string", length=80, nullable=true)
     */
    private $lastName;

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=80, nullable=true)
     */
    private $address;

    /**
     * @var boolean
     *
     * @ORM\Column(name="active", type="boolean", nullable=true)
     */
    private $active;

    /**
     * @var boolean
     *
     * @ORM\Column(name="deleted", type="boolean", nullable=true)
     */
    private $deleted;



    /**
     * Get idContact
     *
     * @return integer 
     */
    public function getIdContact()
    {
        return $this->idContact;
    }

    /**
     * Set firstName
     *
     * @param string $firstName
     * @return Contacts
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    
        return $this;
    }

    /**
     * Get firstName
     *
     * @return string 
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     * @return Contacts
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    
        return $this;
    }

    /**
     * Get lastName
     *
     * @return string 
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set address
     *
     * @param string $address
     * @return Contacts
     */
    public function setAddress($address)
    {
        $this->address = $address;
    
        return $this;
    }

    /**
     * Get address
     *
     * @return string 
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set active
     *
     * @param boolean $active
     * @return Contacts
     */
    public function setActive($active)
    {
        $this->active = $active;
    
        return $this;
    }

    /**
     * Get active
     *
     * @return boolean 
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Set deleted
     *
     * @param boolean $deleted
     * @return Contacts
     */
    public function setDeleted($deleted)
    {
        $this->deleted = $deleted;
    
        return $this;
    }

    /**
     * Get deleted
     *
     * @return boolean 
     */
    public function getDeleted()
    {
        return $this->deleted;
    }
}