<?php

namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166KNTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166KNTest extends TestCase
{
    public function testKN(): void
    {
        $country = ISO3166::KN();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Saint Kitts and Nevis", $country->getName());
        $this->assertEquals("KN", $country->getAlpha2());
        $this->assertEquals("KNA", $country->getAlpha3());
        $this->assertEquals("659", $country->getNumericCode());
    }
}
