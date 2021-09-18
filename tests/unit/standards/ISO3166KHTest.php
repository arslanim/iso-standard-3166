<?php
                
namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166KHTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166KHTest extends TestCase
{
    public function testKH(): void
    {
        $country = ISO3166::KH();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Cambodia", $country->getName());
        $this->assertEquals("KH", $country->getAlpha2());
        $this->assertEquals("KHM", $country->getAlpha3());
        $this->assertEquals("116", $country->getNumericCode());
    }
}
