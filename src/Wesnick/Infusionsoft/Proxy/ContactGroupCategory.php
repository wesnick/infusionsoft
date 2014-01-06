<?php

namespace Wesnick\Infusionsoft\Proxy;

use Wesnick\Infusionsoft\Remote\BaseObject;

/**
 * class ContactGroupCategory
 * Contact Group Categories
 */
class ContactGroupCategory extends BaseObject
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
     * @var string $CategoryName
     */
    public $CategoryName;
    /**
     * String
     * 
     * @var string $CategoryDescription
     */
    public $CategoryDescription;
    /**
     * @var array $propertyMap
     */
    protected static $propertyMap = array('Id' => 'int', 'CategoryName' => 'string', 'CategoryDescription' => 'string');

}
