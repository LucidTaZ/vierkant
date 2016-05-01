<?php

namespace lucidtaz\vierkant\tests;

use lucidtaz\vierkant\Vierkant;
use PHPUnit_Framework_TestCase;

class VierkantTest extends PHPUnit_Framework_TestCase
{
    public function testConstruct()
    {
        $vierkant = new Vierkant(5);
        $length = $vierkant->getLength();
        $this->assertEquals(5, $length);
    }

    public function testGetArea()
    {
        $vierkant = new Vierkant(5);
        $area = $vierkant->getArea();
        $this->assertEquals(25, $area);
    }
}
