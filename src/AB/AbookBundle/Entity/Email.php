<?php

namespace AB\AbookBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Email
 *
 * @ORM\Table(name="email")
 * @ORM\Entity
 */
class Email
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_email", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idEmail;

    /**
     * @var integer
     *
     * @ORM\Column(name="contact_id", type="integer", nullable=true)
     */
    private $contactId;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=80, nullable=true)
     */
    private $email;

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
     * Get idEmail
     *
     * @return integer 
     */
    public function getIdEmail()
    {
        return $this->idEmail;
    }

    /**
     * Set contactId
     *
     * @param integer $contactId
     * @return Email
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
     * Set email
     *
     * @param string $email
     * @return Email
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
     * @return Email
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
     * @return Email
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