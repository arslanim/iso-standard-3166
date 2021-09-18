<?php
                
namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166PLTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166PLTest extends TestCase
{
    public function testPL(): void
    {
        $country = ISO3166::PL();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Poland", $country->getName());
        $this->assertEquals("PL", $country->getAlpha2());
        $this->assertEquals("POL", $country->getAlpha3());
        $this->assertEquals("616", $country->getNumericCode());
    }
}
