<?php
                
namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166LBTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166LBTest extends TestCase
{
    public function testLB(): void
    {
        $country = ISO3166::LB();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Lebanon", $country->getName());
        $this->assertEquals("LB", $country->getAlpha2());
        $this->assertEquals("LBN", $country->getAlpha3());
        $this->assertEquals("422", $country->getNumericCode());
    }
}
