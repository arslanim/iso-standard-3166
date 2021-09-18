<?php
                
namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166HUTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166HUTest extends TestCase
{
    public function testHU(): void
    {
        $country = ISO3166::HU();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Hungary", $country->getName());
        $this->assertEquals("HU", $country->getAlpha2());
        $this->assertEquals("HUN", $country->getAlpha3());
        $this->assertEquals("348", $country->getNumericCode());
    }
}
