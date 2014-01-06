<?php

namespace Wesnick\Infusionsoft\Proxy;

use Wesnick\Infusionsoft\Remote\BaseObject;

/**
 * class ActionSequence
 * ContactTemplate
 */
class ActionSequence extends BaseObject
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
     * @var string $TemplateName
     */
    public $TemplateName;
    /**
     * String
     * 
     * @var string $VisibleToTheseUsers
     */
    public $VisibleToTheseUsers;
    /**
     * @var array $propertyMap
     */
    protected static $propertyMap = array('Id' => 'int', 'TemplateName' => 'string', 'VisibleToTheseUsers' => 'string');

}
