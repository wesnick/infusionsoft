<?php

namespace Wesnick\Infusionsoft\Proxy;

use Wesnick\Infusionsoft\Remote\BaseObject;

/**
 * class ProductInterest
 * Product/Subscription Interests
 */
class ProductInterest extends BaseObject
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
     * @var int $ObjectId
     */
    public $ObjectId;
    /**
     * String
     * 
     * @var string $ObjType
     */
    public $ObjType;
    /**
     * Id
     * 
     * @var int $ProductId
     */
    public $ProductId;
    /**
     * String
     * 
     * @var string $ProductType
     */
    public $ProductType;
    /**
     * Integer
     * 
     * @var string $Qty
     */
    public $Qty;
    /**
     * Integer
     * 
     * @var string $DiscountPercent
     */
    public $DiscountPercent;
    /**
     * @var array $propertyMap
     */
    protected $propertyMap = array('Id' => 'int', 'ObjectId' => 'int', 'ObjType' => 'string', 'ProductId' => 'int', 'ProductType' => 'string', 'Qty' => 'string', 'DiscountPercent' => 'string');

}
