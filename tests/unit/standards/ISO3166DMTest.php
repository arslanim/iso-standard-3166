<?php
                
namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166DMTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166DMTest extends TestCase
{
    public function testDM(): void
    {
        $country = ISO3166::DM();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Dominica", $country->getName());
        $this->assertEquals("DM", $country->getAlpha2());
        $this->assertEquals("DMA", $country->getAlpha3());
        $this->assertEquals("212", $country->getNumericCode());
    }
}
