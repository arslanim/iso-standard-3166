<?php
                
namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166SMTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166SMTest extends TestCase
{
    public function testSM(): void
    {
        $country = ISO3166::SM();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("San Marino", $country->getName());
        $this->assertEquals("SM", $country->getAlpha2());
        $this->assertEquals("SMR", $country->getAlpha3());
        $this->assertEquals("674", $country->getNumericCode());
    }
}
