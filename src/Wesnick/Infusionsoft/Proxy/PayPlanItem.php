<?php

namespace Wesnick\Infusionsoft\Proxy;

use Wesnick\Infusionsoft\Remote\BaseObject;

/**
 * class PayPlanItem
 */
class PayPlanItem extends BaseObject
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
     * @var PayPlan $PayPlanId
     */
    public $PayPlanId;
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
     * @var string $Status
     */
    public $Status;
    /**
     * Double
     * 
     * @var float $AmtPaid
     */
    public $AmtPaid;
    /**
     * @var array $propertyMap
     */
    protected static $propertyMap = array('Id' => 'int', 'PayPlanId' => 'PayPlan', 'DateDue' => '\DateTime', 'AmtDue' => 'float', 'Status' => 'string', 'AmtPaid' => 'float');

}
