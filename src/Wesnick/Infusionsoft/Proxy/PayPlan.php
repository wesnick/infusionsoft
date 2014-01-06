<?php

namespace Wesnick\Infusionsoft\Proxy;

use Wesnick\Infusionsoft\Remote\BaseObject;

/**
 * class PayPlan
 */
class PayPlan extends BaseObject
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
     * @var Invoice $InvoiceId
     */
    public $InvoiceId;
    /**
     * Date
     * 
     * @var \DateTime $DateDue
     */
    public $DateDue;
    /**
     * Double
     * 
     * @var float $AmtDue
     */
    public $AmtDue;
    /**
     * Integer
     * 
     * @var string $Type
     */
    public $Type;
    /**
     * Date
     * 
     * @var \DateTime $InitDate
     */
    public $InitDate;
    /**
     * Date
     * 
     * @var \DateTime $StartDate
     */
    public $StartDate;
    /**
     * Double
     * 
     * @var float $FirstPayAmt
     */
    public $FirstPayAmt;
    /**
     * @var array $propertyMap
     */
    protected $propertyMap = array('Id' => 'int', 'InvoiceId' => 'Invoice', 'DateDue' => '\DateTime', 'AmtDue' => 'float', 'Type' => 'string', 'InitDate' => '\DateTime', 'StartDate' => '\DateTime', 'FirstPayAmt' => 'float');

}
