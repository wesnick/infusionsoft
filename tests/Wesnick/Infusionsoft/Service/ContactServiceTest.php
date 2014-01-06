<?php
/**
 * @file ContactServiceTest.php
 */

namespace Wesnick\Infusionsoft\Service;



use Faker\Generator;

class ContactServiceTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @var ContactService
     */
    private $service;

    /**
     * @var \PHPUnit_Framework_MockObject_MockObject
     */
    private $client;


    public function setUp()
    {
        $this->client = $this->getMock('fXmlRpc\ClientInterface');
        $this->service = new ContactService($this->client, '.', 'ContactService');
    }

    public function testAddClient()
    {

    }

}
