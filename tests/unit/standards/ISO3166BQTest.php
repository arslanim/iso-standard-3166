<?php
                
namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166BQTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166BQTest extends TestCase
{
    public function testBQ(): void
    {
        $country = ISO3166::BQ();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Bonaire, Sint Eustatius and Saba[a]", $country->getName());
        $this->assertEquals("BQ", $country->getAlpha2());
        $this->assertEquals("BES", $country->getAlpha3());
        $this->assertEquals("535", $country->getNumericCode());
    }
}
