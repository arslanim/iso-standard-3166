<?php

namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166UZTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166UZTest extends TestCase
{
    public function testUZ(): void
    {
        $country = ISO3166::UZ();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Uzbekistan", $country->getName());
        $this->assertEquals("UZ", $country->getAlpha2());
        $this->assertEquals("UZB", $country->getAlpha3());
        $this->assertEquals("860", $country->getNumericCode());
    }
}
