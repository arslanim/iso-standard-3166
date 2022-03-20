<?php

namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166NCTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166NCTest extends TestCase
{
    public function testNC(): void
    {
        $country = ISO3166::NC();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("New Caledonia", $country->getName());
        $this->assertEquals("NC", $country->getAlpha2());
        $this->assertEquals("NCL", $country->getAlpha3());
        $this->assertEquals("540", $country->getNumericCode());
    }
}
