<?php
                
namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166MGTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166MGTest extends TestCase
{
    public function testMG(): void
    {
        $country = ISO3166::MG();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Madagascar", $country->getName());
        $this->assertEquals("MG", $country->getAlpha2());
        $this->assertEquals("MDG", $country->getAlpha3());
        $this->assertEquals("450", $country->getNumericCode());
    }
}
