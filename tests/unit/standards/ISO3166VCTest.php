<?php
                
namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166VCTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166VCTest extends TestCase
{
    public function testVC(): void
    {
        $country = ISO3166::VC();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Saint Vincent and the Grenadines", $country->getName());
        $this->assertEquals("VC", $country->getAlpha2());
        $this->assertEquals("VCT", $country->getAlpha3());
        $this->assertEquals("670", $country->getNumericCode());
    }
}
