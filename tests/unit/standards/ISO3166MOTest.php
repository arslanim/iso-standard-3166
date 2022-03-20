<?php

namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166MOTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166MOTest extends TestCase
{
    public function testMO(): void
    {
        $country = ISO3166::MO();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Macao", $country->getName());
        $this->assertEquals("MO", $country->getAlpha2());
        $this->assertEquals("MAC", $country->getAlpha3());
        $this->assertEquals("446", $country->getNumericCode());
    }
}
