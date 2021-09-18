<?php
                
namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166BGTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166BGTest extends TestCase
{
    public function testBG(): void
    {
        $country = ISO3166::BG();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Bulgaria", $country->getName());
        $this->assertEquals("BG", $country->getAlpha2());
        $this->assertEquals("BGR", $country->getAlpha3());
        $this->assertEquals("100", $country->getNumericCode());
    }
}
