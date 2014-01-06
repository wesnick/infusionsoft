<?php

namespace Wesnick\Infusionsoft\Proxy;

use Wesnick\Infusionsoft\Remote\BaseObject;

/**
 * class Ticket
 * ServiceCall
 */
class Ticket extends BaseObject
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
     * @var int $IssueId
     */
    public $IssueId;
    /**
     * Id
     * 
     * @var int $ContactId
     */
    public $ContactId;
    /**
     * Id
     * 
     * @var int $UserId
     */
    public $UserId;
    /**
     * Id
     * 
     * @var int $DevId
     */
    public $DevId;
    /**
     * String
     * 
     * @var string $TicketTitle
     */
    public $TicketTitle;
    /**
     * String
     * 
     * @var string $TicketApplication
     */
    public $TicketApplication;
    /**
     * Id
     * 
     * @var int $TicketCategory
     */
    public $TicketCategory;
    /**
     * Id
     * 
     * @var int $TicketTypeId
     */
    public $TicketTypeId;
    /**
     * String
     * 
     * @var string $Summary
     */
    public $Summary;
    /**
     * Id
     * 
     * @var int $Stage
     */
    public $Stage;
    /**
     * Integer
     * 
     * @var string $Priority
     */
    public $Priority;
    /**
     * Double
     * 
     * @var float $Ordering
     */
    public $Ordering;
    /**
     * DateTime
     * 
     * @var \DateTime $DateCreated
     */
    public $DateCreated;
    /**
     * Id
     * 
     * @var int $CreatedBy
     */
    public $CreatedBy;
    /**
     * DateTime
     * 
     * @var \DateTime $LastUpdated
     */
    public $LastUpdated;
    /**
     * Id
     * 
     * @var int $LastUpdatedBy
     */
    public $LastUpdatedBy;
    /**
     * Date
     * 
     * @var \DateTime $CloseDate
     */
    public $CloseDate;
    /**
     * Date
     * 
     * @var \DateTime $FolowUpDate
     */
    public $FolowUpDate;
    /**
     * Date
     * 
     * @var \DateTime $TargetCompletionDate
     */
    public $TargetCompletionDate;
    /**
     * Date
     * 
     * @var \DateTime $DateInStage
     */
    public $DateInStage;
    /**
     * Double
     * 
     * @var float $TimeSpent
     */
    public $TimeSpent;
    /**
     * Integer
     * 
     * @var string $HasCustomerCalled
     */
    public $HasCustomerCalled;
    /**
     * @var array $propertyMap
     */
    protected static $propertyMap = array('Id' => 'int', 'IssueId' => 'int', 'ContactId' => 'int', 'UserId' => 'int', 'DevId' => 'int', 'TicketTitle' => 'string', 'TicketApplication' => 'string', 'TicketCategory' => 'int', 'TicketTypeId' => 'int', 'Summary' => 'string', 'Stage' => 'int', 'Priority' => 'string', 'Ordering' => 'float', 'DateCreated' => '\DateTime', 'CreatedBy' => 'int', 'LastUpdated' => '\DateTime', 'LastUpdatedBy' => 'int', 'CloseDate' => '\DateTime', 'FolowUpDate' => '\DateTime', 'TargetCompletionDate' => '\DateTime', 'DateInStage' => '\DateTime', 'TimeSpent' => 'float', 'HasCustomerCalled' => 'string');

}
