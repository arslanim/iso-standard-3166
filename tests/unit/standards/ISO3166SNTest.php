<?php

namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166SNTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166SNTest extends TestCase
{
    public function testSN(): void
    {
        $country = ISO3166::SN();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Senegal", $country->getName());
        $this->assertEquals("SN", $country->getAlpha2());
        $this->assertEquals("SEN", $country->getAlpha3());
        $this->assertEquals("686", $country->getNumericCode());
    }
}
