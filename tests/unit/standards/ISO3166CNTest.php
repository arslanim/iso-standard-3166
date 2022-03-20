<?php

namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166CNTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166CNTest extends TestCase
{
    public function testCN(): void
    {
        $country = ISO3166::CN();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("China", $country->getName());
        $this->assertEquals("CN", $country->getAlpha2());
        $this->assertEquals("CHN", $country->getAlpha3());
        $this->assertEquals("156", $country->getNumericCode());
    }
}
