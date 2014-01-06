<?php

namespace Wesnick\Infusionsoft\Proxy;

use Wesnick\Infusionsoft\Remote\BaseObject;

/**
 * class GroupAssign
 */
class GroupAssign extends BaseObject
{

    /**
     * Id
     * 
     * @var int $Id
     */
    public $Id;
    /**
     * Id
     * 
     * @var int $UserId
     */
    public $UserId;
    /**
     * Id
     * 
     * @var int $GroupId
     */
    public $GroupId;
    /**
     * Id
     * 
     * @var int $Admin
     */
    public $Admin;
    /**
     * @var array $propertyMap
     */
    protected static $propertyMap = array('Id' => 'int', 'UserId' => 'int', 'GroupId' => 'int', 'Admin' => 'int');

}
