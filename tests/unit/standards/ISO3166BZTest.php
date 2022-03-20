<?php

namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166BZTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166BZTest extends TestCase
{
    public function testBZ(): void
    {
        $country = ISO3166::BZ();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Belize", $country->getName());
        $this->assertEquals("BZ", $country->getAlpha2());
        $this->assertEquals("BLZ", $country->getAlpha3());
        $this->assertEquals("084", $country->getNumericCode());
    }
}
