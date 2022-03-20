<?php

namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166PWTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166PWTest extends TestCase
{
    public function testPW(): void
    {
        $country = ISO3166::PW();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Palau", $country->getName());
        $this->assertEquals("PW", $country->getAlpha2());
        $this->assertEquals("PLW", $country->getAlpha3());
        $this->assertEquals("585", $country->getNumericCode());
    }
}
