<?php
                
namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166VGTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166VGTest extends TestCase
{
    public function testVG(): void
    {
        $country = ISO3166::VG();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Virgin Islands (British)", $country->getName());
        $this->assertEquals("VG", $country->getAlpha2());
        $this->assertEquals("VGB", $country->getAlpha3());
        $this->assertEquals("092", $country->getNumericCode());
    }
}
