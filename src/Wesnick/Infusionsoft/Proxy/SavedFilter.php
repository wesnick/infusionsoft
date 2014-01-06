<?php

namespace Wesnick\Infusionsoft\Proxy;

use Wesnick\Infusionsoft\Remote\BaseObject;

/**
 * class SavedFilter
 */
class SavedFilter extends BaseObject
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
     * @var string $FilterName
     */
    public $FilterName;
    /**
     * String
     * 
     * @var string $ReportStoredName
     */
    public $ReportStoredName;
    /**
     * String
     * 
     * @var string $UserId
     */
    public $UserId;
    /**
     * @var array $propertyMap
     */
    protected static $propertyMap = array('Id' => 'int', 'FilterName' => 'string', 'ReportStoredName' => 'string', 'UserId' => 'string');

}
