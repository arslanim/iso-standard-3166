<?php

namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166RWTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166RWTest extends TestCase
{
    public function testRW(): void
    {
        $country = ISO3166::RW();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Rwanda", $country->getName());
        $this->assertEquals("RW", $country->getAlpha2());
        $this->assertEquals("RWA", $country->getAlpha3());
        $this->assertEquals("646", $country->getNumericCode());
    }
}
