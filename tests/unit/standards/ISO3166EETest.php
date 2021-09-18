<?php
                
namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166EETest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166EETest extends TestCase
{
    public function testEE(): void
    {
        $country = ISO3166::EE();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Estonia", $country->getName());
        $this->assertEquals("EE", $country->getAlpha2());
        $this->assertEquals("EST", $country->getAlpha3());
        $this->assertEquals("233", $country->getNumericCode());
    }
}
