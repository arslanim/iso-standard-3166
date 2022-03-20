<?php

namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166ZWTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166ZWTest extends TestCase
{
    public function testZW(): void
    {
        $country = ISO3166::ZW();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Zimbabwe", $country->getName());
        $this->assertEquals("ZW", $country->getAlpha2());
        $this->assertEquals("ZWE", $country->getAlpha3());
        $this->assertEquals("716", $country->getNumericCode());
    }
}
