<?php

namespace Wesnick\Infusionsoft\Proxy;

use Wesnick\Infusionsoft\Remote\BaseObject;

/**
 * class LeadSourceExpense
 */
class LeadSourceExpense extends BaseObject
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
     * @var int $LeadSourceRecurringExpenseId
     */
    public $LeadSourceRecurringExpenseId;
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
     * @var \DateTime $DateIncurred
     */
    public $DateIncurred;
    /**
     * @var array $propertyMap
     */
    protected $propertyMap = array('Id' => 'int', 'LeadSourceRecurringExpenseId' => 'int', 'LeadSourceId' => 'int', 'Title' => 'string', 'Notes' => 'string', 'Amount' => 'float', 'DateIncurred' => '\DateTime');

}
