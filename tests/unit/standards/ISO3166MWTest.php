<?php

namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166MWTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166MWTest extends TestCase
{
    public function testMW(): void
    {
        $country = ISO3166::MW();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Malawi", $country->getName());
        $this->assertEquals("MW", $country->getAlpha2());
        $this->assertEquals("MWI", $country->getAlpha3());
        $this->assertEquals("454", $country->getNumericCode());
    }
}
