<?php
                
namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166ALTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166ALTest extends TestCase
{
    public function testAL(): void
    {
        $country = ISO3166::AL();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Albania", $country->getName());
        $this->assertEquals("AL", $country->getAlpha2());
        $this->assertEquals("ALB", $country->getAlpha3());
        $this->assertEquals("008", $country->getNumericCode());
    }
}
