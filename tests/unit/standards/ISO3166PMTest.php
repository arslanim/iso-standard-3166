<?php

namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166PMTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166PMTest extends TestCase
{
    public function testPM(): void
    {
        $country = ISO3166::PM();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Saint Pierre and Miquelon", $country->getName());
        $this->assertEquals("PM", $country->getAlpha2());
        $this->assertEquals("SPM", $country->getAlpha3());
        $this->assertEquals("666", $country->getNumericCode());
    }
}
