<?php

namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166ZATest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166ZATest extends TestCase
{
    public function testZA(): void
    {
        $country = ISO3166::ZA();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("South Africa", $country->getName());
        $this->assertEquals("ZA", $country->getAlpha2());
        $this->assertEquals("ZAF", $country->getAlpha3());
        $this->assertEquals("710", $country->getNumericCode());
    }
}
