<?php
                
namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166TKTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166TKTest extends TestCase
{
    public function testTK(): void
    {
        $country = ISO3166::TK();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Tokelau", $country->getName());
        $this->assertEquals("TK", $country->getAlpha2());
        $this->assertEquals("TKL", $country->getAlpha3());
        $this->assertEquals("772", $country->getNumericCode());
    }
}
