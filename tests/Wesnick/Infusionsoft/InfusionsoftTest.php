<?php
/**
 * @file InfusionsoftTest.php
 */

namespace Wesnick\Infusionsoft;


class InfusionsoftTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @var \PHPUnit_Framework_MockObject_MockObject
     */
    private $client;

    /**
     * @var Infusionsoft
     */
    private $object;

    public function setUp()
    {
        $this->client = $this->getMock('fXmlRpc\ClientInterface');
        $this->object = new Infusionsoft('appName', 'apiKey', $this->client);
    }

    public function testPing()
    {
        // Configure the stub.
        $this->client->expects($this->any())
            ->method('call')
            ->will($this->returnValue('PHP-ping'));
        $this->assertTrue($this->object->ping());

    }
}
