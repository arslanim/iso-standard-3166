<?php
                
namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166UGTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166UGTest extends TestCase
{
    public function testUG(): void
    {
        $country = ISO3166::UG();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Uganda", $country->getName());
        $this->assertEquals("UG", $country->getAlpha2());
        $this->assertEquals("UGA", $country->getAlpha3());
        $this->assertEquals("800", $country->getNumericCode());
    }
}
