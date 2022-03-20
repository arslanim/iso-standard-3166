<?php

namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166GYTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166GYTest extends TestCase
{
    public function testGY(): void
    {
        $country = ISO3166::GY();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Guyana", $country->getName());
        $this->assertEquals("GY", $country->getAlpha2());
        $this->assertEquals("GUY", $country->getAlpha3());
        $this->assertEquals("328", $country->getNumericCode());
    }
}
