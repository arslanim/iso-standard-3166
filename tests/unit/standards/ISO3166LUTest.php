<?php
                
namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166LUTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166LUTest extends TestCase
{
    public function testLU(): void
    {
        $country = ISO3166::LU();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Luxembourg", $country->getName());
        $this->assertEquals("LU", $country->getAlpha2());
        $this->assertEquals("LUX", $country->getAlpha3());
        $this->assertEquals("442", $country->getNumericCode());
    }
}
