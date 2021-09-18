<?php
                
namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166SLTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166SLTest extends TestCase
{
    public function testSL(): void
    {
        $country = ISO3166::SL();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Sierra Leone", $country->getName());
        $this->assertEquals("SL", $country->getAlpha2());
        $this->assertEquals("SLE", $country->getAlpha3());
        $this->assertEquals("694", $country->getNumericCode());
    }
}
