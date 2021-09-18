<?php
                
namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166BNTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166BNTest extends TestCase
{
    public function testBN(): void
    {
        $country = ISO3166::BN();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Brunei Darussalam", $country->getName());
        $this->assertEquals("BN", $country->getAlpha2());
        $this->assertEquals("BRN", $country->getAlpha3());
        $this->assertEquals("096", $country->getNumericCode());
    }
}
