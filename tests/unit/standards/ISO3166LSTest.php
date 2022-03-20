<?php

namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166LSTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166LSTest extends TestCase
{
    public function testLS(): void
    {
        $country = ISO3166::LS();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Lesotho", $country->getName());
        $this->assertEquals("LS", $country->getAlpha2());
        $this->assertEquals("LSO", $country->getAlpha3());
        $this->assertEquals("426", $country->getNumericCode());
    }
}
