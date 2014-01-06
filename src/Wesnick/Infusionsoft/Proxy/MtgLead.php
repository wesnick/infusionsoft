<?php

namespace Wesnick\Infusionsoft\Proxy;

use Wesnick\Infusionsoft\Remote\BaseObject;

/**
 * class MtgLead
 * Ln1003
 */
class MtgLead extends BaseObject
{

    /**
     * Id
     * 
     * @var int $Id
     */
    public $Id;
    /**
     * DateTime
     * 
     * @var \DateTime $DateAppraisalOrdered
     */
    public $DateAppraisalOrdered;
    /**
     * DateTime
     * 
     * @var \DateTime $DateAppraisalDone
     */
    public $DateAppraisalDone;
    /**
     * DateTime
     * 
     * @var \DateTime $DateAppraisalReceived
     */
    public $DateAppraisalReceived;
    /**
     * DateTime
     * 
     * @var \DateTime $DateTitleOrdered
     */
    public $DateTitleOrdered;
    /**
     * DateTime
     * 
     * @var \DateTime $DateTitleReceived
     */
    public $DateTitleReceived;
    /**
     * DateTime
     * 
     * @var \DateTime $DateRateLocked
     */
    public $DateRateLocked;
    /**
     * DateTime
     * 
     * @var \DateTime $DateRateLockExpires
     */
    public $DateRateLockExpires;
    /**
     * DateTime
     * 
     * @var \DateTime $CreditReportDate
     */
    public $CreditReportDate;
    /**
     * DateTime
     * 
     * @var \DateTime $ApplicationDate
     */
    public $ApplicationDate;
    /**
     * DateTime
     * 
     * @var \DateTime $ActualCloseDate
     */
    public $ActualCloseDate;
    /**
     * DateTime
     * 
     * @var \DateTime $FundingDate
     */
    public $FundingDate;
    /**
     * @var array $propertyMap
     */
    protected static $propertyMap = array('Id' => 'int', 'DateAppraisalOrdered' => '\DateTime', 'DateAppraisalDone' => '\DateTime', 'DateAppraisalReceived' => '\DateTime', 'DateTitleOrdered' => '\DateTime', 'DateTitleReceived' => '\DateTime', 'DateRateLocked' => '\DateTime', 'DateRateLockExpires' => '\DateTime', 'CreditReportDate' => '\DateTime', 'ApplicationDate' => '\DateTime', 'ActualCloseDate' => '\DateTime', 'FundingDate' => '\DateTime');

}
