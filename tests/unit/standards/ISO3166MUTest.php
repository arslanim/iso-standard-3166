<?php
                
namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166MUTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166MUTest extends TestCase
{
    public function testMU(): void
    {
        $country = ISO3166::MU();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Mauritius", $country->getName());
        $this->assertEquals("MU", $country->getAlpha2());
        $this->assertEquals("MUS", $country->getAlpha3());
        $this->assertEquals("480", $country->getNumericCode());
    }
}
