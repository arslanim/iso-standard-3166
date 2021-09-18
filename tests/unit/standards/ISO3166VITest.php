<?php
                
namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166VITest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166VITest extends TestCase
{
    public function testVI(): void
    {
        $country = ISO3166::VI();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Virgin Islands (U.S.)", $country->getName());
        $this->assertEquals("VI", $country->getAlpha2());
        $this->assertEquals("VIR", $country->getAlpha3());
        $this->assertEquals("850", $country->getNumericCode());
    }
}
