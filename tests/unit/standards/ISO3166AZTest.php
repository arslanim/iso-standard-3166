<?php
                
namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166AZTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166AZTest extends TestCase
{
    public function testAZ(): void
    {
        $country = ISO3166::AZ();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Azerbaijan", $country->getName());
        $this->assertEquals("AZ", $country->getAlpha2());
        $this->assertEquals("AZE", $country->getAlpha3());
        $this->assertEquals("031", $country->getNumericCode());
    }
}
