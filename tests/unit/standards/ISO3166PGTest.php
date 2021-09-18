<?php
                
namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166PGTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166PGTest extends TestCase
{
    public function testPG(): void
    {
        $country = ISO3166::PG();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Papua New Guinea", $country->getName());
        $this->assertEquals("PG", $country->getAlpha2());
        $this->assertEquals("PNG", $country->getAlpha3());
        $this->assertEquals("598", $country->getNumericCode());
    }
}
