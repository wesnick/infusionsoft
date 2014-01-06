<?php

namespace Wesnick\Infusionsoft\Proxy;

use Wesnick\Infusionsoft\Remote\BaseObject;

/**
 * class ProductInterestBundle
 * Product/Subscription Interest Bundles
 */
class ProductInterestBundle extends BaseObject
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
     * @var string $BundleName
     */
    public $BundleName;
    /**
     * String
     * 
     * @var string $Description
     */
    public $Description;
    /**
     * @var array $propertyMap
     */
    protected $propertyMap = array('Id' => 'int', 'BundleName' => 'string', 'Description' => 'string');

}
