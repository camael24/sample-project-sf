<?php

namespace Camael\Bundle\MuscuBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class User
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="firstname", type="string", length=255)
     */
    private $firstname;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="register_time", type="string", length=255)
     */
    private $registerTime;

    /**
     * @var string
     *
     * @ORM\Column(name="connect_time", type="string", length=255)
     */
    private $connectTime;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255)
     */
    private $password;


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
     * Set name
     *
     * @param string $name
     * @return User
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set firstname
     *
     * @param string $firstname
     * @return User
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
     * Set email
     *
     * @param string $email
     * @return User
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
     * Set registerTime
     *
     * @param string $registerTime
     * @return User
     */
    public function setRegisterTime($registerTime)
    {
        $this->registerTime = $registerTime;

        return $this;
    }

    /**
     * Get registerTime
     *
     * @return string 
     */
    public function getRegisterTime()
    {
        return $this->registerTime;
    }

    /**
     * Set connectTime
     *
     * @param string $connectTime
     * @return User
     */
    public function setConnectTime($connectTime)
    {
        $this->connectTime = $connectTime;

        return $this;
    }

    /**
     * Get connectTime
     *
     * @return string 
     */
    public function getConnectTime()
    {
        return $this->connectTime;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return User
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    public function getCpassword()
    {
        return $this->password;
    }

    public function setCpassword($cpassword)
    {   
        return $this;
    }
}
