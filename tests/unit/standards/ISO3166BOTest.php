<?php

namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166BOTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166BOTest extends TestCase
{
    public function testBO(): void
    {
        $country = ISO3166::BO();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Bolivia (Plurinational State of)", $country->getName());
        $this->assertEquals("BO", $country->getAlpha2());
        $this->assertEquals("BOL", $country->getAlpha3());
        $this->assertEquals("068", $country->getNumericCode());
    }
}
