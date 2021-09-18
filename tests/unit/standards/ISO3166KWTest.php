<?php
                
namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166KWTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166KWTest extends TestCase
{
    public function testKW(): void
    {
        $country = ISO3166::KW();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Kuwait", $country->getName());
        $this->assertEquals("KW", $country->getAlpha2());
        $this->assertEquals("KWT", $country->getAlpha3());
        $this->assertEquals("414", $country->getNumericCode());
    }
}
