<?php
                
namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166SSTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166SSTest extends TestCase
{
    public function testSS(): void
    {
        $country = ISO3166::SS();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("South Sudan", $country->getName());
        $this->assertEquals("SS", $country->getAlpha2());
        $this->assertEquals("SSD", $country->getAlpha3());
        $this->assertEquals("728", $country->getNumericCode());
    }
}
