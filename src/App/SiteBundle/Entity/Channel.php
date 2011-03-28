<?php

namespace App\SiteBundle\Entity;

/**
 * @orm:Entity
 */
class Channel
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
    protected $target;
    
    /**
     * @orm:ManyToOne(targetEntity="ChannelType")
     * @var App\SiteBundle\Entity\ChannelType
     */
    protected $type;
    
    /**
     * @orm:ManyToOne(targetEntity="App\SiteBundle\Entity\UserGroup", inversedBy="channels")
     * @var \App\SiteBundle\Entity\UserGroup 
     */
    protected $userGroup;
}
