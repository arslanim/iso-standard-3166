<?php
                
namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166SCTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166SCTest extends TestCase
{
    public function testSC(): void
    {
        $country = ISO3166::SC();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Seychelles", $country->getName());
        $this->assertEquals("SC", $country->getAlpha2());
        $this->assertEquals("SYC", $country->getAlpha3());
        $this->assertEquals("690", $country->getNumericCode());
    }
}
