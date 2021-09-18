<?php
                
namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166PTTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166PTTest extends TestCase
{
    public function testPT(): void
    {
        $country = ISO3166::PT();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Portugal", $country->getName());
        $this->assertEquals("PT", $country->getAlpha2());
        $this->assertEquals("PRT", $country->getAlpha3());
        $this->assertEquals("620", $country->getNumericCode());
    }
}
