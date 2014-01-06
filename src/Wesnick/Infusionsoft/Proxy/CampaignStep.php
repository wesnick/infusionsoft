<?php

namespace Wesnick\Infusionsoft\Proxy;

use Wesnick\Infusionsoft\Remote\BaseObject;

/**
 * class CampaignStep
 * LEFT JOIN MarketingPiece ON MarketingPiece.Id=CampaignStep.CampaignPieceId
 */
class CampaignStep extends BaseObject
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
     * @var int $CampaignId
     */
    public $CampaignId;
    /**
     * Id
     * 
     * @var int $TemplateId
     */
    public $TemplateId;
    /**
     * String
     * 
     * @var string $StepStatus
     */
    public $StepStatus;
    /**
     * String
     * 
     * @var string $StepTitle
     */
    public $StepTitle;
    /**
     * @var array $propertyMap
     */
    protected $propertyMap = array('Id' => 'int', 'CampaignId' => 'int', 'TemplateId' => 'int', 'StepStatus' => 'string', 'StepTitle' => 'string');

}
