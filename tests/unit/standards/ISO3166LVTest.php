<?php
                
namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166LVTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166LVTest extends TestCase
{
    public function testLV(): void
    {
        $country = ISO3166::LV();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Latvia", $country->getName());
        $this->assertEquals("LV", $country->getAlpha2());
        $this->assertEquals("LVA", $country->getAlpha3());
        $this->assertEquals("428", $country->getNumericCode());
    }
}
