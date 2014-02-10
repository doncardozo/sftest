<?php

namespace AB\AbookBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Phones
 *
 * @ORM\Table(name="phones")
 * @ORM\Entity
 */
class Phones
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_phone", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPhone;

    /**
     * @var integer
     *
     * @ORM\Column(name="contact_id", type="integer", nullable=true)
     */
    private $contactId;

    /**
     * @var string
     *
     * @ORM\Column(name="phone_number", type="string", length=45, nullable=true)
     */
    private $phoneNumber;

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
     * Get idPhone
     *
     * @return integer 
     */
    public function getIdPhone()
    {
        return $this->idPhone;
    }

    /**
     * Set contactId
     *
     * @param integer $contactId
     * @return Phones
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
     * Set phoneNumber
     *
     * @param string $phoneNumber
     * @return Phones
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
    
        return $this;
    }

    /**
     * Get phoneNumber
     *
     * @return string 
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * Set active
     *
     * @param boolean $active
     * @return Phones
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
     * @return Phones
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