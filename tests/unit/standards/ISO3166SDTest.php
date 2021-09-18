<?php
                
namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166SDTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166SDTest extends TestCase
{
    public function testSD(): void
    {
        $country = ISO3166::SD();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Sudan", $country->getName());
        $this->assertEquals("SD", $country->getAlpha2());
        $this->assertEquals("SDN", $country->getAlpha3());
        $this->assertEquals("729", $country->getNumericCode());
    }
}
