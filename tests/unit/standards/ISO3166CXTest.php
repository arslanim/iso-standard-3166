<?php
                
namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166CXTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166CXTest extends TestCase
{
    public function testCX(): void
    {
        $country = ISO3166::CX();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Christmas Island", $country->getName());
        $this->assertEquals("CX", $country->getAlpha2());
        $this->assertEquals("CXR", $country->getAlpha3());
        $this->assertEquals("162", $country->getNumericCode());
    }
}
