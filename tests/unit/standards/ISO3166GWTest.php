<?php
                
namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166GWTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166GWTest extends TestCase
{
    public function testGW(): void
    {
        $country = ISO3166::GW();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Guinea-Bissau", $country->getName());
        $this->assertEquals("GW", $country->getAlpha2());
        $this->assertEquals("GNB", $country->getAlpha3());
        $this->assertEquals("624", $country->getNumericCode());
    }
}
