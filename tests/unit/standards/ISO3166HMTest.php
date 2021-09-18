<?php
                
namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166HMTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166HMTest extends TestCase
{
    public function testHM(): void
    {
        $country = ISO3166::HM();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Heard Island and McDonald Islands", $country->getName());
        $this->assertEquals("HM", $country->getAlpha2());
        $this->assertEquals("HMD", $country->getAlpha3());
        $this->assertEquals("334", $country->getNumericCode());
    }
}
