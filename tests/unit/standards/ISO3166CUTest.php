<?php
                
namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166CUTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166CUTest extends TestCase
{
    public function testCU(): void
    {
        $country = ISO3166::CU();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Cuba", $country->getName());
        $this->assertEquals("CU", $country->getAlpha2());
        $this->assertEquals("CUB", $country->getAlpha3());
        $this->assertEquals("192", $country->getNumericCode());
    }
}
