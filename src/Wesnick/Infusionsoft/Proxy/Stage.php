<?php

namespace Wesnick\Infusionsoft\Proxy;

use Wesnick\Infusionsoft\Remote\BaseObject;

/**
 * class Stage
 * Lead Stages
 */
class Stage extends BaseObject
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
     * @var string $StageName
     */
    public $StageName;
    /**
     * Integer
     * 
     * @var string $StageOrder
     */
    public $StageOrder;
    /**
     * Integer
     * 
     * @var string $TargetNumDays
     */
    public $TargetNumDays;
    /**
     * @var array $propertyMap
     */
    protected $propertyMap = array('Id' => 'int', 'StageName' => 'string', 'StageOrder' => 'string', 'TargetNumDays' => 'string');

}
