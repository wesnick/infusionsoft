<?php

namespace Wesnick\Infusionsoft\Proxy;

use Wesnick\Infusionsoft\Remote\BaseObject;

/**
 * class OrderItem
 */
class OrderItem extends BaseObject
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
     * @var Order $OrderId
     */
    public $OrderId;
    /**
     * Id
     * 
     * @var Product $ProductId
     */
    public $ProductId;
    /**
     * Id
     * 
     * @var int $SubscriptionPlanId
     */
    public $SubscriptionPlanId;
    /**
     * String
     * 
     * @var string $ItemName
     */
    public $ItemName;
    /**
     * Integer
     * 
     * @var string $Qty
     */
    public $Qty;
    /**
     * Double
     * 
     * @var float $CPU
     */
    public $CPU;
    /**
     * Double
     * 
     * @var float $PPU
     */
    public $PPU;
    /**
     * String
     * 
     * @var string $ItemDescription
     */
    public $ItemDescription;
    /**
     * Integer
     * 
     * @var string $ItemType
     */
    public $ItemType;
    /**
     * String
     * 
     * @var string $Notes
     */
    public $Notes;
    /**
     * @var array $propertyMap
     */
    protected static $propertyMap = array('Id' => 'int', 'OrderId' => 'Order', 'ProductId' => 'Product', 'SubscriptionPlanId' => 'int', 'ItemName' => 'string', 'Qty' => 'string', 'CPU' => 'float', 'PPU' => 'float', 'ItemDescription' => 'string', 'ItemType' => 'string', 'Notes' => 'string');

}
