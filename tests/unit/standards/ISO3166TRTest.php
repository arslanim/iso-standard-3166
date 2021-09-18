<?php
                
namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166TRTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166TRTest extends TestCase
{
    public function testTR(): void
    {
        $country = ISO3166::TR();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Turkey", $country->getName());
        $this->assertEquals("TR", $country->getAlpha2());
        $this->assertEquals("TUR", $country->getAlpha3());
        $this->assertEquals("792", $country->getNumericCode());
    }
}
