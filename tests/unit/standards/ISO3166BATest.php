<?php

namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166BATest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166BATest extends TestCase
{
    public function testBA(): void
    {
        $country = ISO3166::BA();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Bosnia and Herzegovina", $country->getName());
        $this->assertEquals("BA", $country->getAlpha2());
        $this->assertEquals("BIH", $country->getAlpha3());
        $this->assertEquals("070", $country->getNumericCode());
    }
}
