<?php

namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166SGTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166SGTest extends TestCase
{
    public function testSG(): void
    {
        $country = ISO3166::SG();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Singapore", $country->getName());
        $this->assertEquals("SG", $country->getAlpha2());
        $this->assertEquals("SGP", $country->getAlpha3());
        $this->assertEquals("702", $country->getNumericCode());
    }
}
