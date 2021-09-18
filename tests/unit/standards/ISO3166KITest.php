<?php
                
namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166KITest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166KITest extends TestCase
{
    public function testKI(): void
    {
        $country = ISO3166::KI();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Kiribati", $country->getName());
        $this->assertEquals("KI", $country->getAlpha2());
        $this->assertEquals("KIR", $country->getAlpha3());
        $this->assertEquals("296", $country->getNumericCode());
    }
}
