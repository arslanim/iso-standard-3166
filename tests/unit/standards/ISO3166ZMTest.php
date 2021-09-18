<?php
                
namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166ZMTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166ZMTest extends TestCase
{
    public function testZM(): void
    {
        $country = ISO3166::ZM();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Zambia", $country->getName());
        $this->assertEquals("ZM", $country->getAlpha2());
        $this->assertEquals("ZMB", $country->getAlpha3());
        $this->assertEquals("894", $country->getNumericCode());
    }
}
