<?php
                
namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166AOTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166AOTest extends TestCase
{
    public function testAO(): void
    {
        $country = ISO3166::AO();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Angola", $country->getName());
        $this->assertEquals("AO", $country->getAlpha2());
        $this->assertEquals("AGO", $country->getAlpha3());
        $this->assertEquals("024", $country->getNumericCode());
    }
}
