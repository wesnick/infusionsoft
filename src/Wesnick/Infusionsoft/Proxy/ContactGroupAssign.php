<?php

namespace Wesnick\Infusionsoft\Proxy;

use Wesnick\Infusionsoft\Remote\BaseObject;

/**
 * class ContactGroupAssign
 * INNER JOIN ContactGroup ON ContactGroupAssign.GroupId=ContactGroup.Id
            INNER JOIN Contact ON Contact.Id=ContactGroupAssign.ContactId
            LEFT JOIN LeadSource ON Contact.LeadSourceId=LeadSource.Id
 */
class ContactGroupAssign extends BaseObject
{

    /**
     * Id
     * 
     * @var ContactGroup $GroupId
     */
    public $GroupId;
    /**
     * String
     * 
     * @var string $ContactGroup
     */
    public $ContactGroup;
    /**
     * DateTime
     * 
     * @var \DateTime $DateCreated
     */
    public $DateCreated;
    /**
     * Id
     * 
     * @var Contact $ContactId
     */
    public $ContactId;
    /**
     * String
     * 
     * @var string $Contact.Address1Type
     */
    public $Contact.Address1Type;
    /**
     * String
     * 
     * @var string $Contact.Address2Street1
     */
    public $Contact.Address2Street1;
    /**
     * String
     * 
     * @var string $Contact.Address2Street2
     */
    public $Contact.Address2Street2;
    /**
     * String
     * 
     * @var string $Contact.Address2Type
     */
    public $Contact.Address2Type;
    /**
     * String
     * 
     * @var string $Contact.Address3Street1
     */
    public $Contact.Address3Street1;
    /**
     * String
     * 
     * @var string $Contact.Address3Street2
     */
    public $Contact.Address3Street2;
    /**
     * String
     * 
     * @var string $Contact.Address3Type
     */
    public $Contact.Address3Type;
    /**
     * Date
     * 
     * @var \DateTime $Contact.Anniversary
     */
    public $Contact.Anniversary;
    /**
     * String
     * 
     * @var string $Contact.AssistantName
     */
    public $Contact.AssistantName;
    /**
     * String
     * 
     * @var string $Contact.AssistantPhone
     */
    public $Contact.AssistantPhone;
    /**
     * String
     * 
     * @var string $Contact.BillingInformation
     */
    public $Contact.BillingInformation;
    /**
     * String
     * 
     * @var string $Contact.Birthday
     */
    public $Contact.Birthday;
    /**
     * String
     * 
     * @var string $Contact.City
     */
    public $Contact.City;
    /**
     * String
     * 
     * @var string $Contact.City2
     */
    public $Contact.City2;
    /**
     * String
     * 
     * @var string $Contact.City3
     */
    public $Contact.City3;
    /**
     * String
     * 
     * @var string $Contact.Company
     */
    public $Contact.Company;
    /**
     * Id
     * 
     * @var Contact $Contact.CompanyID
     */
    public $Contact.CompanyID;
    /**
     * String
     * 
     * @var string $Contact.ContactNotes
     */
    public $Contact.ContactNotes;
    /**
     * String
     * 
     * @var string $Contact.ContactType
     */
    public $Contact.ContactType;
    /**
     * String
     * 
     * @var string $Contact.Country
     */
    public $Contact.Country;
    /**
     * String
     * 
     * @var string $Contact.Country2
     */
    public $Contact.Country2;
    /**
     * String
     * 
     * @var string $Contact.Country3
     */
    public $Contact.Country3;
    /**
     * Id
     * 
     * @var User $Contact.CreatedBy
     */
    public $Contact.CreatedBy;
    /**
     * DateTime
     * 
     * @var \DateTime $Contact.CustomDate1
     */
    public $Contact.CustomDate1;
    /**
     * DateTime
     * 
     * @var \DateTime $Contact.CustomDate2
     */
    public $Contact.CustomDate2;
    /**
     * DateTime
     * 
     * @var \DateTime $Contact.CustomDate3
     */
    public $Contact.CustomDate3;
    /**
     * DateTime
     * 
     * @var \DateTime $Contact.CustomDate4
     */
    public $Contact.CustomDate4;
    /**
     * DateTime
     * 
     * @var \DateTime $Contact.CustomDate5
     */
    public $Contact.CustomDate5;
    /**
     * Double
     * 
     * @var float $Contact.CustomDbl1
     */
    public $Contact.CustomDbl1;
    /**
     * Double
     * 
     * @var float $Contact.CustomDbl2
     */
    public $Contact.CustomDbl2;
    /**
     * Double
     * 
     * @var float $Contact.CustomDbl3
     */
    public $Contact.CustomDbl3;
    /**
     * Double
     * 
     * @var float $Contact.CustomDbl4
     */
    public $Contact.CustomDbl4;
    /**
     * Double
     * 
     * @var float $Contact.CustomDbl5
     */
    public $Contact.CustomDbl5;
    /**
     * String
     * 
     * @var string $Contact.CustomField1
     */
    public $Contact.CustomField1;
    /**
     * String
     * 
     * @var string $Contact.CustomField10
     */
    public $Contact.CustomField10;
    /**
     * String
     * 
     * @var string $Contact.CustomField2
     */
    public $Contact.CustomField2;
    /**
     * String
     * 
     * @var string $Contact.CustomField3
     */
    public $Contact.CustomField3;
    /**
     * String
     * 
     * @var string $Contact.CustomField4
     */
    public $Contact.CustomField4;
    /**
     * String
     * 
     * @var string $Contact.CustomField5
     */
    public $Contact.CustomField5;
    /**
     * String
     * 
     * @var string $Contact.CustomField6
     */
    public $Contact.CustomField6;
    /**
     * String
     * 
     * @var string $Contact.CustomField7
     */
    public $Contact.CustomField7;
    /**
     * String
     * 
     * @var string $Contact.CustomField8
     */
    public $Contact.CustomField8;
    /**
     * String
     * 
     * @var string $Contact.CustomField9
     */
    public $Contact.CustomField9;
    /**
     * DateTime
     * 
     * @var \DateTime $Contact.DateCreated
     */
    public $Contact.DateCreated;
    /**
     * String
     * 
     * @var string $Contact.Email
     */
    public $Contact.Email;
    /**
     * String
     * 
     * @var string $Contact.EmailAddress2
     */
    public $Contact.EmailAddress2;
    /**
     * String
     * 
     * @var string $Contact.EmailAddress3
     */
    public $Contact.EmailAddress3;
    /**
     * String
     * 
     * @var string $Contact.Fax1
     */
    public $Contact.Fax1;
    /**
     * String
     * 
     * @var string $Contact.Fax1Type
     */
    public $Contact.Fax1Type;
    /**
     * String
     * 
     * @var string $Contact.Fax2
     */
    public $Contact.Fax2;
    /**
     * String
     * 
     * @var string $Contact.Fax2Type
     */
    public $Contact.Fax2Type;
    /**
     * String
     * 
     * @var string $Contact.FirstName
     */
    public $Contact.FirstName;
    /**
     * String
     * 
     * @var string $Contact.Groups
     */
    public $Contact.Groups;
    /**
     * String
     * 
     * @var string $Contact.HTMLSignature
     */
    public $Contact.HTMLSignature;
    /**
     * Id
     * 
     * @var int $Contact.Id
     */
    public $Contact.Id;
    /**
     * String
     * 
     * @var string $Contact.JobTitle
     */
    public $Contact.JobTitle;
    /**
     * String
     * 
     * @var string $Contact.LastName
     */
    public $Contact.LastName;
    /**
     * String
     * 
     * @var string $Contact.LastUpdated
     */
    public $Contact.LastUpdated;
    /**
     * String
     * 
     * @var string $Contact.LastUpdatedBy
     */
    public $Contact.LastUpdatedBy;
    /**
     * String
     * 
     * @var string $Contact.Leadsource
     */
    public $Contact.Leadsource;
    /**
     * String
     * 
     * @var string $Contact.MiddleName
     */
    public $Contact.MiddleName;
    /**
     * String
     * 
     * @var string $Contact.Nickname
     */
    public $Contact.Nickname;
    /**
     * Id
     * 
     * @var User $Contact.OwnerID
     */
    public $Contact.OwnerID;
    /**
     * String
     * 
     * @var string $Contact.Phone1
     */
    public $Contact.Phone1;
    /**
     * String
     * 
     * @var string $Contact.Phone1Ext
     */
    public $Contact.Phone1Ext;
    /**
     * String
     * 
     * @var string $Contact.Phone1Type
     */
    public $Contact.Phone1Type;
    /**
     * String
     * 
     * @var string $Contact.Phone2
     */
    public $Contact.Phone2;
    /**
     * String
     * 
     * @var string $Contact.Phone2Ext
     */
    public $Contact.Phone2Ext;
    /**
     * String
     * 
     * @var string $Contact.Phone2Type
     */
    public $Contact.Phone2Type;
    /**
     * String
     * 
     * @var string $Contact.Phone3
     */
    public $Contact.Phone3;
    /**
     * String
     * 
     * @var string $Contact.Phone3Ext
     */
    public $Contact.Phone3Ext;
    /**
     * String
     * 
     * @var string $Contact.Phone3Type
     */
    public $Contact.Phone3Type;
    /**
     * String
     * 
     * @var string $Contact.Phone4
     */
    public $Contact.Phone4;
    /**
     * String
     * 
     * @var string $Contact.Phone4Ext
     */
    public $Contact.Phone4Ext;
    /**
     * String
     * 
     * @var string $Contact.Phone4Type
     */
    public $Contact.Phone4Type;
    /**
     * String
     * 
     * @var string $Contact.Phone5
     */
    public $Contact.Phone5;
    /**
     * String
     * 
     * @var string $Contact.Phone5Ext
     */
    public $Contact.Phone5Ext;
    /**
     * String
     * 
     * @var string $Contact.Phone5Type
     */
    public $Contact.Phone5Type;
    /**
     * String
     * 
     * @var string $Contact.PostalCode
     */
    public $Contact.PostalCode;
    /**
     * String
     * 
     * @var string $Contact.PostalCode2
     */
    public $Contact.PostalCode2;
    /**
     * String
     * 
     * @var string $Contact.PostalCode3
     */
    public $Contact.PostalCode3;
    /**
     * String
     * 
     * @var string $Contact.ReferralCode
     */
    public $Contact.ReferralCode;
    /**
     * String
     * 
     * @var string $Contact.Signature
     */
    public $Contact.Signature;
    /**
     * String
     * 
     * @var string $Contact.SpouseName
     */
    public $Contact.SpouseName;
    /**
     * String
     * 
     * @var string $Contact.State
     */
    public $Contact.State;
    /**
     * String
     * 
     * @var string $Contact.State2
     */
    public $Contact.State2;
    /**
     * String
     * 
     * @var string $Contact.State3
     */
    public $Contact.State3;
    /**
     * String
     * 
     * @var string $Contact.StreetAddress1
     */
    public $Contact.StreetAddress1;
    /**
     * String
     * 
     * @var string $Contact.StreetAddress2
     */
    public $Contact.StreetAddress2;
    /**
     * String
     * 
     * @var string $Contact.Suffix
     */
    public $Contact.Suffix;
    /**
     * String
     * 
     * @var string $Contact.Title
     */
    public $Contact.Title;
    /**
     * String
     * 
     * @var string $Contact.Website
     */
    public $Contact.Website;
    /**
     * String
     * 
     * @var string $Contact.ZipFour1
     */
    public $Contact.ZipFour1;
    /**
     * String
     * 
     * @var string $Contact.ZipFour2
     */
    public $Contact.ZipFour2;
    /**
     * String
     * 
     * @var string $Contact.ZipFour3
     */
    public $Contact.ZipFour3;
    /**
     * @var array $propertyMap
     */
    protected static $propertyMap = array('GroupId' => 'ContactGroup', 'ContactGroup' => 'string', 'DateCreated' => '\DateTime', 'ContactId' => 'Contact', 'Contact.Address1Type' => 'string', 'Contact.Address2Street1' => 'string', 'Contact.Address2Street2' => 'string', 'Contact.Address2Type' => 'string', 'Contact.Address3Street1' => 'string', 'Contact.Address3Street2' => 'string', 'Contact.Address3Type' => 'string', 'Contact.Anniversary' => '\DateTime', 'Contact.AssistantName' => 'string', 'Contact.AssistantPhone' => 'string', 'Contact.BillingInformation' => 'string', 'Contact.Birthday' => 'string', 'Contact.City' => 'string', 'Contact.City2' => 'string', 'Contact.City3' => 'string', 'Contact.Company' => 'string', 'Contact.CompanyID' => 'Contact', 'Contact.ContactNotes' => 'string', 'Contact.ContactType' => 'string', 'Contact.Country' => 'string', 'Contact.Country2' => 'string', 'Contact.Country3' => 'string', 'Contact.CreatedBy' => 'User', 'Contact.CustomDate1' => '\DateTime', 'Contact.CustomDate2' => '\DateTime', 'Contact.CustomDate3' => '\DateTime', 'Contact.CustomDate4' => '\DateTime', 'Contact.CustomDate5' => '\DateTime', 'Contact.CustomDbl1' => 'float', 'Contact.CustomDbl2' => 'float', 'Contact.CustomDbl3' => 'float', 'Contact.CustomDbl4' => 'float', 'Contact.CustomDbl5' => 'float', 'Contact.CustomField1' => 'string', 'Contact.CustomField10' => 'string', 'Contact.CustomField2' => 'string', 'Contact.CustomField3' => 'string', 'Contact.CustomField4' => 'string', 'Contact.CustomField5' => 'string', 'Contact.CustomField6' => 'string', 'Contact.CustomField7' => 'string', 'Contact.CustomField8' => 'string', 'Contact.CustomField9' => 'string', 'Contact.DateCreated' => '\DateTime', 'Contact.Email' => 'string', 'Contact.EmailAddress2' => 'string', 'Contact.EmailAddress3' => 'string', 'Contact.Fax1' => 'string', 'Contact.Fax1Type' => 'string', 'Contact.Fax2' => 'string', 'Contact.Fax2Type' => 'string', 'Contact.FirstName' => 'string', 'Contact.Groups' => 'string', 'Contact.HTMLSignature' => 'string', 'Contact.Id' => 'int', 'Contact.JobTitle' => 'string', 'Contact.LastName' => 'string', 'Contact.LastUpdated' => 'string', 'Contact.LastUpdatedBy' => 'string', 'Contact.Leadsource' => 'string', 'Contact.MiddleName' => 'string', 'Contact.Nickname' => 'string', 'Contact.OwnerID' => 'User', 'Contact.Phone1' => 'string', 'Contact.Phone1Ext' => 'string', 'Contact.Phone1Type' => 'string', 'Contact.Phone2' => 'string', 'Contact.Phone2Ext' => 'string', 'Contact.Phone2Type' => 'string', 'Contact.Phone3' => 'string', 'Contact.Phone3Ext' => 'string', 'Contact.Phone3Type' => 'string', 'Contact.Phone4' => 'string', 'Contact.Phone4Ext' => 'string', 'Contact.Phone4Type' => 'string', 'Contact.Phone5' => 'string', 'Contact.Phone5Ext' => 'string', 'Contact.Phone5Type' => 'string', 'Contact.PostalCode' => 'string', 'Contact.PostalCode2' => 'string', 'Contact.PostalCode3' => 'string', 'Contact.ReferralCode' => 'string', 'Contact.Signature' => 'string', 'Contact.SpouseName' => 'string', 'Contact.State' => 'string', 'Contact.State2' => 'string', 'Contact.State3' => 'string', 'Contact.StreetAddress1' => 'string', 'Contact.StreetAddress2' => 'string', 'Contact.Suffix' => 'string', 'Contact.Title' => 'string', 'Contact.Website' => 'string', 'Contact.ZipFour1' => 'string', 'Contact.ZipFour2' => 'string', 'Contact.ZipFour3' => 'string');

}
