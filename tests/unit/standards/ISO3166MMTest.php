<?php
                
namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166MMTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166MMTest extends TestCase
{
    public function testMM(): void
    {
        $country = ISO3166::MM();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Myanmar", $country->getName());
        $this->assertEquals("MM", $country->getAlpha2());
        $this->assertEquals("MMR", $country->getAlpha3());
        $this->assertEquals("104", $country->getNumericCode());
    }
}
