<?php
                
namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166DOTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166DOTest extends TestCase
{
    public function testDO(): void
    {
        $country = ISO3166::DO();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Dominican Republic", $country->getName());
        $this->assertEquals("DO", $country->getAlpha2());
        $this->assertEquals("DOM", $country->getAlpha3());
        $this->assertEquals("214", $country->getNumericCode());
    }
}
