<?php
                
namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166EHTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166EHTest extends TestCase
{
    public function testEH(): void
    {
        $country = ISO3166::EH();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals(" Western Sahara", $country->getName());
        $this->assertEquals("EH", $country->getAlpha2());
        $this->assertEquals("ESH", $country->getAlpha3());
        $this->assertEquals("732", $country->getNumericCode());
    }
}
