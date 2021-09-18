<?php
                
namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166SBTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166SBTest extends TestCase
{
    public function testSB(): void
    {
        $country = ISO3166::SB();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Solomon Islands", $country->getName());
        $this->assertEquals("SB", $country->getAlpha2());
        $this->assertEquals("SLB", $country->getAlpha3());
        $this->assertEquals("090", $country->getNumericCode());
    }
}
