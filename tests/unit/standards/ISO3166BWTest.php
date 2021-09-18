<?php
                
namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166BWTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166BWTest extends TestCase
{
    public function testBW(): void
    {
        $country = ISO3166::BW();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Botswana", $country->getName());
        $this->assertEquals("BW", $country->getAlpha2());
        $this->assertEquals("BWA", $country->getAlpha3());
        $this->assertEquals("072", $country->getNumericCode());
    }
}
