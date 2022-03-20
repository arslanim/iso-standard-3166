<?php

namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166IETest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166IETest extends TestCase
{
    public function testIE(): void
    {
        $country = ISO3166::IE();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Ireland", $country->getName());
        $this->assertEquals("IE", $country->getAlpha2());
        $this->assertEquals("IRL", $country->getAlpha3());
        $this->assertEquals("372", $country->getNumericCode());
    }
}
