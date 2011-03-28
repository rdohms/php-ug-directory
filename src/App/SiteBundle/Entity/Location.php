<?php

namespace App\SiteBundle\Entity;

/**
 * @orm:Entity
 */
class Location
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
    protected $address;
    
    /**
     * @orm:Column(type="decimal", scale=8, precision=12)
     * @var float
     */
    protected $lat;
    
    /**
     * @orm:Column(type="decimal", scale=8, precision=12)
     * @var float
     */
    protected $lng;
    
    /**
     * @orm:Column(type="string", length=150)
     * @var string
     */
    protected $city;
    
    /**
     * @orm:Column(type="string", length=150)
     * @var type 
     */
    protected $state;
    
    /**
     * @orm:ManyToOne(targetEntity="Country")
     * @var App\SiteBundle\Entity\Country
     */
    protected $country;
    
}
