<?php

namespace Wesnick\Infusionsoft\Proxy;

use Wesnick\Infusionsoft\Remote\BaseObject;

/**
 * class Product
 * Products
 */
class Product extends BaseObject
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
     * @var string $ProductName
     */
    public $ProductName;
    /**
     * Double
     * 
     * @var float $ProductPrice
     */
    public $ProductPrice;
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
     * Integer
     * 
     * @var string $Taxable
     */
    public $Taxable;
    /**
     * Integer
     * 
     * @var string $CountryTaxable
     */
    public $CountryTaxable;
    /**
     * Integer
     * 
     * @var string $StateTaxable
     */
    public $StateTaxable;
    /**
     * Integer
     * 
     * @var string $CityTaxable
     */
    public $CityTaxable;
    /**
     * Double
     * 
     * @var float $Weight
     */
    public $Weight;
    /**
     * Integer
     * 
     * @var string $IsPackage
     */
    public $IsPackage;
    /**
     * Integer
     * 
     * @var string $NeedsDigitalDelivery
     */
    public $NeedsDigitalDelivery;
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
     * String
     * 
     * @var string $TopHTML
     */
    public $TopHTML;
    /**
     * String
     * 
     * @var string $BottomHTML
     */
    public $BottomHTML;
    /**
     * String
     * 
     * @var string $ShippingTime
     */
    public $ShippingTime;
    /**
     * Blob
     * 
     * @var string $LargeImage
     */
    public $LargeImage;
    /**
     * String
     * 
     * @var string $InventoryNotifiee
     */
    public $InventoryNotifiee;
    /**
     * Integer
     * 
     * @var string $InventoryLimit
     */
    public $InventoryLimit;
    /**
     * Integer
     * 
     * @var string $Shippable
     */
    public $Shippable;
    /**
     * @var array $propertyMap
     */
    protected static $propertyMap = array('Id' => 'int', 'ProductName' => 'string', 'ProductPrice' => 'float', 'Sku' => 'string', 'ShortDescription' => 'string', 'Taxable' => 'string', 'CountryTaxable' => 'string', 'StateTaxable' => 'string', 'CityTaxable' => 'string', 'Weight' => 'float', 'IsPackage' => 'string', 'NeedsDigitalDelivery' => 'string', 'Description' => 'string', 'HideInStore' => 'string', 'Status' => 'string', 'TopHTML' => 'string', 'BottomHTML' => 'string', 'ShippingTime' => 'string', 'LargeImage' => 'string', 'InventoryNotifiee' => 'string', 'InventoryLimit' => 'string', 'Shippable' => 'string');

}
