<?php
                
namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166DJTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166DJTest extends TestCase
{
    public function testDJ(): void
    {
        $country = ISO3166::DJ();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Djibouti", $country->getName());
        $this->assertEquals("DJ", $country->getAlpha2());
        $this->assertEquals("DJI", $country->getAlpha3());
        $this->assertEquals("262", $country->getNumericCode());
    }
}
