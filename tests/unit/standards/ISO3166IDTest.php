<?php
                
namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166IDTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166IDTest extends TestCase
{
    public function testID(): void
    {
        $country = ISO3166::ID();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Indonesia", $country->getName());
        $this->assertEquals("ID", $country->getAlpha2());
        $this->assertEquals("IDN", $country->getAlpha3());
        $this->assertEquals("360", $country->getNumericCode());
    }
}
