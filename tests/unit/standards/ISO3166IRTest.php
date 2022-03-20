<?php

namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166IRTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166IRTest extends TestCase
{
    public function testIR(): void
    {
        $country = ISO3166::IR();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Iran (Islamic Republic of)", $country->getName());
        $this->assertEquals("IR", $country->getAlpha2());
        $this->assertEquals("IRN", $country->getAlpha3());
        $this->assertEquals("364", $country->getNumericCode());
    }
}
