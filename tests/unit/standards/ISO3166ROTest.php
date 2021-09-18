<?php
                
namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166ROTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166ROTest extends TestCase
{
    public function testRO(): void
    {
        $country = ISO3166::RO();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Romania", $country->getName());
        $this->assertEquals("RO", $country->getAlpha2());
        $this->assertEquals("ROU", $country->getAlpha3());
        $this->assertEquals("642", $country->getNumericCode());
    }
}
