<?php

namespace Wesnick\Infusionsoft\Proxy;

use Wesnick\Infusionsoft\Remote\BaseObject;

/**
 * class Referral
 */
class Referral extends BaseObject
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
     * @var int $ContactId
     */
    public $ContactId;
    /**
     * Id
     * 
     * @var int $AffiliateId
     */
    public $AffiliateId;
    /**
     * Date
     * 
     * @var \DateTime $DateSet
     */
    public $DateSet;
    /**
     * Date
     * 
     * @var \DateTime $DateExpires
     */
    public $DateExpires;
    /**
     * String
     * 
     * @var string $IPAddress
     */
    public $IPAddress;
    /**
     * String
     * 
     * @var string $Source
     */
    public $Source;
    /**
     * String
     * 
     * @var string $Info
     */
    public $Info;
    /**
     * Integer
     * 
     * @var string $Type
     */
    public $Type;
    /**
     * @var array $propertyMap
     */
    protected $propertyMap = array('Id' => 'int', 'ContactId' => 'int', 'AffiliateId' => 'int', 'DateSet' => '\DateTime', 'DateExpires' => '\DateTime', 'IPAddress' => 'string', 'Source' => 'string', 'Info' => 'string', 'Type' => 'string');

}
