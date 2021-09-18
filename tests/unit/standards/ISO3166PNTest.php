<?php
                
namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166PNTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166PNTest extends TestCase
{
    public function testPN(): void
    {
        $country = ISO3166::PN();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Pitcairn", $country->getName());
        $this->assertEquals("PN", $country->getAlpha2());
        $this->assertEquals("PCN", $country->getAlpha3());
        $this->assertEquals("612", $country->getNumericCode());
    }
}
