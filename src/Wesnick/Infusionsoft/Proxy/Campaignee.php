<?php

namespace Wesnick\Infusionsoft\Proxy;

use Wesnick\Infusionsoft\Remote\BaseObject;

/**
 * class Campaignee
 * Who is in what follow-up sequences
 * Campaignee
 * INNER JOIN Campaign ON Campaign.Id=Campaignee.CampaignId
 */
class Campaignee extends BaseObject
{

    /**
     * Id
     * 
     * @var Campaign $CampaignId
     */
    public $CampaignId;
    /**
     * Enum
     * Options: Active, Inactive
     * 
     * @var string $Status
     */
    public $Status;
    /**
     * String
     * 
     * @var string $Campaign
     */
    public $Campaign;
    /**
     * Id
     * 
     * @var Contact $ContactId
     */
    public $ContactId;
    /**
     * @var array $propertyMap
     */
    protected $propertyMap = array('CampaignId' => 'Campaign', 'Status' => 'string', 'Campaign' => 'string', 'ContactId' => 'Contact');

}
