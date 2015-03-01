<?php

namespace Project\ManagerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserAffectation
 */
class UserAffectation
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $dateAffectation;


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
     * Set dateAffectation
     *
     * @param \DateTime $dateAffectation
     * @return UserAffectation
     */
    public function setDateAffectation($dateAffectation)
    {
        $this->dateAffectation = $dateAffectation;

        return $this;
    }

    /**
     * Get dateAffectation
     *
     * @return \DateTime 
     */
    public function getDateAffectation()
    {
        return $this->dateAffectation;
    }
    /**
     * @var \Project\ManagerBundle\Entity\Project
     */
    private $project;


    /**
     * Set project
     *
     * @param \Project\ManagerBundle\Entity\Project $project
     * @return UserAffectation
     */
    public function setProject(\Project\ManagerBundle\Entity\Project $project = null)
    {
        $this->project = $project;

        return $this;
    }

    /**
     * Get project
     *
     * @return \Project\ManagerBundle\Entity\Project 
     */
    public function getProject()
    {
        return $this->project;
    }
}
