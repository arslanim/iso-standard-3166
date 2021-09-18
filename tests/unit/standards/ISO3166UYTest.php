<?php
                
namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166UYTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166UYTest extends TestCase
{
    public function testUY(): void
    {
        $country = ISO3166::UY();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Uruguay", $country->getName());
        $this->assertEquals("UY", $country->getAlpha2());
        $this->assertEquals("URY", $country->getAlpha3());
        $this->assertEquals("858", $country->getNumericCode());
    }
}
