<?php

namespace Wesnick\Infusionsoft\Proxy;

use Wesnick\Infusionsoft\Remote\BaseObject;

/**
 * class StageMove
 * Stage Move
 */
class StageMove extends BaseObject
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
     * @var int $OpportunityId
     */
    public $OpportunityId;
    /**
     * DateTime
     * 
     * @var \DateTime $MoveDate
     */
    public $MoveDate;
    /**
     * Id
     * 
     * @var int $MoveToStage
     */
    public $MoveToStage;
    /**
     * Id
     * 
     * @var int $MoveFromStage
     */
    public $MoveFromStage;
    /**
     * DateTime
     * 
     * @var \DateTime $PrevStageMoveDate
     */
    public $PrevStageMoveDate;
    /**
     * Id
     * 
     * @var int $CreatedBy
     */
    public $CreatedBy;
    /**
     * DateTime
     * 
     * @var \DateTime $DateCreated
     */
    public $DateCreated;
    /**
     * Id
     * 
     * @var int $UserId
     */
    public $UserId;
    /**
     * @var array $propertyMap
     */
    protected static $propertyMap = array('Id' => 'int', 'OpportunityId' => 'int', 'MoveDate' => '\DateTime', 'MoveToStage' => 'int', 'MoveFromStage' => 'int', 'PrevStageMoveDate' => '\DateTime', 'CreatedBy' => 'int', 'DateCreated' => '\DateTime', 'UserId' => 'int');

}
