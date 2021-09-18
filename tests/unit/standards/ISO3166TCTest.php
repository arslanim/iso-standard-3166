<?php
                
namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166TCTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166TCTest extends TestCase
{
    public function testTC(): void
    {
        $country = ISO3166::TC();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Turks and Caicos Islands", $country->getName());
        $this->assertEquals("TC", $country->getAlpha2());
        $this->assertEquals("TCA", $country->getAlpha3());
        $this->assertEquals("796", $country->getNumericCode());
    }
}
