<?php

namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166TOTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166TOTest extends TestCase
{
    public function testTO(): void
    {
        $country = ISO3166::TO();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Tonga", $country->getName());
        $this->assertEquals("TO", $country->getAlpha2());
        $this->assertEquals("TON", $country->getAlpha3());
        $this->assertEquals("776", $country->getNumericCode());
    }
}
