<?php

namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166VNTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166VNTest extends TestCase
{
    public function testVN(): void
    {
        $country = ISO3166::VN();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Viet Nam", $country->getName());
        $this->assertEquals("VN", $country->getAlpha2());
        $this->assertEquals("VNM", $country->getAlpha3());
        $this->assertEquals("704", $country->getNumericCode());
    }
}
