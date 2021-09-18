<?php
                
namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166ECTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166ECTest extends TestCase
{
    public function testEC(): void
    {
        $country = ISO3166::EC();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Ecuador", $country->getName());
        $this->assertEquals("EC", $country->getAlpha2());
        $this->assertEquals("ECU", $country->getAlpha3());
        $this->assertEquals("218", $country->getNumericCode());
    }
}
