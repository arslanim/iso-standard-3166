<?php
                
namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166OMTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166OMTest extends TestCase
{
    public function testOM(): void
    {
        $country = ISO3166::OM();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Oman", $country->getName());
        $this->assertEquals("OM", $country->getAlpha2());
        $this->assertEquals("OMN", $country->getAlpha3());
        $this->assertEquals("512", $country->getNumericCode());
    }
}
