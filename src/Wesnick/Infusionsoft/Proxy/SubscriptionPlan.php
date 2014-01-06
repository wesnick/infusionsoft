<?php

namespace Wesnick\Infusionsoft\Proxy;

use Wesnick\Infusionsoft\Remote\BaseObject;

/**
 * class SubscriptionPlan
 * Subscription Plans
 * SubscriptionPlan
 */
class SubscriptionPlan extends BaseObject
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
     * @var int $ProductId
     */
    public $ProductId;
    /**
     * String
     * 
     * @var string $Cycle
     */
    public $Cycle;
    /**
     * Integer
     * 
     * @var string $Frequency
     */
    public $Frequency;
    /**
     * Double
     * 
     * @var float $PreAuthorizeAmount
     */
    public $PreAuthorizeAmount;
    /**
     * Boolean
     * 
     * @var bool $Prorate
     */
    public $Prorate;
    /**
     * Boolean
     * 
     * @var bool $Active
     */
    public $Active;
    /**
     * Double
     * 
     * @var float $PlanPrice
     */
    public $PlanPrice;
    /**
     * @var array $propertyMap
     */
    protected $propertyMap = array('Id' => 'int', 'ProductId' => 'int', 'Cycle' => 'string', 'Frequency' => 'string', 'PreAuthorizeAmount' => 'float', 'Prorate' => 'bool', 'Active' => 'bool', 'PlanPrice' => 'float');

}
