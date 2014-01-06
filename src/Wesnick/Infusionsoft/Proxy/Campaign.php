<?php

namespace Wesnick\Infusionsoft\Proxy;

use Wesnick\Infusionsoft\Remote\BaseObject;

/**
 * class Campaign
 * Follow-up sequence names, ids, and statuses
 */
class Campaign extends BaseObject
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
     * @var string $Name
     */
    public $Name;
    /**
     * String
     * 
     * @var string $Status
     */
    public $Status;
    /**
     * @var array $propertyMap
     */
    protected $propertyMap = array('Id' => 'int', 'Name' => 'string', 'Status' => 'string');

}
