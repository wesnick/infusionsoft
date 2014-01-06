<?php

namespace Wesnick\Infusionsoft\Proxy;

use Wesnick\Infusionsoft\Remote\BaseObject;

/**
 * class TicketType
 */
class TicketType extends BaseObject
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
     * @var int $CategoryId
     */
    public $CategoryId;
    /**
     * String
     * 
     * @var string $Label
     */
    public $Label;
    /**
     * @var array $propertyMap
     */
    protected $propertyMap = array('Id' => 'int', 'CategoryId' => 'int', 'Label' => 'string');

}
