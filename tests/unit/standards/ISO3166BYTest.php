<?php
                
namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166BYTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166BYTest extends TestCase
{
    public function testBY(): void
    {
        $country = ISO3166::BY();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Belarus", $country->getName());
        $this->assertEquals("BY", $country->getAlpha2());
        $this->assertEquals("BLR", $country->getAlpha3());
        $this->assertEquals("112", $country->getNumericCode());
    }
}
