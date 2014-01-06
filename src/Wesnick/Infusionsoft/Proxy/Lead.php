<?php

namespace Wesnick\Infusionsoft\Proxy;

use Wesnick\Infusionsoft\Remote\BaseObject;

/**
 * class Lead
 * Lead data
 * Opportunity
 */
class Lead extends BaseObject
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
     * @var string $OpportunityTitle
     */
    public $OpportunityTitle;
    /**
     * Id
     * 
     * @var int $ContactID
     */
    public $ContactID;
    /**
     * Id
     * 
     * @var int $AffiliateId
     */
    public $AffiliateId;
    /**
     * Id
     * 
     * @var int $UserID
     */
    public $UserID;
    /**
     * Id
     * 
     * @var int $StageID
     */
    public $StageID;
    /**
     * Id
     * 
     * @var int $StatusID
     */
    public $StatusID;
    /**
     * String
     * 
     * @var string $Leadsource
     */
    public $Leadsource;
    /**
     * String
     * 
     * @var string $Objection
     */
    public $Objection;
    /**
     * Double
     * 
     * @var float $ProjectedRevenueLow
     */
    public $ProjectedRevenueLow;
    /**
     * Double
     * 
     * @var float $ProjectedRevenueHigh
     */
    public $ProjectedRevenueHigh;
    /**
     * String
     * 
     * @var string $OpportunityNotes
     */
    public $OpportunityNotes;
    /**
     * DateTime
     * 
     * @var \DateTime $DateCreated
     */
    public $DateCreated;
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
     * Id
     * 
     * @var int $CreatedBy
     */
    public $CreatedBy;
    /**
     * DateTime
     * 
     * @var \DateTime $EstimatedCloseDate
     */
    public $EstimatedCloseDate;
    /**
     * DateTime
     * 
     * @var \DateTime $NextActionDate
     */
    public $NextActionDate;
    /**
     * String
     * 
     * @var string $NextActionNotes
     */
    public $NextActionNotes;
    /**
     * @var array $propertyMap
     */
    protected $propertyMap = array('Id' => 'int', 'OpportunityTitle' => 'string', 'ContactID' => 'int', 'AffiliateId' => 'int', 'UserID' => 'int', 'StageID' => 'int', 'StatusID' => 'int', 'Leadsource' => 'string', 'Objection' => 'string', 'ProjectedRevenueLow' => 'float', 'ProjectedRevenueHigh' => 'float', 'OpportunityNotes' => 'string', 'DateCreated' => '\DateTime', 'LastUpdated' => '\DateTime', 'LastUpdatedBy' => 'int', 'CreatedBy' => 'int', 'EstimatedCloseDate' => '\DateTime', 'NextActionDate' => '\DateTime', 'NextActionNotes' => 'string');

}
