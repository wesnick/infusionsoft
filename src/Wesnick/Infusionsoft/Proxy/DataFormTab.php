<?php

namespace Wesnick\Infusionsoft\Proxy;

use Wesnick\Infusionsoft\Remote\BaseObject;

/**
 * class DataFormTab
 */
class DataFormTab extends BaseObject
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
     * @var int $FormId
     */
    public $FormId;
    /**
     * String
     * 
     * @var string $TabName
     */
    public $TabName;
    /**
     * @var array $propertyMap
     */
    protected static $propertyMap = array('Id' => 'int', 'FormId' => 'int', 'TabName' => 'string');

}
