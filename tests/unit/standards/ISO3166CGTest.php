<?php

namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166CGTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166CGTest extends TestCase
{
    public function testCG(): void
    {
        $country = ISO3166::CG();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Congo", $country->getName());
        $this->assertEquals("CG", $country->getAlpha2());
        $this->assertEquals("COG", $country->getAlpha3());
        $this->assertEquals("178", $country->getNumericCode());
    }
}
