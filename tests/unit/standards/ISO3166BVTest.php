<?php

namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166BVTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166BVTest extends TestCase
{
    public function testBV(): void
    {
        $country = ISO3166::BV();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Bouvet Island", $country->getName());
        $this->assertEquals("BV", $country->getAlpha2());
        $this->assertEquals("BVT", $country->getAlpha3());
        $this->assertEquals("074", $country->getNumericCode());
    }
}
