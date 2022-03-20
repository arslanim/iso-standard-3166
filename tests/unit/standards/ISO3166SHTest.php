<?php

namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166SHTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166SHTest extends TestCase
{
    public function testSH(): void
    {
        $country = ISO3166::SH();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Saint Helena, Ascension and Tristan da Cunha[b]", $country->getName());
        $this->assertEquals("SH", $country->getAlpha2());
        $this->assertEquals("SHN", $country->getAlpha3());
        $this->assertEquals("654", $country->getNumericCode());
    }
}
