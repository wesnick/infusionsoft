<?php

namespace Wesnick\Infusionsoft\Proxy;

use Wesnick\Infusionsoft\Remote\BaseObject;

/**
 * class DataFormField
 */
class DataFormField extends BaseObject
{

    /**
     * Integer
     * 
     * @var string $DataType
     */
    public $DataType;
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
     * Id
     * 
     * @var DataFormGroup $GroupId
     */
    public $GroupId;
    /**
     * String
     * 
     * @var string $Name
     */
    public $Name;
    /**
     * String
     * 
     * @var string $Label
     */
    public $Label;
    /**
     * String
     * 
     * @var string $DefaultValue
     */
    public $DefaultValue;
    /**
     * String
     * 
     * @var string $Values
     */
    public $Values;
    /**
     * Integer
     * 
     * @var string $ListRows
     */
    public $ListRows;
    /**
     * @var array $propertyMap
     */
    protected $propertyMap = array('DataType' => 'string', 'Id' => 'int', 'FormId' => 'int', 'GroupId' => 'DataFormGroup', 'Name' => 'string', 'Label' => 'string', 'DefaultValue' => 'string', 'Values' => 'string', 'ListRows' => 'string');

}
