<?php
                
namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166HKTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166HKTest extends TestCase
{
    public function testHK(): void
    {
        $country = ISO3166::HK();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Hong Kong", $country->getName());
        $this->assertEquals("HK", $country->getAlpha2());
        $this->assertEquals("HKG", $country->getAlpha3());
        $this->assertEquals("344", $country->getNumericCode());
    }
}
