<?php
                
namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166GRTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166GRTest extends TestCase
{
    public function testGR(): void
    {
        $country = ISO3166::GR();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Greece", $country->getName());
        $this->assertEquals("GR", $country->getAlpha2());
        $this->assertEquals("GRC", $country->getAlpha3());
        $this->assertEquals("300", $country->getNumericCode());
    }
}
