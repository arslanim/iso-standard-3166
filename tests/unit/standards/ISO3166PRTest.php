<?php
                
namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166PRTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166PRTest extends TestCase
{
    public function testPR(): void
    {
        $country = ISO3166::PR();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Puerto Rico", $country->getName());
        $this->assertEquals("PR", $country->getAlpha2());
        $this->assertEquals("PRI", $country->getAlpha3());
        $this->assertEquals("630", $country->getNumericCode());
    }
}
