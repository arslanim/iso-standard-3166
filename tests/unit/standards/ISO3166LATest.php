<?php

namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166LATest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166LATest extends TestCase
{
    public function testLA(): void
    {
        $country = ISO3166::LA();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Lao People's Democratic Republic", $country->getName());
        $this->assertEquals("LA", $country->getAlpha2());
        $this->assertEquals("LAO", $country->getAlpha3());
        $this->assertEquals("418", $country->getNumericCode());
    }
}
