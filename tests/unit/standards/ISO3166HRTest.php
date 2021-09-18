<?php
                
namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166HRTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166HRTest extends TestCase
{
    public function testHR(): void
    {
        $country = ISO3166::HR();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Croatia", $country->getName());
        $this->assertEquals("HR", $country->getAlpha2());
        $this->assertEquals("HRV", $country->getAlpha3());
        $this->assertEquals("191", $country->getNumericCode());
    }
}
