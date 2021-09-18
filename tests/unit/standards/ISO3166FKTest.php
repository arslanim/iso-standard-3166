<?php
                
namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166FKTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166FKTest extends TestCase
{
    public function testFK(): void
    {
        $country = ISO3166::FK();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Falkland Islands (Malvinas)", $country->getName());
        $this->assertEquals("FK", $country->getAlpha2());
        $this->assertEquals("FLK", $country->getAlpha3());
        $this->assertEquals("238", $country->getNumericCode());
    }
}
