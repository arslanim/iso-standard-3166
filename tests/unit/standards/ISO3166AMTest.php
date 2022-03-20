<?php

namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166AMTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166AMTest extends TestCase
{
    public function testAM(): void
    {
        $country = ISO3166::AM();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Armenia", $country->getName());
        $this->assertEquals("AM", $country->getAlpha2());
        $this->assertEquals("ARM", $country->getAlpha3());
        $this->assertEquals("051", $country->getNumericCode());
    }
}
