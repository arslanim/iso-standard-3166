<?php
                
namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166BDTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166BDTest extends TestCase
{
    public function testBD(): void
    {
        $country = ISO3166::BD();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Bangladesh", $country->getName());
        $this->assertEquals("BD", $country->getAlpha2());
        $this->assertEquals("BGD", $country->getAlpha3());
        $this->assertEquals("050", $country->getNumericCode());
    }
}
