<?php

namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166CYTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166CYTest extends TestCase
{
    public function testCY(): void
    {
        $country = ISO3166::CY();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Cyprus", $country->getName());
        $this->assertEquals("CY", $country->getAlpha2());
        $this->assertEquals("CYP", $country->getAlpha3());
        $this->assertEquals("196", $country->getNumericCode());
    }
}
