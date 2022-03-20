<?php

namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166TZTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166TZTest extends TestCase
{
    public function testTZ(): void
    {
        $country = ISO3166::TZ();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Tanzania, United Republic of", $country->getName());
        $this->assertEquals("TZ", $country->getAlpha2());
        $this->assertEquals("TZA", $country->getAlpha3());
        $this->assertEquals("834", $country->getNumericCode());
    }
}
