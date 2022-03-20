<?php

namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166SXTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166SXTest extends TestCase
{
    public function testSX(): void
    {
        $country = ISO3166::SX();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Sint Maarten (Dutch part)", $country->getName());
        $this->assertEquals("SX", $country->getAlpha2());
        $this->assertEquals("SXM", $country->getAlpha3());
        $this->assertEquals("534", $country->getNumericCode());
    }
}
