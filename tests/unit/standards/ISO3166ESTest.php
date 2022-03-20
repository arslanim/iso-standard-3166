<?php

namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166ESTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166ESTest extends TestCase
{
    public function testES(): void
    {
        $country = ISO3166::ES();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Spain", $country->getName());
        $this->assertEquals("ES", $country->getAlpha2());
        $this->assertEquals("ESP", $country->getAlpha3());
        $this->assertEquals("724", $country->getNumericCode());
    }
}
