<?php

namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166IMTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166IMTest extends TestCase
{
    public function testIM(): void
    {
        $country = ISO3166::IM();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Isle of Man", $country->getName());
        $this->assertEquals("IM", $country->getAlpha2());
        $this->assertEquals("IMN", $country->getAlpha3());
        $this->assertEquals("833", $country->getNumericCode());
    }
}
