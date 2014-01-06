<?php

namespace Wesnick\Infusionsoft\Proxy;

use Wesnick\Infusionsoft\Remote\BaseObject;

/**
 * class AffResource
 */
class AffResource extends BaseObject
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
     * @var string $Title
     */
    public $Title;
    /**
     * String
     * 
     * @var string $ResourceType
     */
    public $ResourceType;
    /**
     * String
     * 
     * @var string $ResourceOrder
     */
    public $ResourceOrder;
    /**
     * String
     * 
     * @var string $ResourceHTML
     */
    public $ResourceHTML;
    /**
     * String
     * 
     * @var string $ResourceHREF
     */
    public $ResourceHREF;
    /**
     * String
     * 
     * @var string $Notes
     */
    public $Notes;
    /**
     * String
     * 
     * @var string $ProgramIds
     */
    public $ProgramIds;
    /**
     * @var array $propertyMap
     */
    protected static $propertyMap = array('Id' => 'int', 'Title' => 'string', 'ResourceType' => 'string', 'ResourceOrder' => 'string', 'ResourceHTML' => 'string', 'ResourceHREF' => 'string', 'Notes' => 'string', 'ProgramIds' => 'string');

}
