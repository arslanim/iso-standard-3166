<?php
                
namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166DKTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166DKTest extends TestCase
{
    public function testDK(): void
    {
        $country = ISO3166::DK();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Denmark", $country->getName());
        $this->assertEquals("DK", $country->getAlpha2());
        $this->assertEquals("DNK", $country->getAlpha3());
        $this->assertEquals("208", $country->getNumericCode());
    }
}
