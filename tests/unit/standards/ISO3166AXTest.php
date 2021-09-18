<?php
                
namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166AXTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166AXTest extends TestCase
{
    public function testAX(): void
    {
        $country = ISO3166::AX();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Ãland Islands", $country->getName());
        $this->assertEquals("AX", $country->getAlpha2());
        $this->assertEquals("ALA", $country->getAlpha3());
        $this->assertEquals("248", $country->getNumericCode());
    }
}
