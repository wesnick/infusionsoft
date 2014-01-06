<?php

namespace Wesnick\Infusionsoft\Proxy;

use Wesnick\Infusionsoft\Remote\BaseObject;

/**
 * class Payment
 */
class Payment extends BaseObject
{

    /**
     * Id
     * 
     * @var int $Id
     */
    public $Id;
    /**
     * Date
     * 
     * @var \DateTime $PayDate
     */
    public $PayDate;
    /**
     * Id
     * 
     * @var int $UserId
     */
    public $UserId;
    /**
     * Double
     * 
     * @var float $PayAmt
     */
    public $PayAmt;
    /**
     * String
     * 
     * @var string $PayType
     */
    public $PayType;
    /**
     * Id
     * 
     * @var Contact $ContactId
     */
    public $ContactId;
    /**
     * String
     * 
     * @var string $PayNote
     */
    public $PayNote;
    /**
     * Id
     * 
     * @var Invoice $InvoiceId
     */
    public $InvoiceId;
    /**
     * Id
     * 
     * @var int $RefundId
     */
    public $RefundId;
    /**
     * Id
     * 
     * @var CCharge $ChargeId
     */
    public $ChargeId;
    /**
     * Integer
     * 
     * @var string $Commission
     */
    public $Commission;
    /**
     * Integer
     * 
     * @var string $Synced
     */
    public $Synced;
    /**
     * @var array $propertyMap
     */
    protected static $propertyMap = array('Id' => 'int', 'PayDate' => '\DateTime', 'UserId' => 'int', 'PayAmt' => 'float', 'PayType' => 'string', 'ContactId' => 'Contact', 'PayNote' => 'string', 'InvoiceId' => 'Invoice', 'RefundId' => 'int', 'ChargeId' => 'CCharge', 'Commission' => 'string', 'Synced' => 'string');

}
