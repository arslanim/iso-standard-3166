<?php
                
namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166AGTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166AGTest extends TestCase
{
    public function testAG(): void
    {
        $country = ISO3166::AG();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Antigua and Barbuda", $country->getName());
        $this->assertEquals("AG", $country->getAlpha2());
        $this->assertEquals("ATG", $country->getAlpha3());
        $this->assertEquals("028", $country->getNumericCode());
    }
}
