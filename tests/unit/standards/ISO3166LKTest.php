<?php

namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166LKTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166LKTest extends TestCase
{
    public function testLK(): void
    {
        $country = ISO3166::LK();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Sri Lanka", $country->getName());
        $this->assertEquals("LK", $country->getAlpha2());
        $this->assertEquals("LKA", $country->getAlpha3());
        $this->assertEquals("144", $country->getNumericCode());
    }
}
