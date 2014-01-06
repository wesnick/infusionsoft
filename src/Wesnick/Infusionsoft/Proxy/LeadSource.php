<?php

namespace Wesnick\Infusionsoft\Proxy;

use Wesnick\Infusionsoft\Remote\BaseObject;

/**
 * class LeadSource
 * Lead Sources in the system
 */
class LeadSource extends BaseObject
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
     * @var string $Name
     */
    public $Name;
    /**
     * String
     * 
     * @var string $Description
     */
    public $Description;
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
     * String
     * 
     * @var string $CostPerLead
     */
    public $CostPerLead;
    /**
     * String
     * 
     * @var string $Vendor
     */
    public $Vendor;
    /**
     * String
     * 
     * @var string $Medium
     */
    public $Medium;
    /**
     * String
     * 
     * @var string $Message
     */
    public $Message;
    /**
     * Id
     * 
     * @var int $LeadSourceCategoryId
     */
    public $LeadSourceCategoryId;
    /**
     * String
     * 
     * @var string $Status
     */
    public $Status;
    /**
     * @var array $propertyMap
     */
    protected static $propertyMap = array('Id' => 'int', 'Name' => 'string', 'Description' => 'string', 'StartDate' => '\DateTime', 'EndDate' => '\DateTime', 'CostPerLead' => 'string', 'Vendor' => 'string', 'Medium' => 'string', 'Message' => 'string', 'LeadSourceCategoryId' => 'int', 'Status' => 'string');

}
