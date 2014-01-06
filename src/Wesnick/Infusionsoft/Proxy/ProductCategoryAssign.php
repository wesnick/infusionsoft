<?php

namespace Wesnick\Infusionsoft\Proxy;

use Wesnick\Infusionsoft\Remote\BaseObject;

/**
 * class ProductCategoryAssign
 * Assigned Categories for Products
 * ProductCategoryAssign
 */
class ProductCategoryAssign extends BaseObject
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
     * @var int $ProductId
     */
    public $ProductId;
    /**
     * Id
     * 
     * @var int $ProductCategoryId
     */
    public $ProductCategoryId;
    /**
     * @var array $propertyMap
     */
    protected static $propertyMap = array('Id' => 'int', 'ProductId' => 'int', 'ProductCategoryId' => 'int');

}
