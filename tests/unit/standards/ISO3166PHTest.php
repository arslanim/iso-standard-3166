<?php
                
namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166PHTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166PHTest extends TestCase
{
    public function testPH(): void
    {
        $country = ISO3166::PH();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Philippines", $country->getName());
        $this->assertEquals("PH", $country->getAlpha2());
        $this->assertEquals("PHL", $country->getAlpha3());
        $this->assertEquals("608", $country->getNumericCode());
    }
}
