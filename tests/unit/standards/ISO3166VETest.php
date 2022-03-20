<?php

namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166VETest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166VETest extends TestCase
{
    public function testVE(): void
    {
        $country = ISO3166::VE();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Venezuela (Bolivarian Republic of)", $country->getName());
        $this->assertEquals("VE", $country->getAlpha2());
        $this->assertEquals("VEN", $country->getAlpha3());
        $this->assertEquals("862", $country->getNumericCode());
    }
}
