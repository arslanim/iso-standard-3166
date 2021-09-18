<?php
                
namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166GSTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166GSTest extends TestCase
{
    public function testGS(): void
    {
        $country = ISO3166::GS();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("South Georgia and the South Sandwich Islands", $country->getName());
        $this->assertEquals("GS", $country->getAlpha2());
        $this->assertEquals("SGS", $country->getAlpha3());
        $this->assertEquals("239", $country->getNumericCode());
    }
}
