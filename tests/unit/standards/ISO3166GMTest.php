<?php
                
namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166GMTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166GMTest extends TestCase
{
    public function testGM(): void
    {
        $country = ISO3166::GM();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Gambia", $country->getName());
        $this->assertEquals("GM", $country->getAlpha2());
        $this->assertEquals("GMB", $country->getAlpha3());
        $this->assertEquals("270", $country->getNumericCode());
    }
}
