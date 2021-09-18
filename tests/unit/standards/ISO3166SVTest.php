<?php
                
namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166SVTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166SVTest extends TestCase
{
    public function testSV(): void
    {
        $country = ISO3166::SV();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("El Salvador", $country->getName());
        $this->assertEquals("SV", $country->getAlpha2());
        $this->assertEquals("SLV", $country->getAlpha3());
        $this->assertEquals("222", $country->getNumericCode());
    }
}
