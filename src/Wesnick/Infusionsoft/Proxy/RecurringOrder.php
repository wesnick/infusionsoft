<?php

namespace Wesnick\Infusionsoft\Proxy;

use Wesnick\Infusionsoft\Remote\BaseObject;

/**
 * class RecurringOrder
 * Recurring Order
 * JobRecurring
 * INNER JOIN Product ON Product.Id=JobRecurring.ProductId
 */
class RecurringOrder extends BaseObject
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
     * @var int $OriginatingOrderId
     */
    public $OriginatingOrderId;
    /**
     * Id
     * 
     * @var int $ProgramId
     */
    public $ProgramId;
    /**
     * Id
     * 
     * @var int $SubscriptionPlanId
     */
    public $SubscriptionPlanId;
    /**
     * Id
     * 
     * @var Product $ProductId
     */
    public $ProductId;
    /**
     * Date
     * 
     * @var \DateTime $StartDate
     */
    public $StartDate;
    /**
     * Date
     * 
     * @var \DateTime $EndDate
     */
    public $EndDate;
    /**
     * Date
     * 
     * @var \DateTime $LastBillDate
     */
    public $LastBillDate;
    /**
     * Date
     * 
     * @var \DateTime $NextBillDate
     */
    public $NextBillDate;
    /**
     * Date
     * 
     * @var \DateTime $PaidThruDate
     */
    public $PaidThruDate;
    /**
     * String
     * 
     * @var string $BillingCycle
     */
    public $BillingCycle;
    /**
     * Integer
     * 
     * @var string $Frequency
     */
    public $Frequency;
    /**
     * Double
     * 
     * @var float $BillingAmt
     */
    public $BillingAmt;
    /**
     * String
     * 
     * @var string $Status
     */
    public $Status;
    /**
     * String
     * 
     * @var string $ReasonStopped
     */
    public $ReasonStopped;
    /**
     * Integer
     * 
     * @var string $AutoCharge
     */
    public $AutoCharge;
    /**
     * Id
     * 
     * @var int $CC1
     */
    public $CC1;
    /**
     * Id
     * 
     * @var int $CC2
     */
    public $CC2;
    /**
     * Integer
     * 
     * @var string $NumDaysBetweenRetry
     */
    public $NumDaysBetweenRetry;
    /**
     * Integer
     * 
     * @var string $MaxRetry
     */
    public $MaxRetry;
    /**
     * Id
     * 
     * @var int $MerchantAccountId
     */
    public $MerchantAccountId;
    /**
     * Id
     * 
     * @var int $AffiliateId
     */
    public $AffiliateId;
    /**
     * String
     * 
     * @var string $PromoCode
     */
    public $PromoCode;
    /**
     * Id
     * 
     * @var int $LeadAffiliateId
     */
    public $LeadAffiliateId;
    /**
     * Integer
     * 
     * @var string $Qty
     */
    public $Qty;
    /**
     * Id
     * 
     * @var int $ShippingOptionId
     */
    public $ShippingOptionId;
    /**
     * @var array $propertyMap
     */
    protected $propertyMap = array('Id' => 'int', 'ContactId' => 'Contact', 'OriginatingOrderId' => 'int', 'ProgramId' => 'int', 'SubscriptionPlanId' => 'int', 'ProductId' => 'Product', 'StartDate' => '\DateTime', 'EndDate' => '\DateTime', 'LastBillDate' => '\DateTime', 'NextBillDate' => '\DateTime', 'PaidThruDate' => '\DateTime', 'BillingCycle' => 'string', 'Frequency' => 'string', 'BillingAmt' => 'float', 'Status' => 'string', 'ReasonStopped' => 'string', 'AutoCharge' => 'string', 'CC1' => 'int', 'CC2' => 'int', 'NumDaysBetweenRetry' => 'string', 'MaxRetry' => 'string', 'MerchantAccountId' => 'int', 'AffiliateId' => 'int', 'PromoCode' => 'string', 'LeadAffiliateId' => 'int', 'Qty' => 'string', 'ShippingOptionId' => 'int');

}
