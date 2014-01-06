<?php

namespace Wesnick\Infusionsoft\Proxy;

use Wesnick\Infusionsoft\Remote\BaseObject;

/**
 * class User
 * User data
 * Contact
 * LEFT JOIN User ON Contact.Id=User.Id
 */
class User extends BaseObject
{

    /**
     * String
     * 
     * @var string $City
     */
    public $City;
    /**
     * String
     * 
     * @var string $Email
     */
    public $Email;
    /**
     * String
     * 
     * @var string $EmailAddress2
     */
    public $EmailAddress2;
    /**
     * String
     * 
     * @var string $EmailAddress3
     */
    public $EmailAddress3;
    /**
     * String
     * 
     * @var string $FirstName
     */
    public $FirstName;
    /**
     * String
     * 
     * @var string $HTMLSignature
     */
    public $HTMLSignature;
    /**
     * Id
     * 
     * @var int $Id
     */
    public $Id;
    /**
     * String
     * 
     * @var string $LastName
     */
    public $LastName;
    /**
     * String
     * 
     * @var string $MiddleName
     */
    public $MiddleName;
    /**
     * String
     * 
     * @var string $Nickname
     */
    public $Nickname;
    /**
     * String
     * 
     * @var string $Phone1
     */
    public $Phone1;
    /**
     * String
     * 
     * @var string $Phone1Ext
     */
    public $Phone1Ext;
    /**
     * String
     * 
     * @var string $Phone1Type
     */
    public $Phone1Type;
    /**
     * String
     * 
     * @var string $Phone2
     */
    public $Phone2;
    /**
     * String
     * 
     * @var string $Phone2Ext
     */
    public $Phone2Ext;
    /**
     * String
     * 
     * @var string $Phone2Type
     */
    public $Phone2Type;
    /**
     * String
     * 
     * @var string $PostalCode
     */
    public $PostalCode;
    /**
     * String
     * 
     * @var string $Signature
     */
    public $Signature;
    /**
     * String
     * 
     * @var string $SpouseName
     */
    public $SpouseName;
    /**
     * String
     * 
     * @var string $State
     */
    public $State;
    /**
     * String
     * 
     * @var string $StreetAddress1
     */
    public $StreetAddress1;
    /**
     * String
     * 
     * @var string $StreetAddress2
     */
    public $StreetAddress2;
    /**
     * String
     * 
     * @var string $Suffix
     */
    public $Suffix;
    /**
     * String
     * 
     * @var string $Title
     */
    public $Title;
    /**
     * String
     * 
     * @var string $ZipFour1
     */
    public $ZipFour1;
    /**
     * @var array $propertyMap
     */
    protected static $propertyMap = array('City' => 'string', 'Email' => 'string', 'EmailAddress2' => 'string', 'EmailAddress3' => 'string', 'FirstName' => 'string', 'HTMLSignature' => 'string', 'Id' => 'int', 'LastName' => 'string', 'MiddleName' => 'string', 'Nickname' => 'string', 'Phone1' => 'string', 'Phone1Ext' => 'string', 'Phone1Type' => 'string', 'Phone2' => 'string', 'Phone2Ext' => 'string', 'Phone2Type' => 'string', 'PostalCode' => 'string', 'Signature' => 'string', 'SpouseName' => 'string', 'State' => 'string', 'StreetAddress1' => 'string', 'StreetAddress2' => 'string', 'Suffix' => 'string', 'Title' => 'string', 'ZipFour1' => 'string');

}
