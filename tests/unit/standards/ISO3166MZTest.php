<?php

namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166MZTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166MZTest extends TestCase
{
    public function testMZ(): void
    {
        $country = ISO3166::MZ();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Mozambique", $country->getName());
        $this->assertEquals("MZ", $country->getAlpha2());
        $this->assertEquals("MOZ", $country->getAlpha3());
        $this->assertEquals("508", $country->getNumericCode());
    }
}
