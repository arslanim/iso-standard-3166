<?php

namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166RUTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166RUTest extends TestCase
{
    public function testRU(): void
    {
        $country = ISO3166::RU();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals('Russian Federation', $country->getName());
        $this->assertEquals('RU', $country->getAlpha2());
        $this->assertEquals('RUS', $country->getAlpha3());
        $this->assertEquals('643', $country->getNumericCode());
    }
}
