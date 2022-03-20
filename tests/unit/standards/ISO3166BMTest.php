<?php

namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166BMTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166BMTest extends TestCase
{
    public function testBM(): void
    {
        $country = ISO3166::BM();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Bermuda", $country->getName());
        $this->assertEquals("BM", $country->getAlpha2());
        $this->assertEquals("BMU", $country->getAlpha3());
        $this->assertEquals("060", $country->getNumericCode());
    }
}
