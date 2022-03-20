<?php

namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166MSTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166MSTest extends TestCase
{
    public function testMS(): void
    {
        $country = ISO3166::MS();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Montserrat", $country->getName());
        $this->assertEquals("MS", $country->getAlpha2());
        $this->assertEquals("MSR", $country->getAlpha3());
        $this->assertEquals("500", $country->getNumericCode());
    }
}
