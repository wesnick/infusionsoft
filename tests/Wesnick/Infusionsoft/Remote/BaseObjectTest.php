<?php

namespace Wesnick\Infusionsoft\Remote;


class BaseObjectTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @var InfusionsoftClass
     */
    private $object;

    public function setUp()
    {
        $this->object = new InfusionsoftClass();
    }

    public function testToArray()
    {
        $this->assertEmpty($this->object->toInfusionsoftArray());
        $this->object->testProperty = 'test';
        $this->assertEquals(array('testProperty' => 'test'), $this->object->toInfusionsoftArray());
    }

    public function testGetFields()
    {
        $this->assertEquals(array('testProperty'), $this->object->getInfusionsoftFields());
    }

    public function testGetPropertyMap()
    {
        $this->assertEquals(array('testProperty' => 'string'), $this->object->getInfusionsoftPropertyMap());
    }

}


class InfusionsoftClass extends BaseObject
{
    /**
     * @var string
     */
    public $testProperty;

    protected static $propertyMap = array('testProperty' => 'string');
}
