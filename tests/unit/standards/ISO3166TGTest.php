<?php
                
namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166TGTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166TGTest extends TestCase
{
    public function testTG(): void
    {
        $country = ISO3166::TG();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Togo", $country->getName());
        $this->assertEquals("TG", $country->getAlpha2());
        $this->assertEquals("TGO", $country->getAlpha3());
        $this->assertEquals("768", $country->getNumericCode());
    }
}
