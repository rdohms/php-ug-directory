<?php

namespace App\AccountBundle\Entity;

use FOS\UserBundle\Entity;

/**
 * @orm:Entity
 */
class User extends Entity\User
{
    /**
     * @orm:Id
     * @orm:Column(type="integer")
     * @orm:generatedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @orm:ManyToMany(targetEntity="FOS\UserBundle\Entity\DefaultGroup")
     * @orm:JoinTable(name="fos_user_user_group",
     *      joinColumns={@orm:JoinColumn(name="user_id", referencedColumnName="id")},
     *      inverseJoinColumns={@orm:JoinColumn(name="group_id", referencedColumnName="id")}
     * )
     */
    protected $groups;
}