<?php

namespace Wesnick\Infusionsoft\Proxy;

use Wesnick\Infusionsoft\Remote\BaseObject;

/**
 * class RecurringOrderWithContact
 * Recurring Order With Basic Contact Info (no custom fields)
 * JobRecurring
 * INNER JOIN Contact ON Contact.Id=JobRecurring.ContactId
 */
class RecurringOrderWithContact extends BaseObject
{

    /**
     * Id
     * 
     * @var int $RecurringOrderId
     */
    public $RecurringOrderId;
    /**
     * Id
     * 
     * @var int $ContactId
     */
    public $ContactId;
    /**
     * Id
     * 
     * @var SubscriptionPlan $ProgramId
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
     * Integer
     * 
     * @var string $ShippingOptionId
     */
    public $ShippingOptionId;
    /**
     * String
     * 
     * @var string $City
     */
    public $City;
    /**
     * String
     * 
     * @var string $Email
     */
    public $Email;
    /**
     * String
     * 
     * @var string $EmailAddress2
     */
    public $EmailAddress2;
    /**
     * String
     * 
     * @var string $EmailAddress3
     */
    public $EmailAddress3;
    /**
     * String
     * 
     * @var string $FirstName
     */
    public $FirstName;
    /**
     * String
     * 
     * @var string $HTMLSignature
     */
    public $HTMLSignature;
    /**
     * String
     * 
     * @var string $LastName
     */
    public $LastName;
    /**
     * String
     * 
     * @var string $MiddleName
     */
    public $MiddleName;
    /**
     * String
     * 
     * @var string $Nickname
     */
    public $Nickname;
    /**
     * String
     * 
     * @var string $Phone1
     */
    public $Phone1;
    /**
     * String
     * 
     * @var string $Phone1Ext
     */
    public $Phone1Ext;
    /**
     * String
     * 
     * @var string $Phone1Type
     */
    public $Phone1Type;
    /**
     * String
     * 
     * @var string $Phone2
     */
    public $Phone2;
    /**
     * String
     * 
     * @var string $Phone2Ext
     */
    public $Phone2Ext;
    /**
     * String
     * 
     * @var string $Phone2Type
     */
    public $Phone2Type;
    /**
     * String
     * 
     * @var string $PostalCode
     */
    public $PostalCode;
    /**
     * String
     * 
     * @var string $Signature
     */
    public $Signature;
    /**
     * String
     * 
     * @var string $SpouseName
     */
    public $SpouseName;
    /**
     * String
     * 
     * @var string $State
     */
    public $State;
    /**
     * String
     * 
     * @var string $Country
     */
    public $Country;
    /**
     * String
     * 
     * @var string $StreetAddress1
     */
    public $StreetAddress1;
    /**
     * String
     * 
     * @var string $StreetAddress2
     */
    public $StreetAddress2;
    /**
     * String
     * 
     * @var string $Suffix
     */
    public $Suffix;
    /**
     * String
     * 
     * @var string $Title
     */
    public $Title;
    /**
     * String
     * 
     * @var string $ZipFour1
     */
    public $ZipFour1;
    /**
     * @var array $propertyMap
     */
    protected $propertyMap = array('RecurringOrderId' => 'int', 'ContactId' => 'int', 'ProgramId' => 'SubscriptionPlan', 'SubscriptionPlanId' => 'int', 'ProductId' => 'Product', 'StartDate' => '\DateTime', 'EndDate' => '\DateTime', 'LastBillDate' => '\DateTime', 'NextBillDate' => '\DateTime', 'PaidThruDate' => '\DateTime', 'BillingCycle' => 'string', 'Frequency' => 'string', 'BillingAmt' => 'float', 'Status' => 'string', 'ReasonStopped' => 'string', 'AutoCharge' => 'string', 'CC1' => 'int', 'CC2' => 'int', 'NumDaysBetweenRetry' => 'string', 'MaxRetry' => 'string', 'MerchantAccountId' => 'int', 'AffiliateId' => 'int', 'PromoCode' => 'string', 'LeadAffiliateId' => 'int', 'Qty' => 'string', 'ShippingOptionId' => 'string', 'City' => 'string', 'Email' => 'string', 'EmailAddress2' => 'string', 'EmailAddress3' => 'string', 'FirstName' => 'string', 'HTMLSignature' => 'string', 'LastName' => 'string', 'MiddleName' => 'string', 'Nickname' => 'string', 'Phone1' => 'string', 'Phone1Ext' => 'string', 'Phone1Type' => 'string', 'Phone2' => 'string', 'Phone2Ext' => 'string', 'Phone2Type' => 'string', 'PostalCode' => 'string', 'Signature' => 'string', 'SpouseName' => 'string', 'State' => 'string', 'Country' => 'string', 'StreetAddress1' => 'string', 'StreetAddress2' => 'string', 'Suffix' => 'string', 'Title' => 'string', 'ZipFour1' => 'string');

}
