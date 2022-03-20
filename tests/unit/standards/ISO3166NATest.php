<?php

namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166NATest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166NATest extends TestCase
{
    public function testNA(): void
    {
        $country = ISO3166::NA();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Namibia", $country->getName());
        $this->assertEquals("NA", $country->getAlpha2());
        $this->assertEquals("NAM", $country->getAlpha3());
        $this->assertEquals("516", $country->getNumericCode());
    }
}
