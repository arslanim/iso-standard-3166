<?php
                
namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166NRTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166NRTest extends TestCase
{
    public function testNR(): void
    {
        $country = ISO3166::NR();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Nauru", $country->getName());
        $this->assertEquals("NR", $country->getAlpha2());
        $this->assertEquals("NRU", $country->getAlpha3());
        $this->assertEquals("520", $country->getNumericCode());
    }
}
