<?php

namespace Wesnick\Infusionsoft\Proxy;

use Wesnick\Infusionsoft\Remote\BaseObject;

/**
 * class JobRecurringInstance
 */
class JobRecurringInstance extends BaseObject
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
     * @var RecurringOrder $RecurringId
     */
    public $RecurringId;
    /**
     * Id
     * 
     * @var InvoiceItem $InvoiceItemId
     */
    public $InvoiceItemId;
    /**
     * Integer
     * 
     * @var string $Status
     */
    public $Status;
    /**
     * Integer
     * 
     * @var string $AutoCharge
     */
    public $AutoCharge;
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
     * @var array $propertyMap
     */
    protected $propertyMap = array('Id' => 'int', 'RecurringId' => 'RecurringOrder', 'InvoiceItemId' => 'InvoiceItem', 'Status' => 'string', 'AutoCharge' => 'string', 'StartDate' => '\DateTime', 'EndDate' => '\DateTime', 'DateCreated' => '\DateTime', 'Description' => 'string');

}
