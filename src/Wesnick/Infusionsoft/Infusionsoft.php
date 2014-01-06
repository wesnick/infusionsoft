<?php

namespace Wesnick\Infusionsoft;


use fXmlRpc\ClientInterface;
use Wesnick\Infusionsoft\Exception\InfusionsoftException;
use Wesnick\Infusionsoft\Service\ContactService;

class Infusionsoft
{

    /**
     * @var string
     */
    private $appName;

    /**
     * @var string
     */
    private $apiKey;

    /**
     * @var \fXmlRpc\ClientInterface
     */
    protected $client;

    /**
     * @var array
     */
    protected $proxies = array();

    /**
     * Map service name to service class
     * @var array
     */
    protected static $proxyMap = array(
//        'affiliate'         => 'AffiliateService',
//        'affiliate_program' => 'AffiliateProgramService',
        'ContactService'           => "Wesnick\\Infusionsoft\\Service\\ContactService",
//        'data'              => 'DataService',
//        'discount'          => 'DiscountService',
//        'email'             => 'EmailService',
//        'file'              => 'FileService',
//        'funnel'            => 'FunnelService',
//        'invoice'           => 'InvoiceService',
//        'order'             => 'OrderService',
//        'product'           => 'ProductService',
//        'search'            => 'SearchService',
//        'shipping'          => 'ShippingService',
//        'webForm'           => 'WebFormService',

    );

    /**
     * @param string            $appName
     * @param string            $apiKey
     * @param ClientInterface   $client
     *
     * @throws \InvalidArgumentException
     */
    function __construct($appName, $apiKey, ClientInterface $client)
    {
        if (empty($appName) || empty($apiKey)) {
            throw new \InvalidArgumentException("Missing App Name or API Key");
        }

        $this->appName = $appName;
        $this->apiKey = $apiKey;
        $this->client = $client;
        $this->client->setUri(sprintf("https://%s.infusionsoft.com/api/xmlrpc", $appName));
        $this->client->prependParams(array($apiKey));
    }

    /**
     * This is the only method that does not require API Key
     *
     * @return bool
     */
    public function ping()
    {
        $message = 'PHP-ping';
        $this->client->prependParams(array());
        try {
            $result = $this->client->call("DataService.echo", array($message));
        } catch (InfusionsoftException $e) {
            return false;
        }

        $this->client->getPrependParams(array($this->apiKey));
        return ($message == $result);
    }


    /**
     * @return ContactService
     */
    public function getContactService()
    {
        return $this->getService('ContactService');
    }


    public function getService($serviceName)
    {
        if ( ! isset(static::$proxyMap[$serviceName])) {
            throw new \InvalidArgumentException(sprintf("Service Name %s Is not Defined", $serviceName));
        }

        if (!isset($this->proxies[$serviceName])) {
            $class = static::$proxyMap[$serviceName];
            $this->proxies[$serviceName] = new $class($this->client, '.', $serviceName);
        }

        return $this->proxies[$serviceName];
    }


} 
