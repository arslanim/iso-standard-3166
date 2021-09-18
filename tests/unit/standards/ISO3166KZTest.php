<?php
                
namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166KZTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166KZTest extends TestCase
{
    public function testKZ(): void
    {
        $country = ISO3166::KZ();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Kazakhstan", $country->getName());
        $this->assertEquals("KZ", $country->getAlpha2());
        $this->assertEquals("KAZ", $country->getAlpha3());
        $this->assertEquals("398", $country->getNumericCode());
    }
}
