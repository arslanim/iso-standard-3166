<?php
                
namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166AETest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166AETest extends TestCase
{
    public function testAE(): void
    {
        $country = ISO3166::AE();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("United Arab Emirates", $country->getName());
        $this->assertEquals("AE", $country->getAlpha2());
        $this->assertEquals("ARE", $country->getAlpha3());
        $this->assertEquals("784", $country->getNumericCode());
    }
}
