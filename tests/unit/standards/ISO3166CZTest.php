<?php
                
namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166CZTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166CZTest extends TestCase
{
    public function testCZ(): void
    {
        $country = ISO3166::CZ();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Czechia", $country->getName());
        $this->assertEquals("CZ", $country->getAlpha2());
        $this->assertEquals("CZE", $country->getAlpha3());
        $this->assertEquals("203", $country->getNumericCode());
    }
}
