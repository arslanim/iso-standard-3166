<?php

namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166GFTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166GFTest extends TestCase
{
    public function testGF(): void
    {
        $country = ISO3166::GF();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("French Guiana", $country->getName());
        $this->assertEquals("GF", $country->getAlpha2());
        $this->assertEquals("GUF", $country->getAlpha3());
        $this->assertEquals("254", $country->getNumericCode());
    }
}
