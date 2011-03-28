<?php

namespace App\SiteBundle\Entity;

/**
 * @orm:Entity
 */
class Country
{
    /**
     * @orm:Id
     * @orm:Column(type="string", length=2)
     */
    protected $id;
    
    /**
     * @orm:Column(type="string", length=255)
     * @var string
     */
    protected $name;
    
}
