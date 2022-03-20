<?php

namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166GLTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166GLTest extends TestCase
{
    public function testGL(): void
    {
        $country = ISO3166::GL();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Greenland", $country->getName());
        $this->assertEquals("GL", $country->getAlpha2());
        $this->assertEquals("GRL", $country->getAlpha3());
        $this->assertEquals("304", $country->getNumericCode());
    }
}
