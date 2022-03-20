<?php

namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166NGTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166NGTest extends TestCase
{
    public function testNG(): void
    {
        $country = ISO3166::NG();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Nigeria", $country->getName());
        $this->assertEquals("NG", $country->getAlpha2());
        $this->assertEquals("NGA", $country->getAlpha3());
        $this->assertEquals("566", $country->getNumericCode());
    }
}
