<?php

namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166ATTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166ATTest extends TestCase
{
    public function testAT(): void
    {
        $country = ISO3166::AT();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Austria", $country->getName());
        $this->assertEquals("AT", $country->getAlpha2());
        $this->assertEquals("AUT", $country->getAlpha3());
        $this->assertEquals("040", $country->getNumericCode());
    }
}
