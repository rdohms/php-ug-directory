<?php

namespace App\SiteBundle\Entity;

/**
 * @orm:Entity
 */
class ChannelType
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
}
