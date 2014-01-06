<?php

namespace Wesnick\Infusionsoft\Proxy;

use Wesnick\Infusionsoft\Remote\BaseObject;

/**
 * class Expense
 */
class Expense extends BaseObject
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
     * @var int $ContactId
     */
    public $ContactId;
    /**
     * Enum
     * 
     * @var string $ExpenseType
     */
    public $ExpenseType;
    /**
     * Id
     * 
     * @var int $TypeId
     */
    public $TypeId;
    /**
     * Double
     * 
     * @var float $ExpenseAmt
     */
    public $ExpenseAmt;
    /**
     * DateTime
     * 
     * @var \DateTime $DateIncurred
     */
    public $DateIncurred;
    /**
     * @var array $propertyMap
     */
    protected static $propertyMap = array('Id' => 'int', 'ContactId' => 'int', 'ExpenseType' => 'string', 'TypeId' => 'int', 'ExpenseAmt' => 'float', 'DateIncurred' => '\DateTime');

}
