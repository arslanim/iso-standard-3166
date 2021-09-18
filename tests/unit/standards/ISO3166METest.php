<?php
                
namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166METest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166METest extends TestCase
{
    public function testME(): void
    {
        $country = ISO3166::ME();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Montenegro", $country->getName());
        $this->assertEquals("ME", $country->getAlpha2());
        $this->assertEquals("MNE", $country->getAlpha3());
        $this->assertEquals("499", $country->getNumericCode());
    }
}
