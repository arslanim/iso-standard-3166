<?php
                
namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166SATest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166SATest extends TestCase
{
    public function testSA(): void
    {
        $country = ISO3166::SA();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Saudi Arabia", $country->getName());
        $this->assertEquals("SA", $country->getAlpha2());
        $this->assertEquals("SAU", $country->getAlpha3());
        $this->assertEquals("682", $country->getNumericCode());
    }
}
