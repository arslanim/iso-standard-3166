<?php
                
namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166TDTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166TDTest extends TestCase
{
    public function testTD(): void
    {
        $country = ISO3166::TD();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Chad", $country->getName());
        $this->assertEquals("TD", $country->getAlpha2());
        $this->assertEquals("TCD", $country->getAlpha3());
        $this->assertEquals("148", $country->getNumericCode());
    }
}
