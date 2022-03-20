<?php

namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166BTTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166BTTest extends TestCase
{
    public function testBT(): void
    {
        $country = ISO3166::BT();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Bhutan", $country->getName());
        $this->assertEquals("BT", $country->getAlpha2());
        $this->assertEquals("BTN", $country->getAlpha3());
        $this->assertEquals("064", $country->getNumericCode());
    }
}
