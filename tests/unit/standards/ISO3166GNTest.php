<?php
                
namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166GNTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166GNTest extends TestCase
{
    public function testGN(): void
    {
        $country = ISO3166::GN();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Guinea", $country->getName());
        $this->assertEquals("GN", $country->getAlpha2());
        $this->assertEquals("GIN", $country->getAlpha3());
        $this->assertEquals("324", $country->getNumericCode());
    }
}
