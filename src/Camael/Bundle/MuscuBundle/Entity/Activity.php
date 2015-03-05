<?php

namespace Camael\Bundle\MuscuBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Activity
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Camael\Bundle\MuscuBundle\Entity\ActivityRepository")
 */
class Activity
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
     * @var integer
     *
     * @ORM\Column(name="refAppartus", type="integer")
     */
    private $refAppartus;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="start_time", type="datetime")
     */
    private $startTime;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="end_time", type="datetime")
     */
    private $endTime;

    /**
     * @var integer
     *
     * @ORM\Column(name="act_loop", type="integer")
     */
    private $actLoop;

    /**
     * @var integer
     *
     * @ORM\Column(name="act_nb", type="integer")
     */
    private $actNb;

    /**
     * @var string
     *
     * @ORM\Column(name="act_lvl", type="string", length=255)
     */
    private $actLvl;


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
     * Set refAppartus
     *
     * @param integer $refAppartus
     * @return Activity
     */
    public function setRefAppartus($refAppartus)
    {
        $this->refAppartus = $refAppartus;

        return $this;
    }

    /**
     * Get refAppartus
     *
     * @return integer 
     */
    public function getRefAppartus()
    {
        return $this->refAppartus;
    }

    /**
     * Set startTime
     *
     * @param \DateTime $startTime
     * @return Activity
     */
    public function setStartTime($startTime)
    {
        $this->startTime = $startTime;

        return $this;
    }

    /**
     * Get startTime
     *
     * @return \DateTime 
     */
    public function getStartTime()
    {
        return $this->startTime;
    }

    /**
     * Set endTime
     *
     * @param \DateTime $endTime
     * @return Activity
     */
    public function setEndTime($endTime)
    {
        $this->endTime = $endTime;

        return $this;
    }

    /**
     * Get endTime
     *
     * @return \DateTime 
     */
    public function getEndTime()
    {
        return $this->endTime;
    }

    /**
     * Set actLoop
     *
     * @param integer $actLoop
     * @return Activity
     */
    public function setActLoop($actLoop)
    {
        $this->actLoop = $actLoop;

        return $this;
    }

    /**
     * Get actLoop
     *
     * @return integer 
     */
    public function getActLoop()
    {
        return $this->actLoop;
    }

    /**
     * Set actNb
     *
     * @param integer $actNb
     * @return Activity
     */
    public function setActNb($actNb)
    {
        $this->actNb = $actNb;

        return $this;
    }

    /**
     * Get actNb
     *
     * @return integer 
     */
    public function getActNb()
    {
        return $this->actNb;
    }

    /**
     * Set actLvl
     *
     * @param string $actLvl
     * @return Activity
     */
    public function setActLvl($actLvl)
    {
        $this->actLvl = $actLvl;

        return $this;
    }

    /**
     * Get actLvl
     *
     * @return string 
     */
    public function getActLvl()
    {
        return $this->actLvl;
    }
}
