<?php
                
namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166IQTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166IQTest extends TestCase
{
    public function testIQ(): void
    {
        $country = ISO3166::IQ();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Iraq", $country->getName());
        $this->assertEquals("IQ", $country->getAlpha2());
        $this->assertEquals("IRQ", $country->getAlpha3());
        $this->assertEquals("368", $country->getNumericCode());
    }
}
