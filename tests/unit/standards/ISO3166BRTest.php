<?php

namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166BRTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166BRTest extends TestCase
{
    public function testBR(): void
    {
        $country = ISO3166::BR();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Brazil", $country->getName());
        $this->assertEquals("BR", $country->getAlpha2());
        $this->assertEquals("BRA", $country->getAlpha3());
        $this->assertEquals("076", $country->getNumericCode());
    }
}
