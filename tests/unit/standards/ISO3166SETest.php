<?php
                
namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166SETest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166SETest extends TestCase
{
    public function testSE(): void
    {
        $country = ISO3166::SE();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Sweden", $country->getName());
        $this->assertEquals("SE", $country->getAlpha2());
        $this->assertEquals("SWE", $country->getAlpha3());
        $this->assertEquals("752", $country->getNumericCode());
    }
}
