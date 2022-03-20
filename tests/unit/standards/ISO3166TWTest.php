<?php

namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166TWTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166TWTest extends TestCase
{
    public function testTW(): void
    {
        $country = ISO3166::TW();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Taiwan, Province of China", $country->getName());
        $this->assertEquals("TW", $country->getAlpha2());
        $this->assertEquals("TWN", $country->getAlpha3());
        $this->assertEquals("158", $country->getNumericCode());
    }
}
