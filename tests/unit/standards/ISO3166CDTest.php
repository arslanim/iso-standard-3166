<?php
                
namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166CDTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166CDTest extends TestCase
{
    public function testCD(): void
    {
        $country = ISO3166::CD();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Congo, Democratic Republic of the", $country->getName());
        $this->assertEquals("CD", $country->getAlpha2());
        $this->assertEquals("COD", $country->getAlpha3());
        $this->assertEquals("180", $country->getNumericCode());
    }
}
