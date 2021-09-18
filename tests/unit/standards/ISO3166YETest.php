<?php
                
namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166YETest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166YETest extends TestCase
{
    public function testYE(): void
    {
        $country = ISO3166::YE();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Yemen", $country->getName());
        $this->assertEquals("YE", $country->getAlpha2());
        $this->assertEquals("YEM", $country->getAlpha3());
        $this->assertEquals("887", $country->getNumericCode());
    }
}
