<?php

namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166CVTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166CVTest extends TestCase
{
    public function testCV(): void
    {
        $country = ISO3166::CV();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Cabo Verde", $country->getName());
        $this->assertEquals("CV", $country->getAlpha2());
        $this->assertEquals("CPV", $country->getAlpha3());
        $this->assertEquals("132", $country->getNumericCode());
    }
}
