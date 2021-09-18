<?php
                
namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166TFTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166TFTest extends TestCase
{
    public function testTF(): void
    {
        $country = ISO3166::TF();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("French Southern Territories", $country->getName());
        $this->assertEquals("TF", $country->getAlpha2());
        $this->assertEquals("ATF", $country->getAlpha3());
        $this->assertEquals("260", $country->getNumericCode());
    }
}
