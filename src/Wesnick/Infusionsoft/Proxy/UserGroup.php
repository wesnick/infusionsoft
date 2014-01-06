<?php

namespace Wesnick\Infusionsoft\Proxy;

use Wesnick\Infusionsoft\Remote\BaseObject;

/**
 * class UserGroup
 */
class UserGroup extends BaseObject
{

    /**
     * Id
     * 
     * @var int $Id
     */
    public $Id;
    /**
     * String
     * 
     * @var string $Name
     */
    public $Name;
    /**
     * Id
     * 
     * @var int $OwnerId
     */
    public $OwnerId;
    /**
     * @var array $propertyMap
     */
    protected static $propertyMap = array('Id' => 'int', 'Name' => 'string', 'OwnerId' => 'int');

}
