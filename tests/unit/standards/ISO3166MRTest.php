<?php
                
namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166MRTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166MRTest extends TestCase
{
    public function testMR(): void
    {
        $country = ISO3166::MR();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Mauritania", $country->getName());
        $this->assertEquals("MR", $country->getAlpha2());
        $this->assertEquals("MRT", $country->getAlpha3());
        $this->assertEquals("478", $country->getNumericCode());
    }
}
