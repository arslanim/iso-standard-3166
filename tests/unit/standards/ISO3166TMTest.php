<?php

namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166TMTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166TMTest extends TestCase
{
    public function testTM(): void
    {
        $country = ISO3166::TM();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Turkmenistan", $country->getName());
        $this->assertEquals("TM", $country->getAlpha2());
        $this->assertEquals("TKM", $country->getAlpha3());
        $this->assertEquals("795", $country->getNumericCode());
    }
}
