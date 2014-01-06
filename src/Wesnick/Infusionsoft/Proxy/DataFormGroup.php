<?php

namespace Wesnick\Infusionsoft\Proxy;

use Wesnick\Infusionsoft\Remote\BaseObject;

/**
 * class DataFormGroup
 */
class DataFormGroup extends BaseObject
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
     * @var int $TabId
     */
    public $TabId;
    /**
     * String
     * 
     * @var string $Name
     */
    public $Name;
    /**
     * @var array $propertyMap
     */
    protected $propertyMap = array('Id' => 'int', 'TabId' => 'int', 'Name' => 'string');

}
