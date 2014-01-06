<?php

namespace Wesnick\Infusionsoft\Proxy;

use Wesnick\Infusionsoft\Remote\BaseObject;

/**
 * class FileBox
 */
class FileBox extends BaseObject
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
     * @var string $FileName
     */
    public $FileName;
    /**
     * String
     * 
     * @var string $Extension
     */
    public $Extension;
    /**
     * Long
     * 
     * @var int $FileSize
     */
    public $FileSize;
    /**
     * Id
     * 
     * @var int $ContactId
     */
    public $ContactId;
    /**
     * Integer
     * 
     * @var string $Public
     */
    public $Public;
    /**
     * @var array $propertyMap
     */
    protected $propertyMap = array('Id' => 'int', 'FileName' => 'string', 'Extension' => 'string', 'FileSize' => 'int', 'ContactId' => 'int', 'Public' => 'string');

}
