<?php

namespace Wesnick\Infusionsoft\Proxy;

use Wesnick\Infusionsoft\Remote\BaseObject;

/**
 * class Template
 * MarketingPiece
 */
class Template extends BaseObject
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
     * @var string $PieceType
     */
    public $PieceType;
    /**
     * String
     * 
     * @var string $PieceTitle
     */
    public $PieceTitle;
    /**
     * String
     * 
     * @var string $Categories
     */
    public $Categories;
    /**
     * @var array $propertyMap
     */
    protected static $propertyMap = array('Id' => 'int', 'PieceType' => 'string', 'PieceTitle' => 'string', 'Categories' => 'string');

}
