<?php
                
namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166FOTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166FOTest extends TestCase
{
    public function testFO(): void
    {
        $country = ISO3166::FO();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Faroe Islands", $country->getName());
        $this->assertEquals("FO", $country->getAlpha2());
        $this->assertEquals("FRO", $country->getAlpha3());
        $this->assertEquals("234", $country->getNumericCode());
    }
}
