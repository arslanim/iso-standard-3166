<?php
                
namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166TNTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166TNTest extends TestCase
{
    public function testTN(): void
    {
        $country = ISO3166::TN();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Tunisia", $country->getName());
        $this->assertEquals("TN", $country->getAlpha2());
        $this->assertEquals("TUN", $country->getAlpha3());
        $this->assertEquals("788", $country->getNumericCode());
    }
}
