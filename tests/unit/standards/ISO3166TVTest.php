<?php

namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166TVTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166TVTest extends TestCase
{
    public function testTV(): void
    {
        $country = ISO3166::TV();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Tuvalu", $country->getName());
        $this->assertEquals("TV", $country->getAlpha2());
        $this->assertEquals("TUV", $country->getAlpha3());
        $this->assertEquals("798", $country->getNumericCode());
    }
}
