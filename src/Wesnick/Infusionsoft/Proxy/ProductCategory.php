<?php

namespace Wesnick\Infusionsoft\Proxy;

use Wesnick\Infusionsoft\Remote\BaseObject;

/**
 * class ProductCategory
 */
class ProductCategory extends BaseObject
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
     * @var string $CategoryDisplayName
     */
    public $CategoryDisplayName;
    /**
     * Blob
     * 
     * @var string $CategoryImage
     */
    public $CategoryImage;
    /**
     * Integer
     * 
     * @var string $CategoryOrder
     */
    public $CategoryOrder;
    /**
     * Id
     * 
     * @var int $ParentId
     */
    public $ParentId;
    /**
     * @var array $propertyMap
     */
    protected $propertyMap = array('Id' => 'int', 'CategoryDisplayName' => 'string', 'CategoryImage' => 'string', 'CategoryOrder' => 'string', 'ParentId' => 'int');

}
