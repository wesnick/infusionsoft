<?php

namespace Wesnick\Infusionsoft\Proxy;

use Wesnick\Infusionsoft\Remote\BaseObject;

/**
 * class ContactGroup
 * Contact Groups
 */
class ContactGroup extends BaseObject
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
     * @var string $GroupName
     */
    public $GroupName;
    /**
     * Id
     * 
     * @var int $GroupCategoryId
     */
    public $GroupCategoryId;
    /**
     * String
     * 
     * @var string $GroupDescription
     */
    public $GroupDescription;
    /**
     * @var array $propertyMap
     */
    protected $propertyMap = array('Id' => 'int', 'GroupName' => 'string', 'GroupCategoryId' => 'int', 'GroupDescription' => 'string');

}
