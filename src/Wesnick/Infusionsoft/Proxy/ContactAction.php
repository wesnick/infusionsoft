<?php

namespace Wesnick\Infusionsoft\Proxy;

use Wesnick\Infusionsoft\Remote\BaseObject;

/**
 * class ContactAction
 */
class ContactAction extends BaseObject
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
     * @var Opportunity $OpportunityId
     */
    public $OpportunityId;
    /**
     * String
     * 
     * @var string $ActionType
     */
    public $ActionType;
    /**
     * String
     * 
     * @var string $ActionDescription
     */
    public $ActionDescription;
    /**
     * DateTime
     * 
     * @var \DateTime $CreationDate
     */
    public $CreationDate;
    /**
     * String
     * 
     * @var string $CreationNotes
     */
    public $CreationNotes;
    /**
     * DateTime
     * 
     * @var \DateTime $CompletionDate
     */
    public $CompletionDate;
    /**
     * DateTime
     * 
     * @var \DateTime $ActionDate
     */
    public $ActionDate;
    /**
     * DateTime
     * 
     * @var \DateTime $EndDate
     */
    public $EndDate;
    /**
     * DateTime
     * 
     * @var \DateTime $PopupDate
     */
    public $PopupDate;
    /**
     * Id
     * 
     * @var User $UserID
     */
    public $UserID;
    /**
     * Integer
     * 
     * @var string $Accepted
     */
    public $Accepted;
    /**
     * Id
     * 
     * @var User $CreatedBy
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
     * @var User $LastUpdatedBy
     */
    public $LastUpdatedBy;
    /**
     * Integer
     * 
     * @var string $Priority
     */
    public $Priority;
    /**
     * Integer
     * 
     * @var string $IsAppointment
     */
    public $IsAppointment;
    /**
     * Enum
     * 
     * @var string $ObjectType
     */
    public $ObjectType;
    /**
     * @var array $propertyMap
     */
    protected $propertyMap = array('Id' => 'int', 'ContactId' => 'Contact', 'OpportunityId' => 'Opportunity', 'ActionType' => 'string', 'ActionDescription' => 'string', 'CreationDate' => '\DateTime', 'CreationNotes' => 'string', 'CompletionDate' => '\DateTime', 'ActionDate' => '\DateTime', 'EndDate' => '\DateTime', 'PopupDate' => '\DateTime', 'UserID' => 'User', 'Accepted' => 'string', 'CreatedBy' => 'User', 'LastUpdated' => '\DateTime', 'LastUpdatedBy' => 'User', 'Priority' => 'string', 'IsAppointment' => 'string', 'ObjectType' => 'string');

}
