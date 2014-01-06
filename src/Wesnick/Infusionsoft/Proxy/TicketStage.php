<?php

namespace Wesnick\Infusionsoft\Proxy;

use Wesnick\Infusionsoft\Remote\BaseObject;

/**
 * class TicketStage
 */
class TicketStage extends BaseObject
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
     * @var array $propertyMap
     */
    protected static $propertyMap = array('Id' => 'int', 'StageName' => 'string');

}
