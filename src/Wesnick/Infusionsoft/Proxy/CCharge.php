<?php

namespace Wesnick\Infusionsoft\Proxy;

use Wesnick\Infusionsoft\Remote\BaseObject;

/**
 * class CCharge
 */
class CCharge extends BaseObject
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
     * @var int $CCId
     */
    public $CCId;
    /**
     * Id
     * 
     * @var int $PaymentId
     */
    public $PaymentId;
    /**
     * Id
     * 
     * @var int $MerchantId
     */
    public $MerchantId;
    /**
     * String
     * 
     * @var string $OrderNum
     */
    public $OrderNum;
    /**
     * String
     * 
     * @var string $RefNum
     */
    public $RefNum;
    /**
     * String
     * 
     * @var string $ApprCode
     */
    public $ApprCode;
    /**
     * Double
     * 
     * @var float $Amt
     */
    public $Amt;
    /**
     * @var array $propertyMap
     */
    protected $propertyMap = array('Id' => 'int', 'CCId' => 'int', 'PaymentId' => 'int', 'MerchantId' => 'int', 'OrderNum' => 'string', 'RefNum' => 'string', 'ApprCode' => 'string', 'Amt' => 'float');

}
