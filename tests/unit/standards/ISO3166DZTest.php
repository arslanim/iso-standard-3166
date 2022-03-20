<?php

namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166DZTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166DZTest extends TestCase
{
    public function testDZ(): void
    {
        $country = ISO3166::DZ();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Algeria", $country->getName());
        $this->assertEquals("DZ", $country->getAlpha2());
        $this->assertEquals("DZA", $country->getAlpha3());
        $this->assertEquals("012", $country->getNumericCode());
    }
}
