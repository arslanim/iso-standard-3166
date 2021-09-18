<?php
                
namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166MFTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166MFTest extends TestCase
{
    public function testMF(): void
    {
        $country = ISO3166::MF();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Saint Martin (French part)", $country->getName());
        $this->assertEquals("MF", $country->getAlpha2());
        $this->assertEquals("MAF", $country->getAlpha3());
        $this->assertEquals("663", $country->getNumericCode());
    }
}
