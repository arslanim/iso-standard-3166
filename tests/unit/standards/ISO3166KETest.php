<?php
                
namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166KETest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166KETest extends TestCase
{
    public function testKE(): void
    {
        $country = ISO3166::KE();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Kenya", $country->getName());
        $this->assertEquals("KE", $country->getAlpha2());
        $this->assertEquals("KEN", $country->getAlpha3());
        $this->assertEquals("404", $country->getNumericCode());
    }
}
