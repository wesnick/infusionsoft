<?php

namespace Wesnick\Infusionsoft\Proxy;

use Wesnick\Infusionsoft\Remote\BaseObject;

/**
 * class Invoice
 * An invoice for a client
 */
class Invoice extends BaseObject
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
     * @var Contact $ContactId
     */
    public $ContactId;
    /**
     * Id
     * 
     * @var Job $JobId
     */
    public $JobId;
    /**
     * DateTime
     * 
     * @var \DateTime $DateCreated
     */
    public $DateCreated;
    /**
     * Double
     * 
     * @var float $InvoiceTotal
     */
    public $InvoiceTotal;
    /**
     * Double
     * 
     * @var float $TotalPaid
     */
    public $TotalPaid;
    /**
     * Double
     * 
     * @var float $TotalDue
     */
    public $TotalDue;
    /**
     * Integer
     * 
     * @var string $PayStatus
     */
    public $PayStatus;
    /**
     * Integer
     * 
     * @var string $CreditStatus
     */
    public $CreditStatus;
    /**
     * Integer
     * 
     * @var string $RefundStatus
     */
    public $RefundStatus;
    /**
     * Integer
     * 
     * @var string $PayPlanStatus
     */
    public $PayPlanStatus;
    /**
     * Id
     * 
     * @var Affiliate $AffiliateId
     */
    public $AffiliateId;
    /**
     * Id
     * 
     * @var Affiliate $LeadAffiliateId
     */
    public $LeadAffiliateId;
    /**
     * String
     * 
     * @var string $PromoCode
     */
    public $PromoCode;
    /**
     * String
     * 
     * @var string $InvoiceType
     */
    public $InvoiceType;
    /**
     * String
     * 
     * @var string $Description
     */
    public $Description;
    /**
     * String
     * 
     * @var string $ProductSold
     */
    public $ProductSold;
    /**
     * Integer
     * 
     * @var string $Synced
     */
    public $Synced;
    /**
     * @var array $propertyMap
     */
    protected $propertyMap = array('Id' => 'int', 'ContactId' => 'Contact', 'JobId' => 'Job', 'DateCreated' => '\DateTime', 'InvoiceTotal' => 'float', 'TotalPaid' => 'float', 'TotalDue' => 'float', 'PayStatus' => 'string', 'CreditStatus' => 'string', 'RefundStatus' => 'string', 'PayPlanStatus' => 'string', 'AffiliateId' => 'Affiliate', 'LeadAffiliateId' => 'Affiliate', 'PromoCode' => 'string', 'InvoiceType' => 'string', 'Description' => 'string', 'ProductSold' => 'string', 'Synced' => 'string');

}
