<?php

namespace Skajdo;

/**
 * Test calculation
 */
class Crc16CCITTest extends \PHPUnit_Framework_TestCase
{
    public function testCalculateChecksum()
    {
        $this->assertEquals('29b1', Crc16CCIT::calculate(123456789));
    }
}