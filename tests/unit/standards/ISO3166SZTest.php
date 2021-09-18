<?php
                
namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166SZTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166SZTest extends TestCase
{
    public function testSZ(): void
    {
        $country = ISO3166::SZ();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Eswatini", $country->getName());
        $this->assertEquals("SZ", $country->getAlpha2());
        $this->assertEquals("SWZ", $country->getAlpha3());
        $this->assertEquals("748", $country->getNumericCode());
    }
}
