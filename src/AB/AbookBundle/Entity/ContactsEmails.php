<?php

namespace AB\AbookBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ContactsEmails
 */
class ContactsEmails
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $email;

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
     * Set email
     *
     * @param string $email
     * @return ContactsEmails
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
     * Set active
     *
     * @param boolean $active
     * @return ContactsEmails
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
     * @return ContactsEmails
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
     * @return ContactsEmails
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
