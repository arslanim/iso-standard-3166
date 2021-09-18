<?php
                
namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166DETest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166DETest extends TestCase
{
    public function testDE(): void
    {
        $country = ISO3166::DE();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Germany", $country->getName());
        $this->assertEquals("DE", $country->getAlpha2());
        $this->assertEquals("DEU", $country->getAlpha3());
        $this->assertEquals("276", $country->getNumericCode());
    }
}
