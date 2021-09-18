<?php
                
namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166STTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166STTest extends TestCase
{
    public function testST(): void
    {
        $country = ISO3166::ST();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Sao Tome and Principe", $country->getName());
        $this->assertEquals("ST", $country->getAlpha2());
        $this->assertEquals("STP", $country->getAlpha3());
        $this->assertEquals("678", $country->getNumericCode());
    }
}
