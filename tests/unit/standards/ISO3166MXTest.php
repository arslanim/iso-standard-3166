<?php
                
namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166MXTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166MXTest extends TestCase
{
    public function testMX(): void
    {
        $country = ISO3166::MX();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Mexico", $country->getName());
        $this->assertEquals("MX", $country->getAlpha2());
        $this->assertEquals("MEX", $country->getAlpha3());
        $this->assertEquals("484", $country->getNumericCode());
    }
}
