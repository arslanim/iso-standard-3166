<?php

namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166MCTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166MCTest extends TestCase
{
    public function testMC(): void
    {
        $country = ISO3166::MC();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Monaco", $country->getName());
        $this->assertEquals("MC", $country->getAlpha2());
        $this->assertEquals("MCO", $country->getAlpha3());
        $this->assertEquals("492", $country->getNumericCode());
    }
}
