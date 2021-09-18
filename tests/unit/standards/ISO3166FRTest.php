<?php
                
namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166FRTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166FRTest extends TestCase
{
    public function testFR(): void
    {
        $country = ISO3166::FR();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("France", $country->getName());
        $this->assertEquals("FR", $country->getAlpha2());
        $this->assertEquals("FRA", $country->getAlpha3());
        $this->assertEquals("250", $country->getNumericCode());
    }
}
