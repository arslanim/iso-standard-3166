<?php

namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166TTTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166TTTest extends TestCase
{
    public function testTT(): void
    {
        $country = ISO3166::TT();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Trinidad and Tobago", $country->getName());
        $this->assertEquals("TT", $country->getAlpha2());
        $this->assertEquals("TTO", $country->getAlpha3());
        $this->assertEquals("780", $country->getNumericCode());
    }
}
