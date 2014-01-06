<?php

namespace Wesnick\Infusionsoft\Proxy;

use Wesnick\Infusionsoft\Remote\BaseObject;

/**
 * class Status
 * Lead Statuses
 */
class Status extends BaseObject
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
     * @var string $StatusName
     */
    public $StatusName;
    /**
     * String
     * 
     * @var string $StatusOrder
     */
    public $StatusOrder;
    /**
     * String
     * 
     * @var string $TargetNumDays
     */
    public $TargetNumDays;
    /**
     * @var array $propertyMap
     */
    protected $propertyMap = array('Id' => 'int', 'StatusName' => 'string', 'StatusOrder' => 'string', 'TargetNumDays' => 'string');

}
