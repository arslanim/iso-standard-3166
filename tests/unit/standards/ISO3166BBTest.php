<?php
                
namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166BBTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166BBTest extends TestCase
{
    public function testBB(): void
    {
        $country = ISO3166::BB();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Barbados", $country->getName());
        $this->assertEquals("BB", $country->getAlpha2());
        $this->assertEquals("BRB", $country->getAlpha3());
        $this->assertEquals("052", $country->getNumericCode());
    }
}
