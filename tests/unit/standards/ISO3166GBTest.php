<?php

namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166GBTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166GBTest extends TestCase
{
    public function testGB(): void
    {
        $country = ISO3166::GB();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("United Kingdom of Great Britain and Northern Ireland", $country->getName());
        $this->assertEquals("GB", $country->getAlpha2());
        $this->assertEquals("GBR", $country->getAlpha3());
        $this->assertEquals("826", $country->getNumericCode());
    }
}
