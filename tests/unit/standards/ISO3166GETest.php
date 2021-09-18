<?php
                
namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166GETest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166GETest extends TestCase
{
    public function testGE(): void
    {
        $country = ISO3166::GE();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Georgia", $country->getName());
        $this->assertEquals("GE", $country->getAlpha2());
        $this->assertEquals("GEO", $country->getAlpha3());
        $this->assertEquals("268", $country->getNumericCode());
    }
}
