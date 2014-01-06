<?php

namespace Wesnick\Infusionsoft\Proxy;

use Wesnick\Infusionsoft\Remote\BaseObject;

/**
 * class InvoiceItem
 */
class InvoiceItem extends BaseObject
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
     * @var Invoice $InvoiceId
     */
    public $InvoiceId;
    /**
     * Id
     * 
     * @var int $OrderItemId
     */
    public $OrderItemId;
    /**
     * Double
     * 
     * @var float $InvoiceAmt
     */
    public $InvoiceAmt;
    /**
     * Double
     * 
     * @var float $Discount
     */
    public $Discount;
    /**
     * DateTime
     * 
     * @var \DateTime $DateCreated
     */
    public $DateCreated;
    /**
     * String
     * 
     * @var string $Description
     */
    public $Description;
    /**
     * Integer
     * 
     * @var string $CommissionStatus
     */
    public $CommissionStatus;
    /**
     * @var array $propertyMap
     */
    protected static $propertyMap = array('Id' => 'int', 'InvoiceId' => 'Invoice', 'OrderItemId' => 'int', 'InvoiceAmt' => 'float', 'Discount' => 'float', 'DateCreated' => '\DateTime', 'Description' => 'string', 'CommissionStatus' => 'string');

}
