<?php
                
namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166NZTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166NZTest extends TestCase
{
    public function testNZ(): void
    {
        $country = ISO3166::NZ();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("New Zealand", $country->getName());
        $this->assertEquals("NZ", $country->getAlpha2());
        $this->assertEquals("NZL", $country->getAlpha3());
        $this->assertEquals("554", $country->getNumericCode());
    }
}
