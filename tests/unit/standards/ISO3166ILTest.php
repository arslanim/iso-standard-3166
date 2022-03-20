<?php

namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166ILTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166ILTest extends TestCase
{
    public function testIL(): void
    {
        $country = ISO3166::IL();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Israel", $country->getName());
        $this->assertEquals("IL", $country->getAlpha2());
        $this->assertEquals("ISR", $country->getAlpha3());
        $this->assertEquals("376", $country->getNumericCode());
    }
}
