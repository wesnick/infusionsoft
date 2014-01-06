<?php

namespace Wesnick\Infusionsoft\Proxy;

use Wesnick\Infusionsoft\Remote\BaseObject;

/**
 * class Affiliate
 */
class Affiliate extends BaseObject
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
     * @var Affiliate $ParentId
     */
    public $ParentId;
    /**
     * Double
     * 
     * @var float $LeadAmt
     */
    public $LeadAmt;
    /**
     * Double
     * 
     * @var float $LeadPercent
     */
    public $LeadPercent;
    /**
     * Double
     * 
     * @var float $SaleAmt
     */
    public $SaleAmt;
    /**
     * Double
     * 
     * @var float $SalePercent
     */
    public $SalePercent;
    /**
     * Integer
     * 
     * @var string $PayoutType
     */
    public $PayoutType;
    /**
     * Integer
     * 
     * @var string $DefCommissionType
     */
    public $DefCommissionType;
    /**
     * Integer
     * 
     * @var string $Status
     */
    public $Status;
    /**
     * String
     * 
     * @var string $AffName
     */
    public $AffName;
    /**
     * String
     * 
     * @var string $Password
     */
    public $Password;
    /**
     * String
     * 
     * @var string $AffCode
     */
    public $AffCode;
    /**
     * Integer
     * 
     * @var string $NotifyLead
     */
    public $NotifyLead;
    /**
     * Integer
     * 
     * @var string $NotifySale
     */
    public $NotifySale;
    /**
     * Integer
     * 
     * @var string $LeadCookieFor
     */
    public $LeadCookieFor;
    /**
     * @var array $propertyMap
     */
    protected static $propertyMap = array('Id' => 'int', 'ContactId' => 'Contact', 'ParentId' => 'Affiliate', 'LeadAmt' => 'float', 'LeadPercent' => 'float', 'SaleAmt' => 'float', 'SalePercent' => 'float', 'PayoutType' => 'string', 'DefCommissionType' => 'string', 'Status' => 'string', 'AffName' => 'string', 'Password' => 'string', 'AffCode' => 'string', 'NotifyLead' => 'string', 'NotifySale' => 'string', 'LeadCookieFor' => 'string');

}
