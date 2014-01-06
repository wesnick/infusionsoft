<?php

namespace Wesnick\Infusionsoft\Proxy;

use Wesnick\Infusionsoft\Remote\BaseObject;

/**
 * class LeadSourceCategory
 * Lead Source Categories
 */
class LeadSourceCategory extends BaseObject
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
     * String
     * 
     * @var string $Description
     */
    public $Description;
    /**
     * @var array $propertyMap
     */
    protected static $propertyMap = array('Id' => 'int', 'Name' => 'string', 'Description' => 'string');

}
