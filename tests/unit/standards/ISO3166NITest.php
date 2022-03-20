<?php

namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166NITest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166NITest extends TestCase
{
    public function testNI(): void
    {
        $country = ISO3166::NI();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Nicaragua", $country->getName());
        $this->assertEquals("NI", $country->getAlpha2());
        $this->assertEquals("NIC", $country->getAlpha3());
        $this->assertEquals("558", $country->getNumericCode());
    }
}
