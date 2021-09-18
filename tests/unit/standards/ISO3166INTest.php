<?php
                
namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166INTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166INTest extends TestCase
{
    public function testIN(): void
    {
        $country = ISO3166::IN();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("India", $country->getName());
        $this->assertEquals("IN", $country->getAlpha2());
        $this->assertEquals("IND", $country->getAlpha3());
        $this->assertEquals("356", $country->getNumericCode());
    }
}
