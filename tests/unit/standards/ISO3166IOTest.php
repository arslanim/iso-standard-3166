<?php

namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166IOTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166IOTest extends TestCase
{
    public function testIO(): void
    {
        $country = ISO3166::IO();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("British Indian Ocean Territory", $country->getName());
        $this->assertEquals("IO", $country->getAlpha2());
        $this->assertEquals("IOT", $country->getAlpha3());
        $this->assertEquals("086", $country->getNumericCode());
    }
}
