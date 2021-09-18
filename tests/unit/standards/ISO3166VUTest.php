<?php
                
namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166VUTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166VUTest extends TestCase
{
    public function testVU(): void
    {
        $country = ISO3166::VU();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Vanuatu", $country->getName());
        $this->assertEquals("VU", $country->getAlpha2());
        $this->assertEquals("VUT", $country->getAlpha3());
        $this->assertEquals("548", $country->getNumericCode());
    }
}
