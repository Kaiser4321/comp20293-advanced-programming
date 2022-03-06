<?php
require_once __DIR__ . '/../src/Code2.php';

class Simple2Test extends \PHPUnit\Framework\TestCase
{
    public function testGetName() //1st test case
    {
        $simple2 = new Code2();
        $simple2->setName('Dianalan');
        $this->assertEquals($simple2->getName(), 'Dianalan');
    }

    public function testGetAge()
    {
        $simple2 = new Code2();
        $simple2->setAge(22);
        $this->assertEquals($simple2->getAge(), 22);
    }

    public function testFaveColor()
    {
        $simple2 = new Code2();
        $simple2->setFaveColor('Brown');
        $this->assertEquals($simple2->getFaveColor(), 'Brown');
    }

    public function testGetNameCheckString()
    {
        $simple2 = new Code2();
        $simple2 ->setName('Dianalan');
        $this->assertIsString($simple2->getName(), 'Dianalan');
    }

    public function testGetAgeCheckInt()
    {
        $simple2 = new Code2();
        $simple2->setAge(22);
        $this->assertIsInt($simple2->getAge(), 22);
    }

    public function testGetAgeCheckNumeric()
    {
        $simple2 = new Code2();
        $simple2->setAge(22);
        $this->assertIsNumeric($simple2->getAge(), 22);
    }
    
    public function testFaveColorCheckString()
    {
        $simple2 = new Code2();
        $simple2->setFaveColor('Brown');
        $this->assertIsString($simple2->getFaveColor(), 'Brown');
    }

    public function testGetTogetherInput()
    {
        $simple2 = new Code2();
        $simple2->setTogetherInput('Dianalan', 21, 'Brown');
        $this->assertEquals($simple2->getTogetherInput(), 'Dianalan', 21, 'Brown');
    }

}