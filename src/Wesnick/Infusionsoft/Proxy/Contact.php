<?php

namespace Wesnick\Infusionsoft\Proxy;

use Wesnick\Infusionsoft\Remote\BaseObject;

/**
 * class Contact
 * Contact data
 * Contact
 * LEFT JOIN LeadSource ON Contact.LeadSourceId=LeadSource.Id
 */
class Contact extends BaseObject
{

    /**
     * String
     * 
     * @var string $Address1Type
     */
    public $Address1Type;
    /**
     * String
     * 
     * @var string $Address2Street1
     */
    public $Address2Street1;
    /**
     * String
     * 
     * @var string $Address2Street2
     */
    public $Address2Street2;
    /**
     * String
     * 
     * @var string $Address2Type
     */
    public $Address2Type;
    /**
     * String
     * 
     * @var string $Address3Street1
     */
    public $Address3Street1;
    /**
     * String
     * 
     * @var string $Address3Street2
     */
    public $Address3Street2;
    /**
     * String
     * 
     * @var string $Address3Type
     */
    public $Address3Type;
    /**
     * Date
     * 
     * @var \DateTime $Anniversary
     */
    public $Anniversary;
    /**
     * String
     * 
     * @var string $AssistantName
     */
    public $AssistantName;
    /**
     * String
     * 
     * @var string $AssistantPhone
     */
    public $AssistantPhone;
    /**
     * String
     * 
     * @var string $BillingInformation
     */
    public $BillingInformation;
    /**
     * Date
     * 
     * @var \DateTime $Birthday
     */
    public $Birthday;
    /**
     * String
     * 
     * @var string $City
     */
    public $City;
    /**
     * String
     * 
     * @var string $City2
     */
    public $City2;
    /**
     * String
     * 
     * @var string $City3
     */
    public $City3;
    /**
     * String
     * 
     * @var string $Company
     */
    public $Company;
    /**
     * Id
     * 
     * @var int $AccountId
     */
    public $AccountId;
    /**
     * Id
     * 
     * @var Contact $CompanyID
     */
    public $CompanyID;
    /**
     * String
     * 
     * @var string $ContactNotes
     */
    public $ContactNotes;
    /**
     * String
     * 
     * @var string $ContactType
     */
    public $ContactType;
    /**
     * String
     * 
     * @var string $Country
     */
    public $Country;
    /**
     * String
     * 
     * @var string $Country2
     */
    public $Country2;
    /**
     * String
     * 
     * @var string $Country3
     */
    public $Country3;
    /**
     * Id
     * 
     * @var User $CreatedBy
     */
    public $CreatedBy;
    /**
     * DateTime
     * 
     * @var \DateTime $DateCreated
     */
    public $DateCreated;
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
     * @var string $Fax1
     */
    public $Fax1;
    /**
     * String
     * 
     * @var string $Fax1Type
     */
    public $Fax1Type;
    /**
     * String
     * 
     * @var string $Fax2
     */
    public $Fax2;
    /**
     * String
     * 
     * @var string $Fax2Type
     */
    public $Fax2Type;
    /**
     * String
     * 
     * @var string $FirstName
     */
    public $FirstName;
    /**
     * String
     * 
     * @var string $Groups
     */
    public $Groups;
    /**
     * Id
     * 
     * @var int $Id
     */
    public $Id;
    /**
     * String
     * 
     * @var string $JobTitle
     */
    public $JobTitle;
    /**
     * String
     * 
     * @var string $LastName
     */
    public $LastName;
    /**
     * DateTime
     * 
     * @var \DateTime $LastUpdated
     */
    public $LastUpdated;
    /**
     * Id
     * 
     * @var int $LastUpdatedBy
     */
    public $LastUpdatedBy;
    /**
     * String
     * 
     * @var string $Leadsource
     */
    public $Leadsource;
    /**
     * Id
     * 
     * @var int $LeadSourceId
     */
    public $LeadSourceId;
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
     * Id
     * 
     * @var User $OwnerID
     */
    public $OwnerID;
    /**
     * String
     * 
     * @var string $Password
     */
    public $Password;
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
     * @var string $Phone3
     */
    public $Phone3;
    /**
     * String
     * 
     * @var string $Phone3Ext
     */
    public $Phone3Ext;
    /**
     * String
     * 
     * @var string $Phone3Type
     */
    public $Phone3Type;
    /**
     * String
     * 
     * @var string $Phone4
     */
    public $Phone4;
    /**
     * String
     * 
     * @var string $Phone4Ext
     */
    public $Phone4Ext;
    /**
     * String
     * 
     * @var string $Phone4Type
     */
    public $Phone4Type;
    /**
     * String
     * 
     * @var string $Phone5
     */
    public $Phone5;
    /**
     * String
     * 
     * @var string $Phone5Ext
     */
    public $Phone5Ext;
    /**
     * String
     * 
     * @var string $Phone5Type
     */
    public $Phone5Type;
    /**
     * String
     * 
     * @var string $PostalCode
     */
    public $PostalCode;
    /**
     * String
     * 
     * @var string $PostalCode2
     */
    public $PostalCode2;
    /**
     * String
     * 
     * @var string $PostalCode3
     */
    public $PostalCode3;
    /**
     * String
     * 
     * @var string $ReferralCode
     */
    public $ReferralCode;
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
     * @var string $State2
     */
    public $State2;
    /**
     * String
     * 
     * @var string $State3
     */
    public $State3;
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
     * @var string $Username
     */
    public $Username;
    /**
     * String
     * 
     * @var string $Validated
     */
    public $Validated;
    /**
     * String
     * 
     * @var string $Website
     */
    public $Website;
    /**
     * String
     * 
     * @var string $ZipFour1
     */
    public $ZipFour1;
    /**
     * String
     * 
     * @var string $ZipFour2
     */
    public $ZipFour2;
    /**
     * String
     * 
     * @var string $ZipFour3
     */
    public $ZipFour3;
    /**
     * @var array $propertyMap
     */
    protected static $propertyMap = array('Address1Type' => 'string', 'Address2Street1' => 'string', 'Address2Street2' => 'string', 'Address2Type' => 'string', 'Address3Street1' => 'string', 'Address3Street2' => 'string', 'Address3Type' => 'string', 'Anniversary' => '\DateTime', 'AssistantName' => 'string', 'AssistantPhone' => 'string', 'BillingInformation' => 'string', 'Birthday' => '\DateTime', 'City' => 'string', 'City2' => 'string', 'City3' => 'string', 'Company' => 'string', 'AccountId' => 'int', 'CompanyID' => 'Contact', 'ContactNotes' => 'string', 'ContactType' => 'string', 'Country' => 'string', 'Country2' => 'string', 'Country3' => 'string', 'CreatedBy' => 'User', 'DateCreated' => '\DateTime', 'Email' => 'string', 'EmailAddress2' => 'string', 'EmailAddress3' => 'string', 'Fax1' => 'string', 'Fax1Type' => 'string', 'Fax2' => 'string', 'Fax2Type' => 'string', 'FirstName' => 'string', 'Groups' => 'string', 'Id' => 'int', 'JobTitle' => 'string', 'LastName' => 'string', 'LastUpdated' => '\DateTime', 'LastUpdatedBy' => 'int', 'Leadsource' => 'string', 'LeadSourceId' => 'int', 'MiddleName' => 'string', 'Nickname' => 'string', 'OwnerID' => 'User', 'Password' => 'string', 'Phone1' => 'string', 'Phone1Ext' => 'string', 'Phone1Type' => 'string', 'Phone2' => 'string', 'Phone2Ext' => 'string', 'Phone2Type' => 'string', 'Phone3' => 'string', 'Phone3Ext' => 'string', 'Phone3Type' => 'string', 'Phone4' => 'string', 'Phone4Ext' => 'string', 'Phone4Type' => 'string', 'Phone5' => 'string', 'Phone5Ext' => 'string', 'Phone5Type' => 'string', 'PostalCode' => 'string', 'PostalCode2' => 'string', 'PostalCode3' => 'string', 'ReferralCode' => 'string', 'SpouseName' => 'string', 'State' => 'string', 'State2' => 'string', 'State3' => 'string', 'StreetAddress1' => 'string', 'StreetAddress2' => 'string', 'Suffix' => 'string', 'Title' => 'string', 'Username' => 'string', 'Validated' => 'string', 'Website' => 'string', 'ZipFour1' => 'string', 'ZipFour2' => 'string', 'ZipFour3' => 'string');

}
