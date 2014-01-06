<?php

namespace Wesnick\Infusionsoft\Proxy;

use Wesnick\Infusionsoft\Remote\BaseObject;

/**
 * class ProductOption
 */
class ProductOption extends BaseObject
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
     * @var Product $ProductId
     */
    public $ProductId;
    /**
     * String
     * 
     * @var string $Label
     */
    public $Label;
    /**
     * Integer
     * 
     * @var string $IsRequired
     */
    public $IsRequired;
    /**
     * Integer
     * 
     * @var string $Order
     */
    public $Order;
    /**
     * String
     * 
     * @var string $Name
     */
    public $Name;
    /**
     * Integer
     * 
     * @var string $MaxChars
     */
    public $MaxChars;
    /**
     * Integer
     * 
     * @var string $CanEndWith
     */
    public $CanEndWith;
    /**
     * Integer
     * 
     * @var string $MinChars
     */
    public $MinChars;
    /**
     * Integer
     * 
     * @var string $AllowSpaces
     */
    public $AllowSpaces;
    /**
     * Integer
     * 
     * @var string $TextMessage
     */
    public $TextMessage;
    /**
     * Enum
     * 
     * @var string $OptionType
     */
    public $OptionType;
    /**
     * String
     * 
     * @var string $CanContain
     */
    public $CanContain;
    /**
     * String
     * 
     * @var string $CanStartWith
     */
    public $CanStartWith;
    /**
     * @var array $propertyMap
     */
    protected static $propertyMap = array('Id' => 'int', 'ProductId' => 'Product', 'Label' => 'string', 'IsRequired' => 'string', 'Order' => 'string', 'Name' => 'string', 'MaxChars' => 'string', 'CanEndWith' => 'string', 'MinChars' => 'string', 'AllowSpaces' => 'string', 'TextMessage' => 'string', 'OptionType' => 'string', 'CanContain' => 'string', 'CanStartWith' => 'string');

}
