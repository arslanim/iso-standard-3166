<?php

namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166GUTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166GUTest extends TestCase
{
    public function testGU(): void
    {
        $country = ISO3166::GU();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Guam", $country->getName());
        $this->assertEquals("GU", $country->getAlpha2());
        $this->assertEquals("GUM", $country->getAlpha3());
        $this->assertEquals("316", $country->getNumericCode());
    }
}
