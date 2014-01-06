<?php

namespace Wesnick\Infusionsoft\Proxy;

use Wesnick\Infusionsoft\Remote\BaseObject;

/**
 * class InvoicePayment
 */
class InvoicePayment extends BaseObject
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
     * Double
     * 
     * @var float $Amt
     */
    public $Amt;
    /**
     * Date
     * 
     * @var \DateTime $PayDate
     */
    public $PayDate;
    /**
     * String
     * 
     * @var string $PayStatus
     */
    public $PayStatus;
    /**
     * Id
     * 
     * @var Payment $PaymentId
     */
    public $PaymentId;
    /**
     * Integer
     * 
     * @var string $SkipCommission
     */
    public $SkipCommission;
    /**
     * @var array $propertyMap
     */
    protected $propertyMap = array('Id' => 'int', 'InvoiceId' => 'Invoice', 'Amt' => 'float', 'PayDate' => '\DateTime', 'PayStatus' => 'string', 'PaymentId' => 'Payment', 'SkipCommission' => 'string');

}
