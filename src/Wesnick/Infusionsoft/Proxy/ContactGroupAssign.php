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

    protected static $propertyMap = array('GroupId' => 'ContactGroup', 'ContactGroup' => 'string', 'DateCreated' => '\DateTime', 'ContactId' => 'Contact');

}
