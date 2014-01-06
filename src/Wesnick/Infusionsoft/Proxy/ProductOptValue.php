<?php

namespace Wesnick\Infusionsoft\Proxy;

use Wesnick\Infusionsoft\Remote\BaseObject;

/**
 * class ProductOptValue
 */
class ProductOptValue extends BaseObject
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
     * @var ProductOption $ProductOptionId
     */
    public $ProductOptionId;
    /**
     * String
     * 
     * @var string $Label
     */
    public $Label;
    /**
     * String
     * 
     * @var string $Sku
     */
    public $Sku;
    /**
     * Integer
     * 
     * @var string $IsDefault
     */
    public $IsDefault;
    /**
     * String
     * 
     * @var string $Name
     */
    public $Name;
    /**
     * Integer
     * 
     * @var string $OptionIndex
     */
    public $OptionIndex;
    /**
     * Double
     * 
     * @var float $PriceAdjustment
     */
    public $PriceAdjustment;
    /**
     * @var array $propertyMap
     */
    protected $propertyMap = array('Id' => 'int', 'ProductOptionId' => 'ProductOption', 'Label' => 'string', 'Sku' => 'string', 'IsDefault' => 'string', 'Name' => 'string', 'OptionIndex' => 'string', 'PriceAdjustment' => 'float');

}
