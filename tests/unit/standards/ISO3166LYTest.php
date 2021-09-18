<?php
                
namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166LYTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166LYTest extends TestCase
{
    public function testLY(): void
    {
        $country = ISO3166::LY();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Libya", $country->getName());
        $this->assertEquals("LY", $country->getAlpha2());
        $this->assertEquals("LBY", $country->getAlpha3());
        $this->assertEquals("434", $country->getNumericCode());
    }
}
