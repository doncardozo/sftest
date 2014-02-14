<?php

namespace AB\AbookBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ContactsPhones
 */
class ContactsPhones
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $phoneNumber;

    /**
     * @var boolean
     */
    private $active;

    /**
     * @var boolean
     */
    private $deleted;

    /**
     * @var \AB\AbookBundle\Entity\Contacts
     */
    private $contact;


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
     * Set phoneNumber
     *
     * @param string $phoneNumber
     * @return ContactsPhones
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
     * @return ContactsPhones
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
     * @return ContactsPhones
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

    /**
     * Set contact
     *
     * @param \AB\AbookBundle\Entity\Contacts $contact
     * @return ContactsPhones
     */
    public function setContact(\AB\AbookBundle\Entity\Contacts $contact = null)
    {
        $this->contact = $contact;
    
        return $this;
    }

    /**
     * Get contact
     *
     * @return \AB\AbookBundle\Entity\Contacts 
     */
    public function getContact()
    {
        return $this->contact;
    }
}
