<?php

namespace Wesnick\Infusionsoft\Proxy;

use Wesnick\Infusionsoft\Remote\BaseObject;

/**
 * class CProgram
 * Continuity Programs
 * SubscriptionPlan
 * INNER JOIN Product ON Product.Id=SubscriptionPlan.ProductId
 */
class CProgram extends BaseObject
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
     * @var string $ProgramName
     */
    public $ProgramName;
    /**
     * Double
     * 
     * @var float $DefaultPrice
     */
    public $DefaultPrice;
    /**
     * String
     * 
     * @var string $DefaultCycle
     */
    public $DefaultCycle;
    /**
     * Integer
     * 
     * @var string $DefaultFrequency
     */
    public $DefaultFrequency;
    /**
     * String
     * 
     * @var string $Sku
     */
    public $Sku;
    /**
     * String
     * 
     * @var string $ShortDescription
     */
    public $ShortDescription;
    /**
     * String
     * 
     * @var string $BillingType
     */
    public $BillingType;
    /**
     * String
     * 
     * @var string $Description
     */
    public $Description;
    /**
     * Integer
     * 
     * @var string $HideInStore
     */
    public $HideInStore;
    /**
     * Integer
     * 
     * @var string $Status
     */
    public $Status;
    /**
     * Boolean
     * 
     * @var bool $Active
     */
    public $Active;
    /**
     * Blob
     * 
     * @var string $LargeImage
     */
    public $LargeImage;
    /**
     * Integer
     * 
     * @var string $Taxable
     */
    public $Taxable;
    /**
     * String
     * 
     * @var string $Family
     */
    public $Family;
    /**
     * Id
     * 
     * @var int $ProductId
     */
    public $ProductId;
    /**
     * @var array $propertyMap
     */
    protected static $propertyMap = array('Id' => 'int', 'ProgramName' => 'string', 'DefaultPrice' => 'float', 'DefaultCycle' => 'string', 'DefaultFrequency' => 'string', 'Sku' => 'string', 'ShortDescription' => 'string', 'BillingType' => 'string', 'Description' => 'string', 'HideInStore' => 'string', 'Status' => 'string', 'Active' => 'bool', 'LargeImage' => 'string', 'Taxable' => 'string', 'Family' => 'string', 'ProductId' => 'int');

}
