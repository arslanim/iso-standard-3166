<?php

namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166BHTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166BHTest extends TestCase
{
    public function testBH(): void
    {
        $country = ISO3166::BH();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Bahrain", $country->getName());
        $this->assertEquals("BH", $country->getAlpha2());
        $this->assertEquals("BHR", $country->getAlpha3());
        $this->assertEquals("048", $country->getNumericCode());
    }
}
