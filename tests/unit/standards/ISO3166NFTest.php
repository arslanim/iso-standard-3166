<?php
                
namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166NFTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166NFTest extends TestCase
{
    public function testNF(): void
    {
        $country = ISO3166::NF();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Norfolk Island", $country->getName());
        $this->assertEquals("NF", $country->getAlpha2());
        $this->assertEquals("NFK", $country->getAlpha3());
        $this->assertEquals("574", $country->getNumericCode());
    }
}
