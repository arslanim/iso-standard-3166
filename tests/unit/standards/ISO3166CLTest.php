<?php
                
namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166CLTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166CLTest extends TestCase
{
    public function testCL(): void
    {
        $country = ISO3166::CL();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Chile", $country->getName());
        $this->assertEquals("CL", $country->getAlpha2());
        $this->assertEquals("CHL", $country->getAlpha3());
        $this->assertEquals("152", $country->getNumericCode());
    }
}
