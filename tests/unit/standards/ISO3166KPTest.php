<?php

namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166KPTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166KPTest extends TestCase
{
    public function testKP(): void
    {
        $country = ISO3166::KP();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Korea (Democratic People's Republic of)", $country->getName());
        $this->assertEquals("KP", $country->getAlpha2());
        $this->assertEquals("PRK", $country->getAlpha3());
        $this->assertEquals("408", $country->getNumericCode());
    }
}
