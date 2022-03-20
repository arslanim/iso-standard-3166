<?php

namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166LCTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166LCTest extends TestCase
{
    public function testLC(): void
    {
        $country = ISO3166::LC();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Saint Lucia", $country->getName());
        $this->assertEquals("LC", $country->getAlpha2());
        $this->assertEquals("LCA", $country->getAlpha3());
        $this->assertEquals("662", $country->getNumericCode());
    }
}
