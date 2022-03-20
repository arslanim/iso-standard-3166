<?php

namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166THTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166THTest extends TestCase
{
    public function testTH(): void
    {
        $country = ISO3166::TH();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Thailand", $country->getName());
        $this->assertEquals("TH", $country->getAlpha2());
        $this->assertEquals("THA", $country->getAlpha3());
        $this->assertEquals("764", $country->getNumericCode());
    }
}
