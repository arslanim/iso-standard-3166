<?php
                
namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166GQTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166GQTest extends TestCase
{
    public function testGQ(): void
    {
        $country = ISO3166::GQ();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Equatorial Guinea", $country->getName());
        $this->assertEquals("GQ", $country->getAlpha2());
        $this->assertEquals("GNQ", $country->getAlpha3());
        $this->assertEquals("226", $country->getNumericCode());
    }
}
