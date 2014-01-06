<?php

namespace Wesnick\Infusionsoft\Proxy;

use Wesnick\Infusionsoft\Remote\BaseObject;

/**
 * class Job
 * LEFT JOIN Address ON Job.ShippingAddressId=Address.Id
 */
class Job extends BaseObject
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
     * @var string $JobTitle
     */
    public $JobTitle;
    /**
     * Id
     * 
     * @var Contact $ContactId
     */
    public $ContactId;
    /**
     * Date
     * 
     * @var \DateTime $StartDate
     */
    public $StartDate;
    /**
     * Date
     * 
     * @var \DateTime $DueDate
     */
    public $DueDate;
    /**
     * String
     * 
     * @var string $JobNotes
     */
    public $JobNotes;
    /**
     * Id
     * 
     * @var Product $ProductId
     */
    public $ProductId;
    /**
     * String
     * 
     * @var string $JobStatus
     */
    public $JobStatus;
    /**
     * DateTime
     * 
     * @var \DateTime $DateCreated
     */
    public $DateCreated;
    /**
     * Id
     * 
     * @var JobRecurring $JobRecurringId
     */
    public $JobRecurringId;
    /**
     * String
     * 
     * @var string $OrderType
     */
    public $OrderType;
    /**
     * Integer
     * 
     * @var string $OrderStatus
     */
    public $OrderStatus;
    /**
     * String
     * 
     * @var string $ShipFirstName
     */
    public $ShipFirstName;
    /**
     * String
     * 
     * @var string $ShipMiddleName
     */
    public $ShipMiddleName;
    /**
     * String
     * 
     * @var string $ShipLastName
     */
    public $ShipLastName;
    /**
     * String
     * 
     * @var string $ShipCompany
     */
    public $ShipCompany;
    /**
     * String
     * 
     * @var string $ShipPhone
     */
    public $ShipPhone;
    /**
     * String
     * 
     * @var string $ShipStreet1
     */
    public $ShipStreet1;
    /**
     * String
     * 
     * @var string $ShipStreet2
     */
    public $ShipStreet2;
    /**
     * String
     * 
     * @var string $ShipCity
     */
    public $ShipCity;
    /**
     * String
     * 
     * @var string $ShipState
     */
    public $ShipState;
    /**
     * String
     * 
     * @var string $ShipZip
     */
    public $ShipZip;
    /**
     * String
     * 
     * @var string $ShipCountry
     */
    public $ShipCountry;
    /**
     * @var array $propertyMap
     */
    protected $propertyMap = array('Id' => 'int', 'JobTitle' => 'string', 'ContactId' => 'Contact', 'StartDate' => '\DateTime', 'DueDate' => '\DateTime', 'JobNotes' => 'string', 'ProductId' => 'Product', 'JobStatus' => 'string', 'DateCreated' => '\DateTime', 'JobRecurringId' => 'JobRecurring', 'OrderType' => 'string', 'OrderStatus' => 'string', 'ShipFirstName' => 'string', 'ShipMiddleName' => 'string', 'ShipLastName' => 'string', 'ShipCompany' => 'string', 'ShipPhone' => 'string', 'ShipStreet1' => 'string', 'ShipStreet2' => 'string', 'ShipCity' => 'string', 'ShipState' => 'string', 'ShipZip' => 'string', 'ShipCountry' => 'string');

}
