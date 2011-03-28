<?php

namespace App\SiteBundle\Entity;

/**
 * @orm:Entity
 */
class UserGroup
{

    /**
     * @orm:Id
     * @orm:Column(type="integer")
     * @orm:generatedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * @orm:Column(type="string", length=255)
     * @var string
     */
    protected $name;
    
    /**
     * @orm:Column(type="string", length=255)
     * @var string
     */
    protected $logo;
    
    /**
     * @orm:Column(type="string", length=255)
     * @var string
     */
    protected $url;
    
    /**
     * @orm:Column(type="string")
     * @var string
     */
    protected $about;
    
    /**
     * @orm:OneToMany(targetEntity="App\AccountBundle\Entity\User", mappedBy="leaderOf")
     * @var \Doctrine\Common\Collections\ArrayCollection
     */
    protected $leaders;
    
    /**
     * @orm:OneToMany(targetEntity="Channel", mappedBy="userGroup")
     * @var \Doctrine\Common\Collections\ArrayCollection
     */
    protected $channels;
    
    /**
     * @orm:OneToOne(targetEntity="Location")
     * @var App\SiteBundle\Entity\Location
     */
    protected $location;
    
}