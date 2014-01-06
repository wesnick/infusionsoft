<?php

namespace Wesnick\Infusionsoft\Proxy;

use Wesnick\Infusionsoft\Remote\BaseObject;

/**
 * class LeadSourceRecurringExpense
 */
class LeadSourceRecurringExpense extends BaseObject
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
     * @var int $LeadSourceId
     */
    public $LeadSourceId;
    /**
     * String
     * 
     * @var string $Title
     */
    public $Title;
    /**
     * String
     * 
     * @var string $Notes
     */
    public $Notes;
    /**
     * Double
     * 
     * @var float $Amount
     */
    public $Amount;
    /**
     * DateTime
     * 
     * @var \DateTime $StartDate
     */
    public $StartDate;
    /**
     * DateTime
     * 
     * @var \DateTime $EndDate
     */
    public $EndDate;
    /**
     * DateTime
     * 
     * @var \DateTime $NextExpenseDate
     */
    public $NextExpenseDate;
    /**
     * @var array $propertyMap
     */
    protected $propertyMap = array('Id' => 'int', 'LeadSourceId' => 'int', 'Title' => 'string', 'Notes' => 'string', 'Amount' => 'float', 'StartDate' => '\DateTime', 'EndDate' => '\DateTime', 'NextExpenseDate' => '\DateTime');

}
