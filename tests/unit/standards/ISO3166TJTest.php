<?php
                
namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166TJTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166TJTest extends TestCase
{
    public function testTJ(): void
    {
        $country = ISO3166::TJ();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Tajikistan", $country->getName());
        $this->assertEquals("TJ", $country->getAlpha2());
        $this->assertEquals("TJK", $country->getAlpha3());
        $this->assertEquals("762", $country->getNumericCode());
    }
}
