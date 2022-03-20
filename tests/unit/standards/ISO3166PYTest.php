<?php

namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166PYTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166PYTest extends TestCase
{
    public function testPY(): void
    {
        $country = ISO3166::PY();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Paraguay", $country->getName());
        $this->assertEquals("PY", $country->getAlpha2());
        $this->assertEquals("PRY", $country->getAlpha3());
        $this->assertEquals("600", $country->getNumericCode());
    }
}
