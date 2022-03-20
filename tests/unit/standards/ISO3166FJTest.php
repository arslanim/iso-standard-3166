<?php

namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166FJTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166FJTest extends TestCase
{
    public function testFJ(): void
    {
        $country = ISO3166::FJ();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Fiji", $country->getName());
        $this->assertEquals("FJ", $country->getAlpha2());
        $this->assertEquals("FJI", $country->getAlpha3());
        $this->assertEquals("242", $country->getNumericCode());
    }
}
