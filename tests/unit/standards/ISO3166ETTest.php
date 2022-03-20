<?php

namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166ETTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166ETTest extends TestCase
{
    public function testET(): void
    {
        $country = ISO3166::ET();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Ethiopia", $country->getName());
        $this->assertEquals("ET", $country->getAlpha2());
        $this->assertEquals("ETH", $country->getAlpha3());
        $this->assertEquals("231", $country->getNumericCode());
    }
}
