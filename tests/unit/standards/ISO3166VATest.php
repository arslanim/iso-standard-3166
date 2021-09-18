<?php
                
namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166VATest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166VATest extends TestCase
{
    public function testVA(): void
    {
        $country = ISO3166::VA();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Holy See", $country->getName());
        $this->assertEquals("VA", $country->getAlpha2());
        $this->assertEquals("VAT", $country->getAlpha3());
        $this->assertEquals("336", $country->getNumericCode());
    }
}
