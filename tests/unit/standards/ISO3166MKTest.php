<?php
                
namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166MKTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166MKTest extends TestCase
{
    public function testMK(): void
    {
        $country = ISO3166::MK();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("North Macedonia", $country->getName());
        $this->assertEquals("MK", $country->getAlpha2());
        $this->assertEquals("MKD", $country->getAlpha3());
        $this->assertEquals("807", $country->getNumericCode());
    }
}
